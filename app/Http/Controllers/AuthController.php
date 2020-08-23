<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Http\Requests\Register;
use App\Http\Requests\Login;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{

  public function register(Register $request)
  {
    $data =  User::create([
      'name' => $request->name,
      'email' => $request->email,
      'password' => Hash::make($request->password),
    ]);

    return response()->json($data);
  }

  public function login(Login $request)
  {
    $authentication = Auth::attempt(['email' => $request->email, 'password' => $request->password]);

    if (!$authentication) {
      return response()->json(['message' => 'Unauthorized'], 401);
    }

    $user = $request->user();
    $tokenResult = $user->createToken('Personal Access Token');
    $token = $tokenResult->token;

    return response()->json($tokenResult);
  }

  public function user(Request $request)
  {
    return response()->json($request->user());
  }

  public function logout(Request $request)
  {
    $request->user()->token()->revoke();

    return response()->json(['message' => 'Successfully logged out']);
  }
}
