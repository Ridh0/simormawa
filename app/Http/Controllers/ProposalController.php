<?php

namespace App\Http\Controllers;

use App\Models\Proposal;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class ProposalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Proposal::all();
        return view('proposal.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('proposal.create');

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
            'users_id'=> 'nullable',
            'noproposal'=> 'nullable',
            'judul'=> 'nullable',
            'asal'=> 'nullable',
            'jenis'=> 'nullable',
            'tanggal_kirim'=> 'nullable',
            'file'=> 'nullable',
            'status'=> 'nullable',
        ]);
        $filename=null;
        if ($request->hasFile('file')) {
            $filename = $request->file->getClientOriginalName();
            $request->file->move(public_path('fileproposal'), $filename);
        } 
        Proposal::create([
            'perihal' => $request->perihal,
            'users_id'=> $request-> users_id,
            'noproposal'=> $request->noproposal,
            'judul'=> $request->judul,
            'asal'=> $request->asal,
            'jenis'=> $request->jenis,
            'tanggal_kirim'=> $request->tanggal_kirim,
            'file'=> $filename,
            'status'=> $request->status,
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
    public function edit(Proposal $proposal)
    {
       return view('proposal.edit',compact('proposal'));
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
            'users_id'=> 'nullable',
            'noproposal'=> 'nullable',
            'judul'=> 'nullable',
            'asal'=> 'nullable',
            'jenis'=> 'nullable',
            'tanggal_kirim'=> 'nullable',
            'file'=> 'nullable',
            'status'=> 'nullable',
        ]);
        $data = Proposal::find($request->id);

        $filename=$data->file;
        if ($request->hasFile('file')) {
            $filename = $request->file->getClientOriginalName();
            $request->file->move(public_path('fileproposal'), $filename);
        } 
        $data->update([
            'perihal' => $request->perihal,
            'users_id'=> $request-> users_id,
            'noproposal'=> $request->noproposal,
            'judul'=> $request->judul,
            'asal'=> $request->asal,
            'jenis'=> $request->jenis,
            'tanggal_kirim'=> $request->tanggal_kirim,
            'file'=> $filename,
            'status'=> $request->status,
        ]);
        Alert::success('Berhasil', 'Berhasil Menambah Data !');
        return back()->with('success','' );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function hapus( $proposal)
    {
        $data = Proposal::find($proposal);
        $data->delete();
        Alert::success('Berhasil', 'Berhasil Menghapus Data !');
        return back()->with('success', "Data telah berhasil dideleted !!."); 
    }
}
