<?php

namespace App\Http\Controllers\API;

use App\Task;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\MobilResource;
use Illuminate\Support\Facades\Storage;

class TaskController extends Controller
{
    //


    public function postLogin(Request $request){
        $request->validate([
            "email" => "required",
            "password" => "required"
        ]);

        $pelanggan = \App\pelanggan::where("email",$request->email)
                        ->selectRaw("id,password")
                        ->first();

        if($pelanggan){
            if($request->password==$pelanggan->password){
                return response()->json([
                    "status" => true,
                    "idpelanggan" => $pelanggan->id
                ]);
            }
           
        }

        return response()->json([
            "status" => false
        ]);
    }

    public function getlistmobil(){
        $data = \App\Mobil::all();

        return response()->json(MobilResource::collection($data));
    }

    public function getlistpesan(){
        $data = \App\Mobil::where("unit",">",0)
                        ->get();

        return response()->json(MobilResource::collection($data));
    }

    public function getdetailmobil($idmobil){
        $mobil = \App\Mobil::find($idmobil);

        return response()->json(new MobilResource($mobil));
    }

}
