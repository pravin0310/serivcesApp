<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CreateUserController extends Controller
{
    public function store(Request $request)
    {
        ini_set('memory_limit', '1G');
        print_r($request->all());
    }
}
