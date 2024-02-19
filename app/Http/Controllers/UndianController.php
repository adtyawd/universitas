<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\NomorUndian;
use Illuminate\Http\Request;

class UndianController extends Controller
{
    public function index(){
        return view('undian.main');
    }

    public function generateNumber(){
        $data = NomorUndian::all()->pluck('no_undian');
        $ctr = $data->random();

        try{
            $dataToDelete = NomorUndian::where('no_undian', $ctr)->first();

            if($dataToDelete){
                $dataToDelete->delete();

                return response()->json([
                    'status' => true,
                    'data' => $data->random(),
                ]);
            }

            return response()->json([
                'status' => false,
                'data' => "Data Gagal Dimuat",
            ]);
        }catch(Exception $e){
            return response()->json([
                'status' => false,
                'message' => $e->getMessage()
            ]);
        }
    }
}
