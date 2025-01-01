<?php

namespace App\Http\Controllers;

use App\Models\tbl_publikasi_penelitian;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class TblPublikasiPenelitianController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tbl_publikasi_penelitian = tbl_publikasi_penelitian::select(
'idpenelitian',
        'tgl_transaksi',
        'unit',
        'nasional',
        'internasional',
        'internasional_index',
        'prosiding',
        'seminar',
        'kategori')->get();

        return view('admin.publikasi_penelitian', [
            'tbl_publikasi_penelitian' => $tbl_publikasi_penelitian,
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

        // tbl_penelitian yang akan divalidasi
        $tbl_penelitian = [
            "tgl_transaksi" => $r->tgl_transaksi,
            "unit" => $r->unit,
            "nasional" => $r->nasional,
            "internasional" => $r->internasional,
            "internasional_index" => $r->internasional_index,
            "prosiding" => $r->prosiding,
            "seminar" => $r->seminar,
            "kategori" => $r->kategori
        ];

        // Aturan Validasi
        $rules = [
            'tgl_transaksi' => 'required|date',
            'unit' => 'required|string|max:100',
            'nasional' => 'required|integer',
            'internasional' => 'required|integer',
            'internasional_index' => 'required|integer',
            'prosiding' => 'required|integer',
            'seminar' => 'required|integer',
            'kategori' => 'required|string|max:255'
        ];

        $validator = Validator::make($tbl_penelitian, $rules, $messages);

        if ($validator->fails()) {
            return response()->json([
                'status' => false,
                'message' => implode(', ', $validator->errors()->all())
            ]);
        }

        try {
            // Simpan tbl_penelitian ke tabel publikasi penelitian
            $tbl_penelitian = tbl_publikasi_penelitian::create([
                "tgl_transaksi" => $r->tgl_transaksi,
                "unit" => $r->unit,
                "nasional" => $r->nasional,
                "internasional" => $r->internasional,
                "internasional_index" => $r->internasional_index,
                "prosiding" => $r->prosiding,
                "seminar" => $r->seminar,
                "kategori" => $r->kategori
            ]);

            if ($tbl_penelitian) {
                return response()->json([
                    'status' => true,
                    'tbl_penelitian' => $tbl_penelitian
                ]);
            }

            return response()->json([
                'status' => false,
                'message' => 'Gagal Menambahkan tbl_penelitian',
            ]);
        } catch (Exception $e) {
            return response()->json([
                'status' => false,
                'message' => 'Terjadi kesalahan: ' . $e->getMessage(),
            ]);
        }
    }


    /**
     * Display the specified resource.
     */
    public function show(tbl_publikasi_penelitian $tbl_publikasi_penelitian)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $r)
    {
        try {
            $tbl_publikasi_penelitian = tbl_publikasi_penelitian::where('idpenelitian', $r->idpenelitian)->first();

            if ($tbl_publikasi_penelitian) {
                return response()->json([
                    'status' => 1,
                    'data' => $tbl_publikasi_penelitian // Ganti kunci 'tbl_publikasi_penelitian' menjadi 'data' untuk konsistensi
                ]);
            }

            return response()->json([
                'status' => 0,
                'message' => "Data Tidak Ditemukan"
            ]);
        } catch (Exception $e) {
            return response()->json([
                'status' => 0,
                'message' => "Error: " . $e->getMessage()
            ]);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $r)
    {
        $messages = [
            'required' => 'Kolom :attribute harus diisikan',
            'unique' => ':attribute sudah terdaftar',
            'string' => ':attribute harus berupa teks',
            'integer' => ':attribute harus berupa angka',
            'date' => ':attribute harus berupa tanggal yang valid'
        ];

        // Data yang akan divalidasi
        $tbl_publikasi_penelitian = [
            "tgl_transaksi" => $r->tgl_transaksi,
            "unit" => $r->unit,
            "nasional" => $r->nasional,
            "internasional" => $r->internasional,
            "internasional_index" => $r->internasional_index,
            "prosiding" => $r->prosiding,
            "seminar" => $r->seminar,
            "kategori" => $r->kategori
        ];

        // Aturan Validasi
        $rules = [
            'tgl_transaksi' => 'required|date',
            'unit' => 'required|string|max:100',
            'nasional' => 'required|integer',
            'internasional' => 'required|integer',
            'internasional_index' => 'required|integer',
            'prosiding' => 'required|integer',
            'seminar' => 'required|integer',
            'kategori' => 'required|string|max:255'
        ];

        $validator = Validator::make($tbl_publikasi_penelitian, $rules, $messages);

        if ($validator->fails()) {
            return response()->json([
                'status' => false,
                'message' => implode(', ', $validator->errors()->all())
            ]);
        }

        try {
            $tbl_publikasi_penelitian = tbl_publikasi_penelitian::where('idpenelitian', $r->idpenelitian)->first();

            if ($tbl_publikasi_penelitian) {
                $tbl_publikasi_penelitian->tgl_transaksi = $r->tgl_transaksi;
                $tbl_publikasi_penelitian->unit = $r->unit;
                $tbl_publikasi_penelitian->nasional = $r->nasional;
                $tbl_publikasi_penelitian->internasional = $r->internasional;
                $tbl_publikasi_penelitian->internasional_index = $r->internasional_index;
                $tbl_publikasi_penelitian->prosiding = $r->prosiding;
                $tbl_publikasi_penelitian->seminar = $r->seminar;
                $tbl_publikasi_penelitian->kategori = $r->kategori;

                $tbl_publikasi_penelitian->save();

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
                'message' => "Error: " . $e->getMessage()
            ]);
        }
    }



    /**
     * Remove the specified resource from storage.
     */
    public function destroy(tbl_publikasi_penelitian $tbl_publikasi_penelitian)
    {
        //
    }

    public function delete(Request $r){
        try{
            $tbl_publikasi_penelitian = tbl_publikasi_penelitian::where('idpenelitian', $r->idpenelitian)->first();

            if($tbl_publikasi_penelitian){
                $tbl_publikasi_penelitian->delete();
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
