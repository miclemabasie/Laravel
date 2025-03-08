<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {

        // return view('home.index', ['name' => 'Miclem', 'surname' => 'abasie']);
        // sect all cars
        $cars = Car::get();

        // // select published cars
        // $cars = Car::where('published_at', '!=', null)->get();


        return view('home.index')->with('name', 'Abasie')
            ->with('surname', 'Miclem');
    }
}
