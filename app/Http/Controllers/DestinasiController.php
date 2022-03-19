<?php

namespace App\Http\Middleware;
namespace App\Http\Controllers;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Destinasi;


class DestinasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        // ini untuk token auth header
        $this->middleware('auth');
    }

    public function index()
    {
        return response()->json([
            'status' => 'success',
            'message' => 'Load data post successfully',
            'data' => Destinasi::all()
        ], 200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $message = 'Destination created successfully';
        $status = "success";

        $nama_destinasi = $request->input('nama_destinasi');
        $lokasi = $request->input('lokasi');
        $deskripsi = $request->input('deskripsi');
  
        try {
            Destinasi::create([
                'nama_destinasi' => $nama_destinasi,
                'lokasi' => $lokasi,
                'deskripsi' => $deskripsi,
            ]);
        } catch (\Throwable $th) {
            $status = "error";
            $message = $th->getMessage();
        }

        return response([
            'status' => $status,
            'message' => $message,
        ], 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Destinasi  $destinasi
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $message = "Load data post successfully";
        $status = "success";
        $destinasi = Destinasi::find($id);

        if (!$destinasi) {
            $status = "error";
            $message = "Data post not found";
        }

        return response()->json([
            'status' => $status,
            'message' => $message,
            'data' => $destinasi::with('review.user')->where('id',$id)->get()], 200);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Destinasi  $destinasi
     * @return \Illuminate\Http\Response
     */
    public function edit(Destinasi $destinasi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Destinasi  $destinasi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $message = 'Post updated successfully';
        $status = "success";
        try {
            Destinasi::find($id)->update([
                'nama_destinasi' => $request->nama_destinasi,
                'lokasi' => $request->lokasi,
                'deskripsi' => $request->deskripsi,
            ]);
        } catch (\Throwable $th) {
            $status = "error";
            $message = $th->getMessage();
        }

        return response()->json([
            'status' => $status,
            'message' => $message,
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Destinasi  $destinasi
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $message = 'Destination deleted successfully';
        $status = "success";
        try {
            Destinasi::find($id)->delete();
        } catch (\Throwable $th) {
            $status = "error";
            $message = $th->getMessage();
        }

        return response()->json([
            'status' => $status,
            'message' => $message,
        ], 200);
    }
}
