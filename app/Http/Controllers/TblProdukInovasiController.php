<?php

namespace App\Http\Controllers;

use App\Models\tbl_produk_inovasi;
use Illuminate\Http\Request;
use Exception;
use Illuminate\Support\Facades\Validator;

class TblProdukInovasiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(){
        $tbl_produk_inovasi = tbl_produk_inovasi::select('idproduk', 'tgl_transaksi', 'jumlah')->get();

        return view('admin.produk_inovasi', [
            'tbl_produk_inovasi' => $tbl_produk_inovasi,
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

        $tbl_produk_inovasi = [
            "tgl_transaksi" => $r->tgl_transaksi,
            "jumlah" => $r->jumlah
        ];

        $rules = [

            'jumlah' => 'required|integer',
        ];

        $validator = Validator::make($tbl_produk_inovasi, $rules, $messages);

        if ($validator->fails()) {
            return response()->json([
                'status' => false,
                'message' => implode(', ', $validator->errors()->all())
            ]);
        }

        try {
            $tbl_produk_inovasi = tbl_produk_inovasi::create([
                "tgl_transaksi" => $r->tgl_transaksi,
                "jumlah" => $r->jumlah,
            ]);

            if($tbl_produk_inovasi){
                return response()->json([
                    'status' => true,
                    'data' => $tbl_produk_inovasi
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
    public function show(tbl_produk_inovasi $tbl_produk_inovasi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $r)
    {
        try {
            if (!$r->has('idproduk')) {
                return response()->json([
                    'status' => 0,
                    'message' => "ID Produk tidak ditemukan dalam permintaan."
                ]);
            }

            $tbl_produk_inovasi = tbl_produk_inovasi::where('idproduk', $r->idproduk)->first();

            if ($tbl_produk_inovasi) {
                return response()->json([
                    'status' => 1,
                    'data' => $tbl_produk_inovasi
                ]);
            }

            return response()->json([
                'status' => 0,
                'message' => "Data tidak ditemukan."
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

     public function update(Request $r) {
        $messages = [
            'required' => 'Kolom :attribute harus diisikan',
            'integer' => ':attribute harus berupa angka',
            'date' => ':attribute harus berupa tanggal yang valid',
        ];

        $rules = [
            'tgl_transaksi' => 'required|date',
            'jumlah' => 'required|integer',
        ];

        $validator = Validator::make($r->all(), $rules, $messages);

        if ($validator->fails()) {
            return response()->json([
                'status' => false,
                'message' => implode(', ', $validator->errors()->all())
            ]);
        }

        try {
            $tbl_produk_inovasi = tbl_produk_inovasi::where('idproduk', $r->idproduk)->first();

            if ($tbl_produk_inovasi) {
                $tbl_produk_inovasi->tgl_transaksi = $r->tgl_transaksi;
                $tbl_produk_inovasi->jumlah = $r->jumlah;
                $tbl_produk_inovasi->save();

                return response()->json([
                    'status' => 1,
                    'message' => "Data berhasil diperbarui"
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
     * Remove the specified resource from storage.
     */
    public function destroy(tbl_produk_inovasi $tbl_produk_inovasi)
    {
        //
    }

    public function delete(Request $r){
        try{
            $tbl_produk_inovasi = tbl_produk_inovasi::where('idproduk', $r->idproduk)->first();

            if($tbl_produk_inovasi){
                $tbl_produk_inovasi->delete();
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
