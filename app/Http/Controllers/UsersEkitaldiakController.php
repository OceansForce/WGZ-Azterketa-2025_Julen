<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests\Storeusers_ekitaldiakRequest;
use App\Http\Requests\Updateusers_ekitaldiakRequest;
use App\Models\users_ekitaldiak;
use App\Models\users;
use App\Models\ekitaldiak;

class UsersEkitaldiakController extends Controller
{
    public function ekitaldiak($id)
    {
        
        $users = users::findOrFail($id);
        return response()->json($users->ekitaldiaks);
    }

    public function partehartzaileak($id)
    {
        
        $users = ekitaldiak::findOrFail($id);
        return response()->json($users->users);
    }

    public function izenaeman($id){

        $user = auth()->user();
        if (!$user) {
            return response()->json(['error' => 'User not authenticated'], 401);
        }


        $user->ekitaldiak()->attach($id);
        

        return response()->json('Ekitaldian gehituta');
    }
}
