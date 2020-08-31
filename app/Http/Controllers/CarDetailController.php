<?php

namespace App\Http\Controllers;

use App\CarDetail;
use Illuminate\Http\Request;

class CarDetailController extends Controller
{
    
    public function index()
    {   
        //get all data
        $data = CarDetail::orderBy('id', 'desc')
            ->get();

        return response()->json($data, 200);
    }

    public function store(Request $request)
    {   
        //create new data
        $data = CarDetail::create([
            'title' => $request->title,
            'desc' => $request->desc,
            'image' => $request->image,
            'video' => $request->video,
            'car_id' => $request->car_id,
        ]);

        return response()->json($data, 200);
    }
    
    public function show(CarDetail $carDetail)
    {
        //get one data
        return response()->json($carDetail);
    }

    public function update(Request $request, CarDetail $carDetail)
    {
        //update data
        $data = CarDetail::where('id', $carDetail->id)->update([
            'title' => $request->title,
            'desc' => $request->desc,
            'image' => $request->image,
            'video' => $request->video,
            'car_id' => $request->car_id,
        ]);
      
        return response()->json('success', 200);
    }

    public function destroy(CarDetail $carDetail)
    {
        //delete data
        $data = CarDetail::destroy($carDetail->id);

        return response('success', 200);
    }
}
