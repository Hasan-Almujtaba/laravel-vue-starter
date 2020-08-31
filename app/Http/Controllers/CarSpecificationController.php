<?php

namespace App\Http\Controllers;

use App\CarSpecification;
use Illuminate\Http\Request;

class CarSpecificationController extends Controller
{
    public function index()
    {
        //get all data
       $data = CarSpecification::orderBy('id', 'desc')
            ->get();

        return response()->json($data, 200);
    }

    public function store(Request $request)
    {
        //create new data
        $data = CarSpecification::create([
            'desc' => $request->desc,
            'engine' => $request->engine,
            'rate_output' => $request->rate_output,
            'rate_tongue' => $request->rate_tongue,
            'car_id' => $request->car_id,
        ]);

        return response()->json($data, 200);
    }

    public function show(CarSpecification $carSpecification)
    {
        //get one data
        return response()->json($carSpecification);
    }

    public function update(Request $request, CarSpecification $carSpecification)
    {
        //update data
        $data = CarSpecification::where('id', $carSpecification->id)->update([
            'desc' => $request->desc,
            'engine' => $request->engine,
            'rate_output' => $request->rate_output,
            'rate_tongue' => $request->rate_tongue,
            'car_id' => $request->car_id,
        ]);
      
        return response()->json('success', 200);
    }

    public function destroy(CarSpecification $carSpecification)
    {
        //delete data
        $data = CarSpecification::destroy($carSpecification->id);

        return response('success', 200);
    }
}
