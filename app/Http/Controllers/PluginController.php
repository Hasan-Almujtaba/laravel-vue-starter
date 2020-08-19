<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdatePlugin;
use App\Http\Requests\StorePlugin;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Plugin;

class PluginController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    $data = Plugin::all();

    return response()->json($data, 200);
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(StorePlugin $request)
  {
    $data = Plugin::create([
      'title' => $request->title,
      'slug' => Str::slug($request->title, '-'),
      'content' => $request->content,
    ]);

    return response()->json($data, 200);
  }

  /**
   * Display the specified resource.
   *
   * @param  \App\Plugin  $plugin
   * @return \Illuminate\Http\Response
   */
  public function show(Plugin $plugin)
  {
    return response()->json($plugin);
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \App\Plugin  $plugin
   * @return \Illuminate\Http\Response
   */
  public function update(UpdatePlugin $request, Plugin $plugin)
  {
    $data = Plugin::where('id', $plugin->id)->update([
      'title' => $request->title,
      'slug' => Str::slug($request->title, '-'),
      'content' => $request->content,
    ]);

    return response()->json($data, 200);
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  \App\Plugin  $plugin
   * @return \Illuminate\Http\Response
   */
  public function destroy(Plugin $plugin)
  {
    $data = Plugin::destroy($plugin->id);

    return response(null, 200);
  }
}
