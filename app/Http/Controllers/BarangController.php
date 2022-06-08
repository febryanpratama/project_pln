<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class BarangController extends Controller
{
    //
    public function index(){
        $title = 'Barang List';
        $data = Barang::get();
        return view('pages.admin.barang.index', compact(['title', 'data']));
    }

    public function store(Request $request){
        $validator = Validator::make($request->all(), [
            'nama_barang' => 'required',
            'path_barang' => 'required|image|mimes:png,jpg,jpeg',
        ]);

        if ($validator->fails()) {
            # code...
            return back()->withErrors($validator)->with('error', 'Gagal Menambahkan Data');
        }
        $data = $request->all();

        if ($request->hasFile('path_barang')) {
            # code...
            $depan = $request['path_barang'];
            $fileName = 'images/foto_barang/'.md5($depan->getClientOriginalName().time()).".".$depan->getClientOriginalExtension();
            $depan->move('./uploads/images/foto_barang/', $fileName);

            $data['path_barang'] = $fileName;

            Barang::create($data);

            return back()->with('success', 'Berhasil Menambahkan Data Barang');
        }
    }

    public function update(Request $request)
    {
        // dd($request->all());
        $data = $request->except('_token', 'barang_id');
        if ($request->hasFile('path_barang')) {
            # code...
            $depan = $request['path_barang'];
            $fileName = 'images/foto_barang/'.md5($depan->getClientOriginalName().time()).".".$depan->getClientOriginalExtension();
            $depan->move('./uploads/images/foto_barang/', $fileName);

            $data['path_barang'] = $fileName;

        }

        Barang::where('id', $request['barang_id'])->update($data);

        return back()->with('success', 'Berhasil Mengubah Data Barang');
    }
    
    public function destroy(Request $request){
        Barang::where('id', $request['barang_id'])->delete();
        return back()->with('success', 'Berhasil Menghapus Data Barang');

    }
}
