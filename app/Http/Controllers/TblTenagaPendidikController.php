<?php

namespace App\Http\Controllers;

use App\Models\tbl_tenaga_pendidik;
use Illuminate\Http\Request;
use Exception;
use Illuminate\Support\Facades\Validator;

class TblTenagaPendidikController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tbl_tenaga_pendidik = tbl_tenaga_pendidik::select('idpendidik', 'tgl_transaksi', 'unit', 'jurusan', 'prodi', 'professor_pns', 'professor_non_pns', 'lektor_kepala_pns', 'lektor_kepala_non_pns',
        'lektor_pns', 'lektor_non_pns', 'asisten_ahli_pns', 'asisten_ahli_non_pns', 'tenaga_pengajar_pns', 'tenaga_pengajar_non_pns', 'terkualifikasi_s3',
        'terkualifikasi_kompetensi_profesi', 'terkualifikasi_praktisi', 'pegawai_pppk', 'nidn' )->get();

        return view('admin.tenaga_pendidik', [
            'tbl_tenaga_pendidik' => $tbl_tenaga_pendidik,
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
            'integer' => 'Kolom :attribute harus berupa angka',
            'date' => 'Kolom :attribute harus berupa tanggal yang valid',
            'string' => 'Kolom :attribute harus berupa teks',
            'max' => 'Kolom :attribute tidak boleh lebih dari :max karakter'
        ];

        $rules = [
            'tgl_transaksi' => 'required|date',
            'unit' => 'required|string|max:100',
            'jurusan' => 'required|string|max:100',
            'prodi' => 'required|string|max:100',
            'professor_pns' => 'required|integer',
            'professor_non_pns' => 'required|integer',
            'lektor_kepala_pns' => 'required|integer',
            'lektor_kepala_non_pns' => 'required|integer',
            'lektor_pns' => 'required|integer',
            'lektor_non_pns' => 'required|integer',
            'asisten_ahli_pns' => 'required|integer',
            'asisten_ahli_non_pns' => 'required|integer',
            'tenaga_pengajar_pns' => 'required|integer',
            'tenaga_pengajar_non_pns' => 'required|integer',
            'terkualifikasi_s3' => 'required|integer',
            'terkualifikasi_kompetensi_profesi' => 'required|integer',
            'terkualifikasi_praktisi' => 'required|integer',
            'pegawai_pppk' => 'required|integer',
            'nidn' => 'required|integer'
        ];

        $validator = Validator::make($r->all(), $rules, $messages);

        if ($validator->fails()) {
            return response()->json([
                'status' => false,
                'message' => implode(', ', $validator->errors()->all())
            ]);
        }

        try {
            $tbl_tenaga_pendidik = tbl_tenaga_pendidik::create([
                'tgl_transaksi' => $r->tgl_transaksi,
                'unit' => $r->unit,
                'jurusan' => $r->jurusan,
                'prodi' => $r->prodi,
                'professor_pns' => $r->professor_pns,
                'professor_non_pns' => $r->professor_non_pns,
                'lektor_kepala_pns' => $r->lektor_kepala_pns,
                'lektor_kepala_non_pns' => $r->lektor_kepala_non_pns,
                'lektor_pns' => $r->lektor_pns,
                'lektor_non_pns' => $r->lektor_non_pns,
                'asisten_ahli_pns' => $r->asisten_ahli_pns,
                'asisten_ahli_non_pns' => $r->asisten_ahli_non_pns,
                'tenaga_pengajar_pns' => $r->tenaga_pengajar_pns,
                'tenaga_pengajar_non_pns' => $r->tenaga_pengajar_non_pns,
                'terkualifikasi_s3' => $r->terkualifikasi_s3,
                'terkualifikasi_kompetensi_profesi' => $r->terkualifikasi_kompetensi_profesi,
                'terkualifikasi_praktisi' => $r->terkualifikasi_praktisi,
                'pegawai_pppk' => $r->pegawai_pppk,
                'nidn' => $r->nidn
            ]);

            if ($tbl_tenaga_pendidik) {
                return response()->json([
                    'status' => true,
                    'tbl_tenaga_pendidik' => $tbl_tenaga_pendidik,
                    'message' => 'Data berhasil ditambahkan.'
                ]);
            }

            return response()->json([
                'status' => false,
                'message' => 'Gagal Menambahkan Data'
            ]);
        } catch (Exception $e) {
            return response()->json([
                'status' => false,
                'message' => 'Terjadi kesalahan: ' . $e->getMessage()
            ]);
        }
    }


    /**
     * Display the specified resource.
     */
    public function show(tbl_tenaga_pendidik $tbl_tenaga_pendidik)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $r)
    {
        try {
            $tbl_tenaga_pendidik = tbl_tenaga_pendidik::where('idpendidik', $r->idpendidik)->first();

            if ($tbl_tenaga_pendidik) {
                return response()->json([
                    'status' => 1,
                    'data' => $tbl_tenaga_pendidik
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

        $tbl_tenaga_pendidik = [
            "tgl_transaksi" => $r->tgl_transaksi,
            "unit" => $r->unit,
            "jurusan" => $r->jurusan,
            "prodi" => $r->prodi,
            "professor_pns" => $r->professor_pns,
            "professor_non_pns" => $r->professor_non_pns,
            "lektor_kepala_pns" => $r->lektor_kepala_pns,
            "lektor_kepala_non_pns" => $r->lektor_kepala_non_pns,
            "lektor_pns" => $r->lektor_pns,
            "lektor_non_pns" => $r->lektor_non_pns,
            "asisten_ahli_pns" => $r->asisten_ahli_pns,
            "asisten_ahli_non_pns" => $r->asisten_ahli_non_pns,
            "tenaga_pengajar_pns" => $r->tenaga_pengajar_pns,
            "tenaga_pengajar_non_pns" => $r->tenaga_pengajar_non_pns,
            "terkualifikasi_s3" => $r->terkualifikasi_s3,
            "terkualifikasi_kompetensi_profesi" => $r->terkualifikasi_kompetensi_profesi,
            "terkualifikasi_praktisi" => $r->terkualifikasi_praktisi,
            "pegawai_pppk" => $r->pegawai_pppk,
            "nidn" => $r->nidn
        ];

        $rules = [
            'tgl_transaksi' => 'required|date',
            'unit' => 'required|string|max:100',
            'jurusan' => 'required|string|max:100',
            'prodi' => 'required|string|max:100',
            'professor_pns' => 'required|integer',
            'professor_non_pns' => 'required|integer',
            'lektor_kepala_pns' => 'required|integer',
            'lektor_kepala_non_pns' => 'required|integer',
            'lektor_pns' => 'required|integer',
            'lektor_non_pns' => 'required|integer',
            'asisten_ahli_pns' => 'required|integer',
            'asisten_ahli_non_pns' => 'required|integer',
            'tenaga_pengajar_pns' => 'required|integer',
            'tenaga_pengajar_non_pns' => 'required|integer',
            'terkualifikasi_s3' => 'required|integer',
            'terkualifikasi_kompetensi_profesi' => 'required|integer',
            'terkualifikasi_praktisi' => 'required|integer',
            'pegawai_pppk' => 'required|integer',
            'nidn' => 'required|integer'
        ];

        $validator = Validator::make($tbl_tenaga_pendidik, $rules, $messages);

        if ($validator->fails()) {
            return response()->json([
                'status' => false,
                'message' => implode(', ', $validator->errors()->all())
            ]);
        }

        try{
            $tbl_tenaga_pendidik = tbl_tenaga_pendidik::where('idpendidik', $r->idpendidik)->first();

            if($tbl_tenaga_pendidik){
                $tbl_tenaga_pendidik->tgl_transaksi = $r->tgl_transaksi;
                $tbl_tenaga_pendidik->unit = $r->unit;
                $tbl_tenaga_pendidik->jurusan = $r->jurusan;
                $tbl_tenaga_pendidik->prodi = $r->prodi;
                $tbl_tenaga_pendidik->professor_pns = $r->professor_pns;
                $tbl_tenaga_pendidik->professor_non_pns = $r->professor_non_pns;
                $tbl_tenaga_pendidik->lektor_kepala_pns = $r->lektor_kepala_pns;
                $tbl_tenaga_pendidik->lektor_kepala_non_pns = $r->lektor_kepala_non_pns;
                $tbl_tenaga_pendidik->lektor_pns = $r->lektor_pns;
                $tbl_tenaga_pendidik->lektor_non_pns = $r->lektor_non_pns;
                $tbl_tenaga_pendidik->asisten_ahli_pns = $r->asisten_ahli_pns;
                $tbl_tenaga_pendidik->asisten_ahli_non_pns = $r->asisten_ahli_non_pns;
                $tbl_tenaga_pendidik->tenaga_pengajar_pns = $r->tenaga_pengajar_pns;
                $tbl_tenaga_pendidik->tenaga_pengajar_non_pns = $r->tenaga_pengajar_non_pns;
                $tbl_tenaga_pendidik->terkualifikasi_s3 = $r->terkualifikasi_s3;
                $tbl_tenaga_pendidik->terkualifikasi_kompetensi_profesi = $r->terkualifikasi_kompetensi_profesi;
                $tbl_tenaga_pendidik->terkualifikasi_praktisi = $r->terkualifikasi_praktisi;
                $tbl_tenaga_pendidik->pegawai_pppk = $r->pegawai_pppk;
                $tbl_tenaga_pendidik->nidn = $r->nidn;
                $tbl_tenaga_pendidik->save();

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
    public function destroy(tbl_tenaga_pendidik $tbl_tenaga_pendidik)
    {
        //
    }


    public function delete(Request $r){
        try{
            $tbl_tenaga_pendidik = tbl_tenaga_pendidik::where('idpendidik', $r->idpendidik)->first();

            if($tbl_tenaga_pendidik){
                $tbl_tenaga_pendidik->delete();
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
