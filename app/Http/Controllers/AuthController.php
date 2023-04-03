<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use \stdClass;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function register(Request $request){
        $validator = Validator::make($request->all(),[
            'name' => 'required',
            'last_name' => 'required',
            'password'=> 'required|string|min:8'
        ]);

        if($validator->fails()){
            return response()->json($validator->errors());
        }

        $user = User::create([
            'name'=> $request->name,
            'last_name' => $request->last_name,
            'password' => Hash::make($request->password)
        ]);

        $token = $user->createToken('auth_token')->plainTextToken;

        return response()->json([
                        'data'=> $user,
                        'access_token' => $token,
                        'token_type' => 'Bearer'
        ]);
    }

    public function login(Request $request){
        if(!Auth::attempt($request->only('name','password'))){
            return response()->json(['message' =>'desautorizado'],401);
        }
        $user = User::where('name', $request['name'])->firstOrFail();
        $token = $user->createToken('auth_token')->plainTextToken;

        return response()->json([
            'message'=> 'hola'.$user->name,
            'accessToken'=>$token,
            'token_type' => 'Bearer',
            'user'=>$user
        ]);
        }

    public function logout (Request $request){
        //ver como borrar los tokens para el logout
        //auth()->user()->tokens()->delete();           //auth() es el usuario autenticado
        return [
            'message'=> 'Te has deslogueado correctamente'
        ];
    }

}
