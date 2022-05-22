<?php

namespace App\Http\Controllers;

use App\Models\Kriteria;
use App\Models\sub_swbs;
use App\Models\swbs;
use App\Models\Swbs_komponen;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class SwbsController extends Controller
{
    //
    public function index(){
        $title = "System Work Breakdown Structure List";
        $data = swbs::get();
        return view('pages.admin.swbs.index', compact(['title', 'data']));
    }

    public function store(Request $request){
        $validator = Validator::make($request->all(), [
            'nama_sistem' => 'required',
            'kode_sistem' => 'required|unique:swbs,kode_sistem',
        ]);

        if($validator->fails()){
            return back()->withErrors($validator)->with('error', 'Gagal menambahkan Data');
        }

        $data = $request->all();
        $data['kode_sistem'] = strtoupper($request['kode_sistem']);
        swbs::create($data);

        return back()->with('success', 'Berhasil Menambahkan Data');
    }

    public function detail($swbs_id){

        $title = "Detail System Work Breakdown Structure List";
        $swbs = swbs::get();
        $data = sub_swbs::with('swbs')->where('swbs_id', $swbs_id)->get();
        // dd($data);
        return view('pages.admin.swbs.detail', compact(['title', 'swbs', 'data']));
    }

    public function subSistem(Request $request){
        $validator = Validator::make($request->all(), [
            'swbs_id' => 'required|numeric|exists:swbs,id',
            'nama_sub_sistem' => 'required',
        ]);

        if($validator->fails()){
            return back()->withErrors($validator)->with('error', 'Gagal menambahkan Data');
        }
        $data = $request->all();
        sub_swbs::create($data);

        return back()->with('success', 'Berhasil Menambahkan Data');

    }

    public function detailSubsistem($swbs_id, $subsistem_id){
        $title = 'Detail Komponen Sub Sistem';
        $data = Swbs_komponen::with('subsistem')->get();
        $subsistem = sub_swbs::with('swbs')->where('swbs_id', $swbs_id);

        // dd($data);

        return view('pages.admin.swbs.komponen', compact(['title','data', 'subsistem']));
    }

    public function komponen(Request $request){
        $validator = Validator::make($request->all(),[
            'subsistem_id' => 'required|numeric|exists:sub_swbs,id',
            'nama_komponen' => 'required',
        ]);

        if($validator->fails()){
            return back()->withErrors($validator)->with('error', 'Gagal menambahkan Data');
        }
        $data = $request->all();
        $count = Swbs_komponen::where('subsistem_id', $data['subsistem_id'])->count('id');
        $swbs = sub_swbs::with('swbs')->where('id', $data['subsistem_id'])->first();

        // dd($swbs->swbs->kode_sistem);
        $data['kode_komponen'] = $swbs->swbs->kode_sistem.".".($count+1);

        // dd($data);
        // dd($request->all());

        Swbs_komponen::create($data);
        
        return back()->with('success', 'Berhasil Menambahkan Data');

    }
}
