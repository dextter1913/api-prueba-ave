<?php

namespace App\Tools;

class ValidatorTools
{
    public static function validateClientsWeb($request)
    {
        $data = $request->validate([
            'documento'          => 'required|string|max:25',
            'nombre'             => 'required|string|max:55',
            'apellido'           => 'required|string|max:55',
            'ciudad'             => 'required|string|max:55',
            'direccion'          => 'required|string|max:255',
            'celular'            => 'required|string|max:20',
            'documento_base64'   => 'required|mimes:pdf|max:2048',
            'cliente_creado_por' => 'required|string|max:20'
        ]);
        return $data;
    }
}
