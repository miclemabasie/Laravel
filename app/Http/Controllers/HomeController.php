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
        // $car = Car::first();

        // $car = Car::find(2);

        $cars = Car::orderBy('published_at', 'desc')->get();

        dump($cars);

        $car = new Car();

        $car->maker_id = 1;
        $car->model_id = 1;
        $car->year = 1990;
        $car->price = 10000;
        $car->vin = 1;
        $car->mileage = 270;
        $car->car_type_id = 1;
        $car->fuel_type_id = 2;
        $car->user_id = 1;
        $car->city_id = 1;
        $car->address = "Bamenda, Cameroon";
        $car->phone = "43433";
        $car->description = "Car description";
        $car->published_at = now();
        $car->save();

        return view('home.index')->with('name', 'Abasie')
            ->with('surname', 'Miclem');
    }
}
