<?php

namespace App\Http\Controllers;

use App\CarGallery;
use Illuminate\Http\Request;

class CarGalleryController extends Controller
{
    
    public function index()
    {
        //get all data
        $data = CarGallery::orderBy('id', 'desc')
            ->get();

        return response()->json($data, 200);
    }

    public function store(Request $request)
    {
        //create new data
        $data = CarGallery::create([
            'type' => $request->type,
            'image' => $request->image,
            'car_id' => $request->car_id,
        ]);

        return response()->json($data, 200);
    }

    public function show(CarGallery $carGallery)
    {
        //get one data
        return response()->json($carGallery);
    }

    public function update(Request $request, CarGallery $carGallery)
    {
        //update data
        $data = CarGallery::where('id', $carGallery->id)->update([
            'type' => $request->type,
            'image' => $request->image,
            'car_id' => $request->car_id,
        ]);
      
        return response()->json('success', 200);
    }

    public function destroy(CarGallery $carGallery)
    {
        //delete data
        $data = CarGallery::destroy($carGallery->id);

        return response('success', 200);
    }
}
