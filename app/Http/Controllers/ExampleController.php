<?php
namespace App\Http\Middleware;
namespace App\Http\Controllers;
use Illuminate\Support\Str;


class ExampleController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function generateKey()
    {
        return Str::random(32);
    }

    public function getUser($id)
    {
        return 'User id = '. $id;
    }

    public function getProfile()
    {
        return "profile";
    }
}
