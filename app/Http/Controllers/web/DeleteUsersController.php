<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\UsuariosModel;
use Illuminate\Http\Request;

class DeleteUsersController extends Controller
{
    public function destroy($id)
    {
        UsuariosModel::where('id', $id)->delete();
        return redirect()->action([ReadUsersController::class, 'index']);
    }
}
