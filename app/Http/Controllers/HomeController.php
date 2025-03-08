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
        // $cars = Car::get();

        // select all published cars
        $cars = Car::where('published_at', '!=', null)->get();


        // select the first car
        // $car = Car::where('published_at', '!=', null)->first();
        $car = Car::first();
        dump($car);

        return view('home.index')->with('name', 'Abasie')
            ->with('surname', 'Miclem');
    }
}
