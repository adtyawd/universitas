<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Peserta;

class DashboardController extends Controller
{
    public function index(){
        $data = [
            "count_pesereta" => Peserta::count(),
            "count_registered" => Peserta::where('status_daftar', 1)->count(),
        ];
    
        return view('index', $data);
    }
}
