<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests\StoreekitaldiakRequest;
use App\Http\Requests\UpdateekitaldiakRequest;
use App\Models\ekitaldiak;

class EkitaldiakController extends Controller
{
     //Enseñar
     public function index()
     {
         $ekitaldiak=ekitaldiak::all();
         return response()->json($ekitaldiak);
     }
 
     //Crear
     public function store(Request $request)
     {
         $file= $request->validate([
             'id'=>'required',
             'izena'=>'required',
             'date'=>'required',
             'azalpena'=>'required',
         ]);
 
         $sorketa= ekitaldiak::create($file);
         return ['Sortu eginda'=> $sorketa];
     }
 
     //Editar
     public function update(Request $request, ekitaldiak $ekitaldiak)
     {
         $file= $request->validate([
             'id'=>'required',
             'izena'=>'required',
             'date'=>'required',
             'azalpena'=>'required',
         ]);
 
         $ekitaldiak->update($file);
         return  $ekitaldiak;
     }
 
     //Borrar
     public function destroy(ekitaldiak $ekitaldiak)
     {
         $ekitaldiak->delete();
         return ["Mensaje"=>"Ezabatu egin da"];
     }
}
