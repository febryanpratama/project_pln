<?php

namespace App\Http\Controllers;

use App\Models\Detection;
use App\Models\Fmea;
use App\Models\Kriteria;
use App\Models\Lta_proses;
use App\Models\Occurence;
use App\Models\swbs;
use DateTime;
use Illuminate\Http\Request;

class FmeaController extends Controller
{
    //
    public function index()
    {
        $title = "Failur Mode Effect Analysis";
        $data = Fmea::with('swbs', 'subswbs', 'komponen', 'severity', 'occurence', 'detection', 'fungsi')->get();
        $sistem = swbs::get();
        $severity = Kriteria::get();
        $occurence = Occurence::get();
        $detection = Detection::get();

        // dd($data);

        return view('pages.admin.fmea.index', compact(['title', 'data', 'sistem', 'severity', 'occurence', 'detection']));
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $data = $request->all();
        $dt = new DateTime();
        $data['tanggal'] = $dt->format('Y-m-d H:i:s');

        Fmea::create($data);

        return back()->with('success', 'Berhasil Menambahkan Data');
    }
}
