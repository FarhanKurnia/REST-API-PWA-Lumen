<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserController extends Controller
{
  public function register(Request $request){
      $this->validate($request, [
          'name' => 'required',
          'email' => 'required|email',
          'password' => 'required'
      ]);
      
      $name = $request->input('name');
      $email = $request->input('email');
      $password = Hash::make($request->input('password'));

      $user = User::create([
          'name' => $name,
          'email' => $email,
          'password' => $password
      ]);

      return response()->json(['message' => 'Data added successfully'], 201);
  }


   public function login(Request $request){
      $this->validate($request, [
          'email' => 'required|email',
          'password' => 'required'
      ]);

      $email = $request->input('email');
      $password = $request->input('password');

      $user = User::where('email', $email)->first();
      if (!$user) {
          return response()->json(['message' => 'Login failed'], 401);
      }

      $isValidPassword = Hash::check($password, $user->password);
      if (!$isValidPassword) {
        return response()->json(['message' => 'Login failed'], 401);
      }

      $generateToken = bin2hex(random_bytes(40));
      $user->update([
          'token' => $generateToken
      ]);

      return response()->json($user);
  }

  public function index()
    {
        return response()->json([
            'status' => 'success',
            'message' => 'Load data post successfully',
            'data' => Post::all()
        ], 200);
    }

    public function show($id)
    {
        //
        $message = "Load data post successfully";
        $status = "success";
        $user = User::find($id);

        if (!$user) {
            $status = "error";
            $message = "Data post not found";
        }

        return response()->json([
            'status' => $status,
            'message' => $message,
            'data' => $user::with('review.destinasi')->where('id',$id)->get()], 200);
    }

    public function update(Request $request, $id)
    {

        $message = 'User updated successfully';
        $status = "success";
        try {
            User::find($id)->update([
                'name' => $request->name,
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

    public function logout(Request $request, $id)
    {
        $message = 'User updated successfully';
        $status = "success";
        try {
            User::find($id)->update([
                'token' => $request->token,
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
} 