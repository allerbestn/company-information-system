<?php

namespace App\Http\Controllers;

use App\Bus;
use App\Car;
use App\Lorry;

class TransportController extends Controller
{
    public function index()
    {
        $cars = Car::all();
        $buses = Bus::all();
        $lorries = Lorry::all();
        return response()->json([
            'cars' => $cars,
            'buses' => $buses,
            'lorries' => $lorries
        ]);
    }
}
