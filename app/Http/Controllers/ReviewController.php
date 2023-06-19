<?php

namespace App\Http\Middleware;
namespace App\Http\Controllers;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Destinasi;
use App\Models\Review;
use App\Models\User;

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
        $this->validate($request, [
            'destinasi_id' => 'required',
            'review' => 'required',
            'rating' => 'required'
        ]);
        $header = getallheaders();
        $token = $header['token'];
        $user_id = User::where('token',$token)->pluck('id');
        $user_id = $user_id[0];
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
            $status = 'success';
            $message = 'Review created successfully';
            $http_code = 200;
        } catch (\Throwable $th) {
            $status = 'error';
            $message = $th->getMessage();
            $http_code = 400;
        }
        return response([
            'status' => $status,
            'message' => $message,
        ], $http_code);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Review  $review
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $review = Review::find($id);
        if (!$review) {
            $status = 'error';
            $message = 'Review not found';
            $data = null;
            $http_code = 400;
        }else{
            $status = 'success';
            $message = 'Load data review successfully';
            $review = $review->where('id',$id);
            $data = $review->with('user:id,name,email')->get();
            $http_code = 200;
        }
        return response()->json([
            'status' => $status,
            'message' => $message,
            'data' => $data], $http_code);
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

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Review  $review
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            Review::find($id)->delete();
            $status = 'success';
            $message = 'Review deleted successfully';
            $http_code = 200;
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
