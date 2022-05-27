<?php

namespace App\Http\Controllers;

use App\Models\Lta;
use App\Models\Lta_proses;
use App\Models\Swbs_komponen;
use Illuminate\Http\Request;

class LtaController extends Controller
{
    //
    public function index(){
        $title = "Pertanyaan LTA";
        $data = Lta::get();

        return view('pages.admin.lta.index', compact(['data', 'title']));
    }

    public function store(Request $request){
        // dd($request->all());
        $data = $request->all();
        Lta::create($data);

        return back()->with('success', 'Berhasil Menambahkan Data');
    }

    public function ltaIndex(){
        $title = "Proses LTA (Logic Tree Analysis)";
        $komponen = Swbs_komponen::get();

        // dd($komponen);
        $first = Lta::first();
        // dd($first);
        $data = Lta_proses::with('komponen')->get();
        // dd($data);

        return view('pages.admin.lta.proses', compact(['data', 'title', 'first', 'komponen']));
    }

    public function ltastore(Request $request){
        // dd($request->all());
        $data = $request->all();
        $data['evident'] = $data['pertanyaan_1'];
        $data['safety'] = $data['pertanyaan_2'];
        if( array_key_exists('pertanyaan_3',$data)){
            $data['outage'] = $data['pertanyaan_3'];
        }
        $data['category'] = $data['value_kategori'];

        Lta_proses::create($data);

        return back()->with('success', 'Berhasil Menambahkan Data');

        
    }




    // API PERTANYAAN

    public function api1(Request $request){
        // dd($request->all());
        $data = lta::where('id', $request['pertanyaan_id'])->first();

        return response()->json(['status' => true, 'data' => $data]);
    }
}
