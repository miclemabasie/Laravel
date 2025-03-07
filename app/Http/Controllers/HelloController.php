<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function welcome()
    {
        $data = ['name' => 'Miclem Abasie', 'age' => 12];
        return view('hello.welcome', $data);
    }
}
