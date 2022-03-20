<?php

namespace App\Http\Middleware;
namespace App\Http\Controllers;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Destinasi;
use App\Models\Review;

class ReviewController extends Controller
{
    public function __construct()
    {
        // ini untuk token auth header
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json([
            'status' => 'success',
            'message' => 'Load data post successfully',
            'data' => Review::all()], 200);
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
        $message = 'Review created successfully';
        $status = "success";

        $user_id = $request->input('user_id');
        $destinasi_id = $request->input('destinasi_id');
        $review = $request->input('review');
        $rating = $request->input('rating');
  
        try {
            Review::create([
                'user_id' => $user_id,
                'destinasi_id' => $destinasi_id,
                'review' => $review,
                'rating' => $rating,
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
     * @param  \App\Models\Review  $review
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $message = "Load data post successfully";
        $status = "success";
        $review = Review::find($id);

        if (!$review) {
            $status = "error";
            $message = "Data review not found";
        }

        return response()->json([
            'status' => $status,
            'message' => $message,
            'data' => $review::with('user')->where('id',$id)->get()], 200);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Review  $review
     * @return \Illuminate\Http\Response
     */
    public function edit(Review $review)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Review  $review
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $message = 'Review updated successfully';
        $status = "success";
        try {
            Review::find($id)->update([
                'user_id' => $request->user_id,
                'review' => $request->review,
                'rating' => $request->rating,
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
     * @param  \App\Models\Review  $review
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $message = 'Review deleted successfully';
        $status = "success";
        try {
            Review::find($id)->delete();
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
