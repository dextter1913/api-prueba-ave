<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class UsuariosModel extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'id',
        'documento',
        'nombre',
        'apellido',
        'ciudad',
        'direccion',
        'celular',
        'documento_base64',
        'correo',
        'cliente_creado_por',
        'cliente_eliminado_por',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $table = 'usuarios';
}
