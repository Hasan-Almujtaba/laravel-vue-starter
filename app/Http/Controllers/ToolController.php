<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateTool;
use App\Http\Requests\StoreTool;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Tool;

class ToolController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    $data = Tool::all();

    return response()->json($data, 200);
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(StoreTool $request)
  {
    $data = Tool::create([
      'title' => $request->title,
      'slug' => Str::slug($request->title, '-'),
      'content' => $request->content,
    ]);

    return response()->json($data, 200);
  }

  /**
   * Display the specified resource.
   *
   * @param  \App\Tool  $tool
   * @return \Illuminate\Http\Response
   */
  public function show(Tool $tool)
  {
    return response()->json($tool);
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \App\Tool  $tool
   * @return \Illuminate\Http\Response
   */
  public function update(UpdateTool $request, Tool $tool)
  {
    $data = Tool::where('id', $tool->id)->update([
      'title' => $request->title,
      'slug' => Str::slug($request->title, '-'),
      'content' => $request->content,
    ]);

    return response()->json($data, 200);
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  \App\Tool  $tool
   * @return \Illuminate\Http\Response
   */
  public function destroy(Tool $tool)
  {
    $data = Tool::destroy($tool->id);

    return response(null, 200);
  }
}
