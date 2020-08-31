<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreReference;
use App\Http\Requests\UpdateReference;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Reference;

class ReferenceController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    $data = Reference::all();

    return response()->json($data, 200);
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(StoreReference $request)
  {
    $data = Reference::create([
      'title' => $request->title,
      'slug' => Str::slug($request->title, '-'),
      'content' => $request->content,
    ]);

    return response()->json($data, 200);
  }

  /**
   * Display the specified resource.
   *
   * @param  \App\Reference  $reference
   * @return \Illuminate\Http\Response
   */
  public function show(Reference $reference)
  {
    return response()->json($reference);
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \App\Reference  $reference
   * @return \Illuminate\Http\Response
   */
  public function update(UpdateReference $request, Reference $reference)
  {
    $data = Reference::where('id', $reference->id)->update([
      'title' => $request->title,
      'slug' => Str::slug($request->title, '-'),
      'content' => $request->content,
    ]);

    return response()->json($data, 200);
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  \App\Reference  $reference
   * @return \Illuminate\Http\Response
   */
  public function destroy(Reference $reference)
  {
    $data = Reference::destroy($reference->id);

    return response(null, 200);
  }
}
