<?php

namespace App\Http\Controllers;

use App\Models\tbl_jlh_mahasiswa_berprestasi;
use Illuminate\Http\Request;
use Exception;
use Illuminate\Support\Facades\Validator;

class TblJlhMahasiswaBerprestasiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tbl_jlh_mahasiswa_berprestasi = tbl_jlh_mahasiswa_berprestasi::select('idprestasi', 'tgl_transaksi', 'fakultas', 'jurusan', 'prodi', 'kategori', 'bidang', 'jenis', 'jumlah')->get();

        return view('admin.jml_mhsw_berprestasi', [
            'tbl_jlh_mahasiswa_berprestasi' => $tbl_jlh_mahasiswa_berprestasi,
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
    // Pesan error untuk validasi
    $messages = [
        'required' => 'Kolom :attribute harus diisikan',
        'unique' => ':attribute sudah terdaftar',
        'string' => ':attribute harus berupa teks',
        'size' => ':attribute harus berukuran :size karakter',
        'between' => ':attribute harus di antara :min dan :max karakter',
        'not_in' => ':attribute Harus Dipilih',
        'email' => ':attribute Format Email Salah'
    ];

    // Data yang akan divalidasi
    $tbl_jml_mahasiswa_berprestasi = [
        "tgl_transaksi" => $r->tgl_transaksi,
        "fakultas" => $r->fakultas,
        "jurusan" => $r->jurusan,
        "prodi" => $r->prodi,
        "kategori" => $r->kategori,
        "bidang" => $r->bidang,
        "jenis" => $r->jenis,
        "jumlah" => $r->jumlah
    ];

    // Aturan validasi
    $rules = [
        'tgl_transaksi' => 'required|string|max:255',
        'fakultas' => 'required|string|max:255',
        'jurusan' => 'required|string|max:255',
        'prodi' => 'required|string|max:255',
        'kategori' => 'required|string|max:255',
        'bidang' => 'required|string|max:255',
        'jenis' => 'required|string|max:255',
        'jumlah' => 'required|integer|max:255',
    ];

    // Validasi input
    $validator = Validator::make($tbl_jml_mahasiswa_berprestasi, $rules, $messages);

    if ($validator->fails()) {
        return response()->json([
            'status' => false,
            'message' => implode(', ', $validator->errors()->all())
        ]);
    }

    try {
        // Menyimpan data ke dalam database
        $tbl_jml_mahasiswa_berprestasi = tbl_jlh_mahasiswa_berprestasi::create([
            "tgl_transaksi" => $r->tgl_transaksi,
            "fakultas" => $r->fakultas,
            "jurusan" => $r->jurusan,
            "prodi" => $r->prodi,
            "kategori" => $r->kategori,
            "bidang" => $r->bidang,
            "jenis" => $r->jenis,
            "jumlah" => $r->jumlah,
        ]);

        // Cek apakah data berhasil disimpan
        if ($tbl_jml_mahasiswa_berprestasi) {
            return response()->json([
                'status' => true,
                'data' => $tbl_jml_mahasiswa_berprestasi
            ]);
        }

        return response()->json([
            'status' => false,
            'message' => 'Gagal Menambahkan Data',
        ]);
    } catch (Exception $e) {
        return response()->json([
            'status' => false,
            'message' => 'An error occurred: ' . $e->getMessage(),
        ]);
    }
}

    /**
     * Display the specified resource.
     */
    public function show(tbl_jlh_mahasiswa_berprestasi $tbl_jlh_mahasiswa_berprestasi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $r)
    {

        try {
            $tbl_jlh_mahasiswa_berprestasi = tbl_jlh_mahasiswa_berprestasi::where('idprestasi', $r->idprestasi)->first();

            if ($tbl_jlh_mahasiswa_berprestasi) {
                return response()->json([
                    'status' => 1,
                    'data' => $tbl_jlh_mahasiswa_berprestasi
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

        $tbl_jlh_mahasiswa_berprestasi = [
            "tgl_transaksi" => $r->tgl_transaksi,
            "fakultas" => $r->fakultas,
            "jurusan" => $r->jurusan,
            "prodi" => $r->prodi,
            "kategori" => $r->kategori,
            "bidang" => $r->bidang,
            "jenis" => $r->jenis,
            "jumlah" => $r->jumlah
        ];

        $rules = [
            'tgl_transaksi' => 'required|string|max:255',
            'fakultas' => 'required|string|max:255',
            'jurusan' => 'required|string|max:255',
            'prodi' => 'required|string|max:255',
            'kategori' => 'required|string|max:255',
            'bidang' => 'required|string|max:255',
            'jenis' => 'required|string|max:255',
            'jumlah' => 'required|integer|max:255',
        ];

        $validator = Validator::make($tbl_jlh_mahasiswa_berprestasi, $rules, $messages);

        if ($validator->fails()) {
            return response()->json([
                'status' => false,
                'message' => implode(', ', $validator->errors()->all())
            ]);
        }

        try{
            $tbl_jlh_mahasiswa_berprestasi = tbl_jlh_mahasiswa_berprestasi::where('idprestasi', $r->idprestasi)->first();

            if($tbl_jlh_mahasiswa_berprestasi){
                $tbl_jlh_mahasiswa_berprestasi->tgl_transaksi = $r->tgl_transaksi;
                $tbl_jlh_mahasiswa_berprestasi->fakultas = $r->fakultas;
                $tbl_jlh_mahasiswa_berprestasi->jurusan = $r->jurusan;
                $tbl_jlh_mahasiswa_berprestasi->prodi = $r->prodi;
                $tbl_jlh_mahasiswa_berprestasi->kategori = $r->kategori;
                $tbl_jlh_mahasiswa_berprestasi->bidang = $r->bidang;
                $tbl_jlh_mahasiswa_berprestasi->jenis = $r->jenis;
                $tbl_jlh_mahasiswa_berprestasi->jumlah = $r->jumlah;
                $tbl_jlh_mahasiswa_berprestasi->save();

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
    public function destroy(tbl_jlh_mahasiswa_berprestasi $tbl_jlh_mahasiswa_berprestasi)
    {
        //
    }

    public function delete(Request $r){
        try{
            $tbl_jml_mahasiswa_berprestasi = tbl_jlh_mahasiswa_berprestasi::where('idprestasi', $r->idprestasi)->first();

            if($tbl_jml_mahasiswa_berprestasi){
                $tbl_jml_mahasiswa_berprestasi->delete();
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
