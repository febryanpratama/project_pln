<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Detection;
use App\Models\Kriteria;
use App\Models\Occurence;
use App\Models\Rpn;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class RpnController extends Controller
{
    //
    public function index(){
        $title = "RPN List";
        $data = Rpn::with('barang', 'severity', 'occurence', 'detection')->get();

        // dd($data);
        $barang = Barang::get();
        $severity = Kriteria::orderBy('rating_kriteria', 'asc')->get();
        $occurence = Occurence::orderBy('rating_occurence', 'asc')->get();
        $detection = Detection::orderBy('rating_detection', 'asc')->get();

        return view('pages.admin.rpn.index', compact(['title','data','barang','severity', 'occurence','detection']));
    }

    public function store(Request $request){
        $validator = Validator::make($request->all(), [
            'barang_id' => 'required|numeric|exists:barangs,id',
            'severity_id' => 'required|numeric|exists:kriterias,id',
            'occurence_id' => 'required|numeric|exists:occurences,id',
            'detection_id' => 'required|numeric|exists:detections,id',
        ]);
        
        if($validator->fails()){
            dd($validator);
            return back()->withErrors($validator)->with('error', 'Gagal Menambahkan Data');
        }

        $data = $request->all();
        $dt = new DateTime();
        $data['tanggal'] = $dt->format('Y-m-d H:i:s');

        Rpn::create($data);

        return back()->with('success', 'Berhasil Menambahkan Data RPN');

    }
}
