<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    //

    public function index()
    {
        // 
        $data = User::get();
        $title = "Data User";

        return view('pages.admin.users.index', compact(['data', 'title']));
    }

    public function store(Request $request)
    {
        // 
        $validator = Validator::make($request->all(), [
            'email'                     => 'required|email|unique:users',
            'password'                  => 'required|min:6',
            'password_confirmation'     => 'required|same:password',
            'role'                      => 'required|in:Admin,Operator,Pimpinan',
        ]);

        // dd($request->all());
        $data = $request->all();

        if ($request->hasFile('avatar')) {
            # code...
            $depan = $request['avatar'];
            $fileName = 'images/foto_profil/' . md5($depan->getClientOriginalName() . time()) . "." . $depan->getClientOriginalExtension();
            $depan->move('./uploads/images/foto_profil/', $fileName);

            $data['avatar'] = $fileName;
        }
        $data['password'] = bcrypt($data['password']);

        $user = User::create($data);
        $user->assignRole($data['role']);

        return back()->with('success', 'Berhasil Menambahkan Data User');
    }

    public function update(Request $request)
    {
        // 
        $data = $request->all();
        $data = collect(request()->except('_token', 'user_id'))->filter()->all();

        if ($request->hasFile('avatar')) {
            $depan = $request['avatar'];
            $fileName = 'images/foto_profil/' . md5($depan->getClientOriginalName() . time()) . "." . $depan->getClientOriginalExtension();
            $depan->move('./uploads/images/foto_profil/', $fileName);

            $data['avatar'] = $fileName;
        }

        if (array_key_exists('password', $data)) {
            $data['password'] = bcrypt($data['password']);
        }

        User::where('id', $request['user_id'])->update($data);

        return back()->with('success', 'Berhasil Mengubah Data User');
    }

    public function destroy(Request $request)
    {
        $data = $request->all();

        User::where('id', $data['user_id'])->delete();

        return back()->with('success', 'Berhasil Menghapus Data User');
    }
}
