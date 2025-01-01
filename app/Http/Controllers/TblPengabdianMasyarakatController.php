<?php

namespace App\Http\Controllers;

use App\Models\tbl_pengabdian_masyarakat;
use Illuminate\Http\Request;
use Exception;
use Illuminate\Support\Facades\Validator;

class TblPengabdianMasyarakatController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(){
        $tbl_pengabdian_masyarakat = tbl_pengabdian_masyarakat::select('idpengabdian', 'tgl_transaksi', 'jumlah')->get();

        return view('admin.pengabdian_masyarakat', [
            'tbl_pengabdian_masyarakat' => $tbl_pengabdian_masyarakat,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $r)
    {
        $messages = [
            'required' => 'Kolom :attribute harus diisikan',
            'unique' => ':attribute sudah terdaftar',
            'string' => ':attribute harus berupa teks',
            'size' => ':attribute harus berukuran :size karakter',
            'between' => ':attribute harus di antara :min dan :max karakter',
            'not_in' => ':attribute Harus Dipilih',
            'email' => ':attribute Format Email Salah'
        ];

        $tbl_pengabdian_masyarakat = [
            "tgl_transaksi" => $r->tgl_transaksi,
            "jumlah" => $r->jumlah
        ];

        $rules = [
            'tgl_transaksi' => 'required|string|max:255',
            'jumlah' => 'required|integer|max:255',
        ];

        $validator = Validator::make($tbl_pengabdian_masyarakat, $rules, $messages);

        if ($validator->fails()) {
            return response()->json([
                'status' => false,
                'message' => implode(', ', $validator->errors()->all())
            ]);
        }

        try {
            $tbl_pengabdian_masyarakat = tbl_pengabdian_masyarakat::create([
                "tgl_transaksi" => $r->tgl_transaksi,
                "jumlah" => $r->jumlah,
            ]);

            if($tbl_pengabdian_masyarakat){
                return response()->json([
                    'status' => true,
                    'data' => $tbl_pengabdian_masyarakat
                ]);
            }

            return response()->json([
                'status' => false,
                'message' => 'Gagal Menambahkan Data',
            ]);
        } catch(Exception $e){
            return response()->json([
                'status' => false,
                'message' => 'an error occured : ' . $e->getMessage(),
            ]);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(tbl_pengabdian_masyarakat $tbl_pengabdian_masyarakat)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $r)
    {

        try {
            $tbl_pengabdian_masyarakat = tbl_pengabdian_masyarakat::where('idpengabdian', $r->idpengabdian)->first();

            if ($tbl_pengabdian_masyarakat) {
                return response()->json([
                    'status' => 1,
                    'data' => $tbl_pengabdian_masyarakat
                ]);
            }

            return response()->json([
                'status' => 0,
                'message' => "Data tidak ditemukan"
            ]);
        } catch (Exception $e) {
            return response()->json([
                'status' => 0,
                'message' => $e->getMessage()
            ]);
        }
    }


    /**
     * Update the specified resource in storage.
     */

     public function update(Request $r){
        $messages = [
            'required' => 'Kolom :attribute harus diisikan',
            'unique' => ':attribute sudah terdaftar',
            'string' => ':attribute harus berupa teks',
            'size' => ':attribute harus berukuran :size karakter',
            'between' => ':attribute harus di antara :min dan :max karakter',
            'not_in' => ':attribute Harus Dipilih',
            'email' => ':attribute Format Email Salah'
        ];

        $tbl_pengabdian_masyarakat = [
            "tgl_transaksi" => $r->tgl_transaksi,
            "jumlah" => $r->jumlah
        ];

        $rules = [
            'tgl_transaksi' => 'required|string|max:255',
            'jumlah' => 'required|integer|max:255',
        ];

        $validator = Validator::make($tbl_pengabdian_masyarakat, $rules, $messages);

        if ($validator->fails()) {
            return response()->json([
                'status' => false,
                'message' => implode(', ', $validator->errors()->all())
            ]);
        }

        try{
            $tbl_pengabdian_masyarakat = tbl_pengabdian_masyarakat::where('idpengabdian', $r->idpengabdian)->first();

            if($tbl_pengabdian_masyarakat){
                $tbl_pengabdian_masyarakat->tgl_transaksi = $r->tgl_transaksi;
                $tbl_pengabdian_masyarakat->jumlah = $r->jumlah;
                $tbl_pengabdian_masyarakat->save();

                return response()->json([
                    'status' => 1
                ]);
            }

            return response()->json([
                'status' => 0,
                'message' => "Data tidak ditemukan"
            ]);
        }catch(Exception $e){
            return response()->json([
                'status' => 0,
                'message' => $e->getMessage()
            ]);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(tbl_pengabdian_masyarakat $tbl_pengabdian_masyarakat)
    {
        //
    }

    public function delete(Request $r){
        try{
            $tbl_pengabdian_masyarakat = tbl_pengabdian_masyarakat::where('idpengabdian', $r->idpengabdian)->first();

            if($tbl_pengabdian_masyarakat){
                $tbl_pengabdian_masyarakat->delete();
                return response()->json([
                    'status' => 1,
                ]);
            }

            return response()->json([
                'status' => 0,
                'message' => "Data tidak ditemukan"
            ]);
        }catch(Exception $e){
            return response()->json([
                'status' => 0,
                'message' => $e->getMessage()
            ]);
        }
    }

}
