<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Rules\ConfirmPassword;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Validator;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data =  User::all();
        return view('user', compact('data'));
    }
    public function profile()
    {
        return view('profile');
    }
    public function ubah_password(Request $request)
    {
     
        $validator = Validator::make($request->all(), [
            'password' => 'required|string|min:8|confirmed',
        ],[
            'min' => ':attribute minimal 8 huruf',
            'confirmed' => ':attribute konfirmasi tidak sama'
            
        ]);
        if ($validator->fails()) {
            Alert::error('Gagal', "Silahkan periksa kembali");
            return back()->withErrors($validator);
        }
        $request->user()->update(
            [
                'password' => Hash::make($request->password)
            ]
        );
        Alert::success('Berhasil', 'Berhasil Mengganti Password !');

        return redirect()->route('user.profile')
        ->withInput();
    }
}
