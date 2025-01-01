<?php

namespace App\Http\Controllers;

use App\Models\tbl_alumni;
use Illuminate\Http\Request;
use Exception;
use Illuminate\Support\Facades\Validator;

class TblAlumniController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(){
        $tbl_alumni = tbl_alumni::select('idalumni', 'tgl_transaksi', 'fakultas', 'jurusan', 'prodi', 'bekerja', 'belum_bekerja', 'lanjut_kuliah', 'wiraswasta')->get();

        return view('admin.alumni', [
            'tbl_alumni' => $tbl_alumni,
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

        $tbl_alumni = [
            "tgl_transaksi" => $r->tgl_transaksi,
            "fakultas" => $r->fakultas,
            "jurusan" => $r->jurusan,
            "prodi" => $r->prodi,
            "bekerja" => $r->bekerja,
            "belum_bekerja" => $r->belum_bekerja,
            "lanjut_kuliah" => $r->lanjut_kuliah,
            "wiraswasta" => $r->wiraswasta,
        ];

        $rules = [
            'tgl_transaksi' => 'required|string|max:255',
            'fakultas' => 'required|string|max:255',
            'jurusan' => 'required|string|max:255',
            'prodi' => 'required|string|max:255',
            'bekerja' => 'required|string|max:255',
            'belum_bekerja' => 'required|string|max:255',
            'lanjut_kuliah' => 'required|string|max:255',
            'wiraswasta' => 'required|string|max:255',
        ];

        $validator = Validator::make($tbl_alumni, $rules, $messages);

        if ($validator->fails()) {
            return response()->json([
                'status' => false,
                'message' => implode(', ', $validator->errors()->all())
            ]);
        }

        try {
            $tbl_alumni = tbl_alumni::create([
                "name" => $r->nama,
                "tgl_transaksi" => $r->tgl_transaksi,
                "fakultas" => $r->fakultas,
                "jurusan" => $r->jurusan,
                "prodi" => $r->prodi,
                "bekerja" => $r->bekerja,
                "belum_bekerja" => $r->belum_bekerja,
                "lanjut_kuliah" => $r->lanjut_kuliah,
                "wiraswasta" => $r->wiraswasta,
            ]);

            if($tbl_alumni){
                return response()->json([
                    'status' => true,
                    'data' => $tbl_alumni
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
    public function show(tbl_alumni $tbl_alumni)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $r)
    {

        try {
            $tbl_alumni = tbl_alumni::where('idalumni', $r->idalumni)->first();

            if ($tbl_alumni) {
                return response()->json([
                    'status' => 1,
                    'data' => $tbl_alumni
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

     public function update(Request $r) {
        $messages = [
            'required' => 'Kolom :attribute harus diisikan',
            'integer' => ':attribute harus berupa angka',
            'string' => ':attribute harus berupa teks',
            'date' => ':attribute harus berupa tanggal yang valid'
        ];

        $rules = [
            'tgl_transaksi' => 'required|date',
            'fakultas' => 'required|string|max:255',
            'jurusan' => 'required|string|max:255',
            'prodi' => 'required|string|max:255',
            'bekerja' => 'required|integer',
            'belum_bekerja' => 'required|integer',
            'lanjut_kuliah' => 'required|integer',
            'wiraswasta' => 'required|integer',
        ];

        $validator = Validator::make($r->all(), $rules, $messages);

        if ($validator->fails()) {
            return response()->json([
                'status' => false,
                'message' => implode(', ', $validator->errors()->all())
            ]);
        }

        try {
            $tbl_alumni = tbl_alumni::where('idalumni', $r->idalumni)->first();

            if($tbl_alumni){
                $tbl_alumni->tgl_transaksi = $r->tgl_transaksi;
                $tbl_alumni->fakultas = $r->fakultas;
                $tbl_alumni->jurusan = $r->jurusan;
                $tbl_alumni->prodi = $r->prodi;
                $tbl_alumni->bekerja = $r->bekerja;
                $tbl_alumni->belum_bekerja = $r->belum_bekerja;
                $tbl_alumni->lanjut_kuliah = $r->lanjut_kuliah;
                $tbl_alumni->wiraswasta = $r->wiraswasta;
                $tbl_alumni->save();

                return response()->json([
                    'status' => 1,
                    'message' => "Data berhasil diperbarui"
                ]);
            }

            return response()->json([
                'status' => 0,
                'message' => "Data tidak ditemukan"
            ]);
        } catch(Exception $e) {
            return response()->json([
                'status' => 0,
                'message' => $e->getMessage()
            ]);
        }
    }




    /**
     * Remove the specified resource from storage.
     */
    public function destroy(tbl_alumni $tbl_alumni)
    {
        //
    }

    public function delete(Request $r){
        try{
            $tbl_alumni = tbl_alumni::where('idalumni', $r->idalumni)->first();

            if($tbl_alumni){
                $tbl_alumni->delete();
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
