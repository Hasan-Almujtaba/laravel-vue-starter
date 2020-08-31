<?php

namespace App\Http\Controllers;

use App\Banner;
use Illuminate\Http\Request;

class BannerController extends Controller
{
    
    public function index()
    {
        $data = Banner::orderBy('id', 'desc')
            ->get();

        return response()->json($data, 200);
    }

    public function store(Request $request)
    {

        $data = Banner::create([
            'image' => $request->image,
            'car_id' => $request->car_id,
        ]);

        return response()->json($data, 200);
    }

    public function show(Banner $banner)
    {
        return response()->json($banner);
    }

    public function update(Request $request, Banner $banner)
    {
        
        $data = Banner::where('id', $banner->id)->update([
            'image' => $request->image,
            'car_id' => $request->car_id,
        ]);
      
        return response()->json('success', 200);
    }

    public function destroy(Banner $banner)
    {
        $data = Banner::destroy($banner->id);

        return response('success', 200);
    }
}
