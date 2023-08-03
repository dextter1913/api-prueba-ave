<?php

namespace App\Services;

use GuzzleHttp\Psr7\Request;

class CreateService
{
    public static function CreateUsers(Request $request)
    {
        return $request;
    }
}
