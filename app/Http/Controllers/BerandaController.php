<?php

namespace App\Http\Controllers;

use App\Models\Disposisi;
use App\Models\Proposal;
use App\Models\User;
use Illuminate\Http\Request;

class BerandaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $disposisiall = Disposisi::all()->count();
        $disposisipending = Disposisi::where('status', 1)->count();
        $disposisiproses = Disposisi::where('status', '!=', 1)
        ->where('status', '!=', 5)->where('status', '!=', 6)->count();
        $disposisiacc = Disposisi::where('status', 5)->count();
        $disposisireject = Disposisi::where('status', 6)->count();
        $proposalall = Proposal::all()->count();
        $proposalpending = Proposal::where('status', 1)->count();
        $proposalproses = Proposal::where('status', '!=', 1)
        ->where('status', '!=', 5)->where('status', '!=', 6)->count();
        $proposalacc = Proposal::where('status', 5)->count();
        $proposalreject = Proposal::where('status', 6)->count();
        $userall = User::all()->count();
        $user = User::all();
        return view('beranda.index', compact(
            'userall',
            'user',
            'disposisiproses',
            'disposisiall',
            'disposisipending',
            'disposisiacc',
            'disposisireject',
            'proposalall',
            'proposalproses',
            'proposalpending',
            'proposalacc',
            'proposalreject'
        ));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
