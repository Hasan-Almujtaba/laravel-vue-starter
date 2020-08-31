<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreStyle;
use App\Http\Requests\UpdateStyle;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Style;

class StyleController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    $data = Style::all();

    return response()->json($data, 200);
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(StoreStyle $request)
  {
    $data = Style::create([
      'title' => $request->title,
      'slug' => Str::slug($request->title, '-'),
      'content' => $request->content,
    ]);

    return response()->json($data, 200);
  }

  /**
   * Display the specified resource.
   *
   * @param  \App\Style  $style
   * @return \Illuminate\Http\Response
   */
  public function show(Style $style)
  {
    return response()->json($style);
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \App\Style  $style
   * @return \Illuminate\Http\Response
   */
  public function update(UpdateStyle $request, Style $style)
  {
    $data = Style::where('id', $style->id)->update([
      'title' => $request->title,
      'slug' => Str::slug($request->title, '-'),
      'content' => $request->content,
    ]);

    return response()->json($data, 200);
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  \App\Style  $style
   * @return \Illuminate\Http\Response
   */
  public function destroy(Style $style)
  {
    $data = Style::destroy($style->id);

    return response(null, 200);
  }
}
