<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreusersRequest;
use App\Http\Requests\UpdateusersRequest;
use App\Models\users;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UsersController extends Controller
{
    public function dentistak()
    {

       $erabiltzailea = users::where('rola', 'dentista')->get();
       //$users= users::all();

       return response()->json($erabiltzailea);
    }


    public function login(Request $request){

        //Datuak balidatzeko
        $request->validate([
            'email'=> 'required|email',
            'password'=>'required',
        ]);

        // Encontrar el correo
        $user = users::where('email', $request->email)->first();

        if(!$user || $user->password !== $request->password){
            return response()->json(['error' => 'Datuak gaixki daude'], 401);
        }

        $token = $user->createToken($request->email)->plainTextToken;

        return response()->json([
            'message' => 'Login egin da',
            'user' => $user,
            'token' => $token,
        ]);
    }
    

    public function logout(Request $request)
    {
        $user= Auth::user();

        if (!$user) {
            // Revocar el token de acceso
            return response()->json('No hay un usuario autenticado', 401);
            
        }

        $user->tokens()->delete();
        return response()->json('Has cerrado sesion correctamente');
       
    }
}
