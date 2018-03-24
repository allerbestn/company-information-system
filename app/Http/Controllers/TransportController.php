<?php

namespace App\Http\Controllers;

use App\Bus;
use App\Car;
use App\Lorry;
use Illuminate\Http\Request;

class TransportController extends Controller
{
    public function index()
    {
        $cars = Car::all();
        $buses = Bus::all();
        $lorries = Lorry::all();
        return view('transport', [
            'cars' => $cars,
            'buses' => $buses,
            'lorries' => $lorries
        ]);
    }
}
