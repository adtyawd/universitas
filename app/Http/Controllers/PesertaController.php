<?php

namespace App\Http\Controllers;

use App\Models\NomorUndian;
use Exception;
use App\Models\Peserta;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class PesertaController extends Controller
{
    public function pendaftaran(){
        $data = [
            'pageTitle' => "Pendaftaran Peserta"
        ];
        return view('peserta.pendaftaran', $data);
    }

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
            "nama" => $r->nama,
            "nama_pendamping" => $r->pendamping,
            "no_wa" => $r->wa,
            "email" => $r->email,
            "nama_md" => $r->md
        ];

        $rules = [
            'nama' => 'required|string|max:255',
            'nama_pendamping' => 'required|string|max:255',
            'no_wa' => 'required|string|max:255|unique:pesertas',
            'email' => 'required|email|unique:pesertas',
            'nama_md' => 'required|string|max:255',
        ];

        $validator = Validator::make($data, $rules, $messages);

        if ($validator->fails()) {
            return response()->json([
                'status' => false,
                'message' => implode(', ', $validator->errors()->all())
            ]);
        }

        try {
            $data = Peserta::create($data);

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

    public function index(){
        $pesertas = Peserta::all();

        return view('peserta.index', [
            'pesertas' => $pesertas,
        ]);
    }

    public function edit(Request $r){
        try{
            $peserta = Peserta::where('id', $r->id)->first();

            if($peserta){
                return response()->json([
                    'status' => 1,
                    'data' => $peserta
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

    public function statusDaftar(Request $r){
        try{
            $data = Peserta::where('id', $r->id)->first();

            if($data){
                if($data->status_daftar == 1){
                    return response()->json([
                        'status' => 0,
                        'message' => "Peserta Sudah Terdaftar"
                    ]);
                }

                $excludeNumber = NomorUndian::pluck('no_undian');

                do{
                    $generateNumber = (string)mt_rand(1000, 9999);
                }while(in_array($generateNumber, $excludeNumber));

                $nomorUndian = NomorUndian::create([
                    'no_undian' => $generateNumber
                ]);

                $data->status_daftar = 1;
                $data->nomor_undian_id = $nomorUndian->id;
                $data->save();

                return response()->json([
                    'status' => 1,
                    "data" => $data,
                    "no_undian" => $generateNumber
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
            "nama" => $r->nama,
            "nama_pendamping" => $r->pendamping,
            "no_wa" => $r->wa,
            "email" => $r->email,
            "nama_md" => $r->md
        ];

        $rules = [
            'nama' => 'required|string|max:255',
            'nama_pendamping' => 'required|string|max:255',
            'no_wa' => 'required|string|max:255|unique:pesertas,no_wa,'.$r->id,
            'email' => 'required|email|unique:pesertas,email,'.$r->id,
            'nama_md' => 'required|string|max:255',
        ];

        $validator = Validator::make($data, $rules, $messages);

        if ($validator->fails()) {
            return response()->json([
                'status' => false,
                'message' => implode(', ', $validator->errors()->all())
            ]);
        }

        try{
            $data = Peserta::where('id', $r->id)->first();

            if($data){
                $data->nama = $r->nama;
                $data->nama_pendamping = $r->pendamping;
                $data->no_wa = $r->wa;
                $data->email = $r->email;
                $data->nama_md = $r->md;
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

    public function delete(Request $r){
        try{
            $data = Peserta::where('id', $r->id)->first();

            if($data){
                $data->delete();
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

    public function detail($id){
        $data = [
            'peserta' => Peserta::find($id),
            'pageTitle' => "Detail Peserta"
        ];

        return view('peserta.detail', $data);
    }

    public function generatedQr(Request $r){
        try{
            $data = Peserta::where('id', $r->id)->first();

            if($data){
                if ($r->file('qrcode')) {
                    $image = $r->file('qrcode');
                    $fileName = time() . '.' . $image->getClientOriginalExtension();


                    $image->storeAs('qrcode/', $fileName, 'public');
                    $data->qr = $fileName;
                    $data->save();

                    return response()->json([
                        'status' => 1,
                        'data' => $data
                    ]);
                }
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
