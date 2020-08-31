<?php

namespace App\Http\Controllers;

use App\CarThreeSixty;
use Illuminate\Http\Request;

class CarThreeSixtyController extends Controller
{
   
    public function index()
    {
        //get all data
        $data = CarThreeSixty::orderBy('id', 'desc')
            ->get();

        return response()->json($data, 200);
    }

    public function store(Request $request)
    {
        //create new data
        $data = CarThreeSixty::create([
            'path' => $request->path,
            'car_id' => $request->car_id,
        ]);

        return response()->json($data, 200);
    }

    public function show(CarThreeSixty $carThreeSixty)
    {
        //get one data
        return response()->json($carThreeSixty);
    }

    public function update(Request $request, CarThreeSixty $carThreeSixty)
    {
        //update data
        $data = CarThreeSixty::where('id', $carThreeSixty->id)->update([
            'path' => $request->path,
            'car_id' => $request->car_id,
        ]);
      
        return response()->json('success', 200);
    }


    public function destroy(CarThreeSixty $carThreeSixty)
    {
        //delete data
        $data = CarThreeSixty::destroy($carThreeSixty->id);

        return response('success', 200);
    }
}
