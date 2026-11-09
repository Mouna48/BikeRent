<?php

namespace App\Http\Controllers;

use App\Models\Bike;

class BikeController extends Controller
{
    // Public catalog of bikes
    public function index()
    {
        $bikes = Bike::all();

        return view('bikes.index', compact('bikes'));
    }

    // Details of a specific bike
    public function show(Bike $bike)
    {
        return view('bikes.show', compact('bike'));
    }
}
