<?php

namespace App\Http\Middleware;
namespace App\Http\Controllers;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Destinasi;


class DestinasiController extends Controller
{
    public function __construct()
    {
        // ini untuk token auth header
        $this->middleware('auth');
    }

    public function index(){
        return response()->json([
            'status' => 'success',
            'message' => 'Load data destinations successfully',
            'data' => Destinasi::all()
        ], 200);
    }

    public function store(Request $request){
        $this->validate($request, [
            'nama_destinasi' => 'required',
            'lokasi' => 'required',
            'deskripsi' => 'required'
        ]);
        $nama_destinasi = $request->input('nama_destinasi');
        $lokasi = $request->input('lokasi');
        $deskripsi = $request->input('deskripsi');
        $destinasi = Destinasi::where('nama_destinasi',$nama_destinasi)->first();
        if(!$destinasi){
            Destinasi::create([
                'nama_destinasi' => $nama_destinasi,
                'lokasi' => $lokasi,
                'deskripsi' => $deskripsi,
            ]);
            $message = 'Destination created successfully';
            $status = 'success';
            $http_code = 201;
        }else{
            $message = 'Destination already created';
            $status = 'error';
            $http_code = 400;
        }
        return response([
            'status' => $status,
            'message' => $message,
        ], $http_code);
    }

    public function show($id){
        $destinasi = Destinasi::find($id);
        if (!$destinasi) {
            $status = 'error';
            $message = 'Destination not found';
            $data = null;
            $http_code = 400;
        } else{
            $message = 'Load data destination successfully';
            $status = 'success';
            $data = $destinasi::with('review.user')->where('id',$id)->get();
            $http_code = 200;
        }
        return response()->json([
            'status' => $status,
            'message' => $message,
            'data' => $data], $http_code);
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'nama_destinasi' => 'required',
            'lokasi' => 'required',
            'deskripsi' => 'required'
        ]);
        $nama_destinasi = $request->input('nama_destinasi');
        $lokasi = $request->input('lokasi');
        $deskripsi = $request->input('deskripsi');
        $destinasi = Destinasi::where('nama_destinasi',$nama_destinasi)->first();
        if(!$destinasi){
            Destinasi::find($id)->update([
                'nama_destinasi' => $request->nama_destinasi,
                'lokasi' => $lokasi,
                'deskripsi' => $deskripsi,
            ]);
            $message = 'Destination updated successfully';
            $status = 'success';
            $http_code = 200;
        }else{
            $message = 'Destination already created';
            $status = 'error';
            $http_code = 400;
        }
        return response([
            'status' => $status,
            'message' => $message,
        ], $http_code);
    }

    public function destroy($id){
        $message = 'Destination deleted successfully';
        $status = 'success';
        $http_code = 200;
        try {
            Destinasi::find($id)->delete();
        } catch (\Throwable $th) {
            $status = 'error';
            $message = $th->getMessage();
            $http_code = 400;
        }
        return response()->json([
            'status' => $status,
            'message' => $message,
        ], $http_code);
    }
}
