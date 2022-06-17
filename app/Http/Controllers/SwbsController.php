<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Kriteria;
use App\Models\sub_swbs;
use App\Models\swbs;
use App\Models\Swbs_komponen;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class SwbsController extends Controller
{
    //
    public function index()
    {
        $title = "System Work Breakdown Structure List";
        $data = swbs::get();
        // dd($data);
        return view('pages.admin.swbs.index', compact(['title', 'data']));
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $validator = Validator::make($request->all(), [
            'nama_sistem' => 'required',
            'foto_sistem' => 'required|image|mimes:png,jpg',
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)->with('error', 'Gagal menambahkan Data');
        }

        $data = $request->all();

        if ($request->hasFile('foto_sistem')) {
            # code...
            $depan = $request['foto_sistem'];
            $fileName = 'images/foto_barang/' . md5($depan->getClientOriginalName() . time()) . "." . $depan->getClientOriginalExtension();
            $depan->move('./uploads/images/foto_barang/', $fileName);

            $data['foto_sistem'] = $fileName;
        }

        // dd($data);
        swbs::create($data);
        // swbs::create($data);

        return back()->with('success', 'Berhasil Menambahkan Data');
    }
    public function updateSwbs(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nama_sistem' => 'required',
            'foto_sistem' => 'required|image|mimes:png,jpg',
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)->with('error', 'Gagal menambahkan Data');
        }

        $data = $request->except('_token', 'swbs_id');

        if ($request->hasFile('foto_sistem')) {
            # code...
            $depan = $request['foto_sistem'];
            $fileName = 'images/foto_barang/' . md5($depan->getClientOriginalName() . time()) . "." . $depan->getClientOriginalExtension();
            $depan->move('./uploads/images/foto_barang/', $fileName);

            $data['foto_sistem'] = $fileName;
        }

        swbs::where('id', $request->swbs_id)->update($data);
        // swbs::create($data);

        return back()->with('success', 'Berhasil Mengubah Data');
    }

    public function destroySwbs(Request $request)
    {
        swbs::where('id', $request->swbs_id)->delete();

        return back()->with('success', 'Berhasil Menghapus Data');
    }

    public function detail($swbs_id)
    {

        $title = "Detail System Work Breakdown Structure List";
        $swbs = swbs::get();
        $data = sub_swbs::with('swbs')->where('swbs_id', $swbs_id)->get();
        // $data = swbs::with('sub_swbs')->where('kode_sistem', 'D')->get();
        // dd($data);
        // dd($data);
        return view('pages.admin.swbs.detail', compact(['title', 'swbs', 'data']));
    }

    public function subSistem(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'swbs_id' => 'required|numeric|exists:swbs,id',
            'nama_sub_sistem' => 'required',
            'kode_sistem' => 'required'
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)->with('error', 'Gagal menambahkan Data');
        }
        $data = $request->all();
        $data['kode_sistem'] = strtoupper($request['kode_sistem']);

        // dd($data);
        sub_swbs::create($data);

        return back()->with('success', 'Berhasil Menambahkan Data');
    }
    public function editsubSistem(Request $request)
    {
        // dd($request->all());
        $validator = Validator::make($request->all(), [
            'swbs_id' => 'required|numeric|exists:swbs,id',
            'nama_sub_sistem' => 'required',
            'kode_sistem' => 'required'
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)->with('error', 'Gagal menambahkan Data');
        }
        $data = $request->except('_token', 'subsistem_id');
        $data['kode_sistem'] = strtoupper($request['kode_sistem']);

        // dd($data);
        // dd($data);
        sub_swbs::where('id', $request->subsistem_id)->update($data);

        return back()->with('success', 'Berhasil Mengubah Data');
    }

    public function detailSubsistem($swbs_id, $subsistem_id)
    {
        $title = 'Detail Komponen Sub Sistem';
        $data = Swbs_komponen::with('subsistem')->where('subsistem_id', $subsistem_id)->get();
        $subsistem = sub_swbs::with('swbs')->where('id', $subsistem_id)->get();

        // dd($data);

        return view('pages.admin.swbs.komponen', compact(['title', 'data', 'subsistem']));
    }

    public function komponen(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'subsistem_id' => 'required|numeric|exists:sub_swbs,id',
            'nama_komponen' => 'required',
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)->with('error', 'Gagal menambahkan Data');
        }
        $data = $request->all();
        // dd($data);
        $swbs = sub_swbs::with('swbs')->where('id', $data['subsistem_id'])->first();
        // dd($swbs);
        $count = Swbs_komponen::where('kode', $swbs->kode_sistem)->count('id');

        // dd($swbs->swbs->kode_sistem);
        $data['swbs_id'] = $swbs->swbs_id;
        $data['kode'] = $swbs->kode_sistem;
        $data['kode_komponen'] = $swbs->kode_sistem . "." . ($count + 1);

        // dd($data);
        // dd($request->all());

        Swbs_komponen::create($data);

        return back()->with('success', 'Berhasil Menambahkan Data');
    }

    public function editkomponen(Request $request)
    {
        // dd($request->all());

        $data = $request->except('_token', 'komponen_id');

        Swbs_komponen::where('id', $request->komponen_id)->update($data);

        return back()->with('success', 'Berhasil Mengubah Data');
    }

    public function ApiNamaSistem(Request $request)
    {
        // dd($request->all());

        // $sistem = Swbs::where('id', $request->swbs_id)->get();
        $data = sub_swbs::with('komponen')->where('swbs_id', $request->swbs_id)->get();

        // dd($data);

        return response()->json(['status' => 'true', 'messages' => 'Berhasil mendapatkan data', 'data' => $data]);
    }
}
