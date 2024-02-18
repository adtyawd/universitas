<?php

namespace App\Http\Controllers;

use App\Models\Peserta;
use Exception;

class MonitorController extends Controller
{
    public function index(){
        return view('monitor.main');
    }

    public function getUser(){
        try{
            $user = Peserta::where('tampil', 0)->first();

            if($user){
                $user->tampil = 1;
                $user->save();
                return response()->json([
                    'status' => 1,
                    'data' => $user->nama
                ]);
            }else{
                return response()->json([
                    'status' => 2,
                    'message' => "Tidak ada data"
                ]);
            }
        }catch(Exception $e){
            return response()->json([
                'status' => 0,
                'message' => $e->getMessage()
            ]);
        }
    }
}
