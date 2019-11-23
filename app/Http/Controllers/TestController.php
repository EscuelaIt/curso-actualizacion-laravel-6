<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;

class TestController extends Controller
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

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function test()
    {
        str_random(15);
        dd(Str::random(15));
        // $user = User::findOrFail(34567);

        $file = 'las-fotos-.-del-.-viaje-.-png';

        return Str::beforeLast($file, '-.-');
    }
}
