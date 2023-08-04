<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CreateUsersController extends Controller
{
    public function index(Request $request)
    {
        return view('modulos.form-client');
    }

    public function create(Request $request)
    {
    }
}
