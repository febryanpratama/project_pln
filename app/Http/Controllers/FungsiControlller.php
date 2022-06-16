<?php

namespace App\Http\Controllers;

use App\Models\Fungsi_sistem;
use App\Models\sub_swbs;
use App\Models\swbs;
use App\Models\Swbs_komponen;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class FungsiControlller extends Controller
{
    //
    public function index()
    {
        $title = "Fungsi Sistem dan Kegagalan Fungsi List";
        $data = Fungsi_sistem::with('komponen', 'swbs', 'subswbs')->get();
        $komponen = Swbs_komponen::get();

        return view('pages.admin.swbs.fungsi', compact(['title', 'data', 'komponen']));
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'komponen_id' => 'required|numeric|exists:swbs_komponens,id',
            'kegagalan_fungsi' => 'required',
            'uraian_kegagalan_fungsi' => 'required',
        ]);

        if ($validator->fails()) {
            // dd($validator);
            return back()->withErrors($validator)->with('error', 'Gagal Menambahkan Data');
        }
        // dd($request->all());
        $data = $request->all();
        $komponen = Swbs_komponen::where('id', $data['komponen_id'])->first();
        $subsistem = sub_swbs::where('id', $komponen['subsistem_id'])->first();
        $swbs = swbs::where('id', $subsistem['swbs_id'])->first();

        // dd($komponen);
        $cek_kode_kegagalan = Fungsi_sistem::where('kode_fungsi', $komponen->kode_komponen)->count('id');
        $kode_kegagalan_fungsi = $komponen->kode_komponen . "." . ($cek_kode_kegagalan + 1);

        // dd($kode_kegagalan_fungsi);
        // dd(($komponen->subsistem_id));
        $data['swbs_id'] = $swbs->id;
        $data['subsistem_id'] = $komponen->subsistem_id;
        $data['kode_fungsi'] = $komponen->kode_komponen;
        $data['kode_kegagalan_fungsi'] = $kode_kegagalan_fungsi;

        Fungsi_sistem::create($data);

        return back()->with('success', 'Berhasil Menambahkan Fungsi Sistem');
    }

    public function update(Request $request)
    {
        $validator = Validator::make($request->all(), [
            // 'komponen_id' => 'required|numeric|exists:swbs_komponens,id',
            'kegagalan_fungsi' => 'required',
            'uraian_kegagalan_fungsi' => 'required',
        ]);

        if ($validator->fails()) {
            // dd($validator);
            return back()->withErrors($validator)->with('error', 'Gagal Menambahkan Data');
        }

        $data = $request->except('_token', 'id');

        Fungsi_sistem::where('id', $request->id)->update($data);

        return back()->with('success', 'Berhasil Mengubah Fungsi Sistem');
    }

    public function destroy(Request $request)
    {
        Fungsi_sistem::where('id', $request->id)->delete();
        return back()->with('success', 'Berhasil Menghapus Fungsi Sistem');
    }
}
