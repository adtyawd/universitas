<?php

namespace App\Http\Controllers;

use App\Models\tbl_jlh_mahasiswa;
use Illuminate\Http\Request;
use Exception;
use Illuminate\Support\Facades\Validator;


class TblJlhMahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(){
        $tbl_jlh_mahasiswa = tbl_jlh_mahasiswa::select('idmhs', 'tgl_transaksi', 'fakultas', 'jurusan', 'prodi', 'kategori', 'jumlah')->get();

        return view('admin.jml_mhsw', [
            'tbl_jlh_mahasiswa' => $tbl_jlh_mahasiswa,
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

        $data = [
            "tgl_transaksi" => $r->tgl_transaksi,
            "fakultas" => $r->fakultas,
            "jurusan" => $r->jurusan,
            "prodi" => $r->prodi,
            "kategori" => $r->kategori,
            "jumlah" => $r->jumlah
        ];

        $rules = [
            'tgl_transaksi' => 'required|string|max:255',
            'fakultas' => 'required|string|max:255',
            'jurusan' => 'required|string|max:255',
            'prodi' => 'required|string|max:255',
            'kategori' => 'required|string|max:255',
            'jumlah' => 'required|integer|max:255',
        ];

        $validator = Validator::make($data, $rules, $messages);

        if ($validator->fails()) {
            return response()->json([
                'status' => false,
                'message' => implode(', ', $validator->errors()->all())
            ]);
        }

        try {
            $data = tbl_jlh_mahasiswa::create([
                "name" => $r->nama,
                "tgl_transaksi" => $r->tgl_transaksi,
                "fakultas" => $r->fakultas,
                "jurusan" => $r->jurusan,
                "prodi" => $r->prodi,
                "kategori" => $r->kategori,
                "jumlah" => $r->jumlah,
            ]);

            if($data){
                return response()->json([
                    'status' => true,
                    'data' => $data
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
    public function show(tbl_jlh_mahasiswa $tbl_jlh_mahasiswa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $r)
    {

        try {
            $tbl_jlh_mahasiswa = tbl_jlh_mahasiswa::where('idmhs', $r->idmhs)->first();

            if ($tbl_jlh_mahasiswa) {
                return response()->json([
                    'status' => 1,
                    'data' => $tbl_jlh_mahasiswa
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

        $data = [
            "tgl_transaksi" => $r->tgl_transaksi,
            "fakultas" => $r->fakultas,
            "jurusan" => $r->jurusan,
            "prodi" => $r->prodi,
            "kategori" => $r->kategori,
            "jumlah" => $r->jumlah
        ];

        $rules = [
            'tgl_transaksi' => 'required|string|max:255',
            'fakultas' => 'required|string|max:255',
            'jurusan' => 'required|string|max:255',
            'prodi' => 'required|string|max:255',
            'kategori' => 'required|string|max:255',
            'jumlah' => 'required|integer|max:255',
        ];

        $validator = Validator::make($data, $rules, $messages);

        if ($validator->fails()) {
            return response()->json([
                'status' => false,
                'message' => implode(', ', $validator->errors()->all())
            ]);
        }

        try{
            $data = tbl_jlh_mahasiswa::where('idmhs', $r->idmhs)->first();

            if($data){
                $data->tgl_transaksi = $r->tgl_transaksi;
                $data->fakultas = $r->fakultas;
                $data->jurusan = $r->jurusan;
                $data->prodi = $r->prodi;
                $data->kategori = $r->kategori;
                $data->jumlah = $r->jumlah;
                $data->save();

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
    public function destroy(tbl_jlh_mahasiswa $tbl_jlh_mahasiswa)
    {
        //
    }

    public function delete(Request $r){
        try{
            $tbl_jml_mahasiswa = tbl_jlh_mahasiswa::where('idmhs', $r->idmhs)->first();

            if($tbl_jml_mahasiswa){
                $tbl_jml_mahasiswa->delete();
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
