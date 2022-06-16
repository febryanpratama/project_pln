<?php

namespace App\Http\Controllers;

use App\Models\Interval_waktu;
use App\Models\swbs;
use App\Models\Swbs_komponen;
use Illuminate\Http\Request;

class HomeController extends Controller
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
    public function index()
    {
        $komponen = Swbs_komponen::count('id');
        $rcm = Interval_waktu::count('id');
        $sistem = swbs::count('id');

        $data = Interval_waktu::with('komponen')->get();

        // $data_rcm = 
        // dd($komponen);

        return view('home', compact(['komponen', 'rcm', 'sistem', 'data']));
    }
}
