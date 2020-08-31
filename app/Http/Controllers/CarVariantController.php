<?php

namespace App\Http\Controllers;

use App\CarVariant;
use Illuminate\Http\Request;

class CarVariantController extends Controller
{
   
    public function index()
    {
        //get all data
        $data = CarVariant::orderBy('id', 'desc')
            ->get();

        return response()->json($data, 200);
    }
   
    public function store(Request $request)
    {
        //create new data
        $data = CarVariant::create([
            'color' => $request->color,
            'image' => $request->image,
            'car_id' => $request->car_id,
        ]);

        return response()->json($data, 200);
    }

    public function show(CarVariant $carVariant)
    {
        //get one data
        return response()->json($carVariant);
    }

    public function update(Request $request, CarVariant $carVariant)
    {
        //update data
        $data = CarVariant::where('id', $carVariant->id)->update([
            'color' => $request->color,
            'image' => $request->image,
            'car_id' => $request->car_id,
        ]);
      
        return response()->json('success', 200);
    }

    public function destroy(CarVariant $carVariant)
    {
        //delete data
        $data = CarVariant::destroy($carVariant->id);

        return response('success', 200);
    }
}
