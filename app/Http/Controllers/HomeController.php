<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {

        // return view('home.index', ['name' => 'Miclem', 'surname' => 'abasie']);

        return view('home.index')->with('name', 'Abasie')
            ->with('surname', 'Miclem');
    }
}
