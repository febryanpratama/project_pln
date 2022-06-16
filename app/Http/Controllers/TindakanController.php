<?php

namespace App\Http\Controllers;

use App\Models\PemilihanTindakan;
use App\Models\Swbs_komponen;
use Illuminate\Http\Request;

class TindakanController extends Controller
{
    //
    public function index()
    {
        $title = "Pemilihan Tindakan";
        $komponen = Swbs_komponen::get();
        $data = PemilihanTindakan::with('komponen', 'komponen.fungsi')->get();
        // dd($data);
        return view('pages.admin.tindakan.index', compact([
            'title',
            'komponen',
            'data'
        ]));
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $data = $request->all();
        PemilihanTindakan::create($data);

        return back()->with('success', 'Berhasil Menambahkan Data');
    }
}
