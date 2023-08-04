<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\UsuariosModel;
use App\Tools\ValidatorTools;
use Illuminate\Http\Request;

class CreateUsersController extends Controller
{
    public function index()
    {
        return view('modulos.form-client');
    }

    public function create(Request $request)
    {
        try {
            if (isset($request->all()['_token'])) {

                $data = ValidatorTools::validateClientsWeb($request);
                $fillable = [
                    'documento'          => $data['documento'],
                    'nombre'             => $data['nombre'],
                    'apellido'           => $data['apellido'],
                    'ciudad'             => $data['ciudad'],
                    'direccion'          => $data['direccion'],
                    'celular'            => $data['celular'],
                    'documento_base64'   => base64_encode(file_get_contents($data['documento_base64'])),
                    'correo'             => isset($request->all()['correo']) ? $request->all()['correo'] : "Sin correo",
                    'cliente_creado_por' => $data['cliente_creado_por']
                ];
                UsuariosModel::create($fillable);
                $message = "registrado correctamente";
            }
        } catch (\Throwable $e) {
            $message = "error " . $e->getMessage();
        }
        return view('modulos.form-client')->with(['message' => $message]);
    }
}
