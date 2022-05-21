<?php

namespace App\Http\Controllers;

use App\Models\Kriteria;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class KriteriaController extends Controller
{
    //
    public function index(){
        $title = "Kriteria List";
        $data = Kriteria::orderBy('rating_kriteria', 'asc')->get();
        return view('pages.admin.kriteria.index',compact(['title', 'data']));
    }

    public function store(Request $request){
        
        $validator = Validator::make($request->all(),[
            'nama_kriteria' => 'required',
            'rating_kriteria' => 'required|numeric|between:1,10'
        ]);
        if ($validator->fails()) {
            # code...
            return back()->withErrors($validator)->with('error', 'Gagal Menambahkan Data');
        }
        $data = $request->all();
        Kriteria::create($data);
        
        return back()->with('success', 'Berhasil Menambahkan Kriteria');

        // dd($request->all());
    }
}
