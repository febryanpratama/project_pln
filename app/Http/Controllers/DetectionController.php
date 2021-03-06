<?php

namespace App\Http\Controllers;

use App\Models\Detection;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class DetectionController extends Controller
{
    //
    public function index()
    {
        $title = "Detection List";
        $data = Detection::orderBy('rating_detection', 'asc')->get();

        return view('pages.admin.detection.index', compact(['title', 'data']));
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nama_detection' => 'required',
            'rating_detection' => 'required|numeric|between:1,10'
        ]);
        if ($validator->fails()) {
            # code...
            return back()->withErrors($validator)->with('error', 'Gagal Menambahkan Data');
        }
        $data = $request->all();
        Detection::create($data);

        return back()->with('success', 'Berhasil Menambahkan Detection');
    }

    public function update(Request $request)
    {
        // dd($request->all());
        $data = $request->except('_token', 'detection_id');

        Detection::where('id', $request['detection_id'])->update($data);

        return back()->with('success', 'Berhasil Mengubah Detection');
    }

    public function destroy(Request $request)
    {
        // dd($request->all());
        $data = $request->except('_token', 'detection_id');

        Detection::where('id', $request['detection_id'])->delete();

        return back()->with('success', 'Berhasil Menghapus Detection');
    }
}
