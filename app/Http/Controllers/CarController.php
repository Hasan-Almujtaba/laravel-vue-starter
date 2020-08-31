<?php

namespace App\Http\Controllers;

use App\Car;
use Illuminate\Http\Request;

class CarController extends Controller
{
    public function index()
    {
        // get all data with relation
        $data = Car::with('galleries','details','specifications','threeSixties','variants')
            ->orderBy('id', 'desc')
            ->get();

        return response()->json($data, 200);
    }

    public function store(Request $request)
    {
        //create new data
        $data = Car::create([
            'name' => $request->name,
            'thumbnail_image' => $request->thumbnail_image,
        ]);

        return response()->json($data, 200);
    }

    public function show(Car $car)
    {
        //get one data
        return response()->json($car);
    }

    public function update(Request $request, Car $car)
    {
        //update data
        $data = Car::where('id', $car->id)->update([
            'name' => $request->name,
            'thumbnail_image' => $request->thumbnail_image,
        ]);

        $car = Car::find($car->id);
      
        return response()->json($car, 200);
    }

    public function destroy(Car $car)
    {
        //delete data
        $data = Car::destroy($car->id);

        return response('success', 200);
    }
}
