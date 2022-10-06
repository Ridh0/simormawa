<?php

namespace App\Http\Controllers;

use App\Models\Disposisi;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class DisposisiController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Disposisi::all();
        return view('disposisi.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('disposisi.create');


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'perihal' => 'nullable',
            'users_id' => 'nullable',
            'hal' => 'nullable',
            'subjek' => 'nullable',
            'status' => 'nullable',
        ]);
        $filename=null;
        if ($request->hasFile('file')) {
            $filename = $request->file->getClientOriginalName();
            $request->file->move(public_path('filedisposisi'), $filename);
        } 
        Disposisi::create([
            'perihal' =>$request->perihal,
            'nosurat' =>$request->nosurat,
            'jenis' =>$request->jenis,
            'tanggal_kirim' =>$request->tanggal_kirim,
            'lampiran' =>$request->lampiran,
            'file' =>$filename,
            'users_id' =>$request->users_id,
            'hal' =>$request->hal,
            'subjek' =>$request->subjek,
            'status' =>$request->status,
            'asal' =>$request->asal,
            'tujuan' =>$request->tujuan,
        ]);
        Alert::success('Berhasil', 'Berhasil Menambah Data !');
        return back()->with('success','' );
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Disposisi $disposisi)
    {
        return view('disposisi.edit',compact('disposisi'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $this->validate($request, [
            'perihal' => 'nullable',
            'users_id' => 'nullable',
            'hal' => 'nullable',
            'subjek' => 'nullable',
            'status' => 'nullable',
        ]);
        $data = Disposisi::find($request->id);
        $filename=$data->file;
        if ($request->hasFile('file')) {
            $filename = $request->file->getClientOriginalName();
            $request->file->move(public_path('filedisposisi'), $filename);
        } 
        $data->update([
            'perihal' =>$request->perihal,
            'nosurat' =>$request->nosurat,
            'jenis' =>$request->jenis,
            'tanggal_kirim' =>$request->tanggal_kirim,
            'lampiran' =>$request->lampiran,
            'file' =>$filename,
            'users_id' =>$request->users_id,
            'hal' =>$request->hal,
            'subjek' =>$request->subjek,
            'status' =>$request->status,
            'asal' =>$request->asal,
            'tujuan' =>$request->tujuan,
        ]);
        Alert::success('Berhasil', 'Berhasil Mengubah Data !');

        return back()->with('success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function hapus( $disposisi)
    {
        $data = Disposisi::find($disposisi);
        $data->delete();
        Alert::success('Berhasil', 'Berhasil Menghapus Data !');
        return back()->with('success', "Data telah berhasil dideleted !!."); 
    }
}
