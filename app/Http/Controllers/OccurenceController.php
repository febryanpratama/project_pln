<?php

namespace App\Http\Controllers;

use App\Models\Occurence;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class OccurenceController extends Controller
{
    //
    public function index(){
        $title = "Occurence List";
        $data = Occurence::orderBy('rating_occurence', 'asc')->get();

        return view('pages.admin.occurence.index', compact(['title', 'data']));
    }
    
    public function store(Request $request){
        $validator = Validator::make($request->all(),[
            'nama_occurence' => 'required',
            'rating_occurence' => 'required|numeric|between:1,10'
        ]);
        if ($validator->fails()) {
            # code...
            return back()->withErrors($validator)->with('error', 'Gagal Menambahkan Data');
        }
        $data = $request->all();

        // dd($data);
        Occurence::create($data);
        
        return back()->with('success', 'Berhasil Menambahkan Kriteria');
    }
}
