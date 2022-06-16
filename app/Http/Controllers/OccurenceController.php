<?php

namespace App\Http\Controllers;

use App\Models\Occurence;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class OccurenceController extends Controller
{
    //
    public function index()
    {
        $title = "Occurence List";
        $data = Occurence::orderBy('rating_occurence', 'asc')->get();

        return view('pages.admin.occurence.index', compact(['title', 'data']));
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
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

        return back()->with('success', 'Berhasil Menambahkan Occurence');
    }

    public function update(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nama_occurence' => 'required',
            'rating_occurence' => 'required|numeric|between:1,10'
        ]);
        if ($validator->fails()) {
            # code...
            return back()->withErrors($validator)->with('error', 'Gagal Menambahkan Data');
        }
        $data = $request->except('_token', 'id');

        // dd($data);
        Occurence::where('id', $request->id)->update($data);
        return back()->with('success', 'Berhasil Mengubah Occurence');
    }

    public function destroy(Request $request)
    {
        Occurence::where('id', $request->id)->delete();
        return back()->with('success', 'Berhasil Menghapus Kriteria');
    }
}
