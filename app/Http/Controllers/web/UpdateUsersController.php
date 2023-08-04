<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use App\Models\UsuariosModel;
use App\Tools\ValidatorTools;
use Illuminate\Http\Request;

class UpdateUsersController extends Controller
{
    public function index($id)
    {
        $result = UsuariosModel::where('id', $id)->first();
        return view('modulos.form-edit-client', compact('result'));
    }

    public function update(Request $request)
    {
        try {
            if (isset($request->all()['_token'])) {

                $documento_base64 = UsuariosModel::select('documento_base64')->where('id', $request->all()['id'])->get()[0]['documento_base64'];
                if (!empty($request->all()['documento_base64'])) {
                    $documento_base64 = base64_encode(file_get_contents($request->all()['documento_base64']));
                }
                $request->all()['documento_base64'] = $documento_base64;
                $fillable = [
                    'documento'          => $request->all()['documento'],
                    'nombre'             => $request->all()['nombre'],
                    'apellido'           => $request->all()['apellido'],
                    'ciudad'             => $request->all()['ciudad'],
                    'direccion'          => $request->all()['direccion'],
                    'celular'            => $request->all()['celular'],
                    'documento_base64'   => $documento_base64,
                    'correo'             => isset($request->all()['correo']) ? $request->all()['correo'] : "Sin correo"
                ];
                UsuariosModel::where('id', $request->all()['id'])
                    ->update($fillable);
            }
        } catch (\Throwable $e) {
            echo "error " . $e->getMessage();
        }
        return redirect()->action([ReadUsersController::class, 'index']);
    }
}
