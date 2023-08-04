<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use App\Models\UsuariosModel;
use Illuminate\Http\Request;

class ReadUsersController extends Controller
{
    public function index()
    {
        $data = UsuariosModel::all();
        return view('dashboard', compact('data'));
    }
}
