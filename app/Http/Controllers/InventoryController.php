<?php

namespace App\Http\Controllers;

use App\Inventory;
use Illuminate\Http\Request;

class InventoryController extends Controller
{
    
    public function index()
    {
        //get all data
        $data = Inventory::orderBy('id', 'desc')
            ->get();

        return response()->json($data, 200);
    }

    public function store(Request $request)
    {
        //create new data
        $data = Inventory::create([
            'name' => $request->name,
            'speed' => $request->speed,
            'mode' => $request->mode,
            'place' => $request->place,
            'dealer' => $request->dealer,
            'year' => $request->year,
            'price' => $request->price,
            'fuel' => $request->fuel,
            'license_plate' => $request->license_plate,
            'exterior' => $request->exterior,
            'interior' => $request->interior,
        ]);

        return response()->json($data, 200);
    }

    public function show(Inventory $inventory)
    {
        //get one data
        return response()->json($inventory);
    }


    public function update(Request $request, Inventory $inventory)
    {
        //update data
        $data = Inventory::where('id', $inventory->id)->update([
            'name' => $request->name,
            'speed' => $request->speed,
            'mode' => $request->mode,
            'place' => $request->place,
            'dealer' => $request->dealer,
            'year' => $request->year,
            'price' => $request->price,
            'fuel' => $request->fuel,
            'license_plate' => $request->license_plate,
            'exterior' => $request->exterior,
            'interior' => $request->interior,
        ]);
      
        return response()->json('success', 200);
    }

    public function destroy(Inventory $inventory)
    {
        //delete data
        $data = Inventory::destroy($inventory->id);

        return response('success', 200);
    }
}
