<?php

namespace App\Http\Controllers;

use App\Models\Pegawai;
use Illuminate\Http\Request;

class PegawaiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Pages.index')->with('data', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Pages.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama'=>'required',
            'jabatan'=>'required',
            'umur'=>'required',
            'alamat'=>'required',

        ],[
            'nama.required'=>'Nama Wajib Diisi',
            'jabatan.required'=>'Jabatan Wajib Diisi',
            'umur.required'=>'Umur Wajib Diisi',
            'alamat.required'=>'Alamat Wajib Diisi',
        ]);
        $data=[
            'nama'=>$request->nama,
            'jabatan'=>$request->jabatan,
            'umur'=>$request->umur,
            'alamat'=>$request->alamat,
        ];
        Pegawai::create($data);
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
        $data=Pegawai::where('id',$id)->first();
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
        $request->validate([
            'nama'=>'required',
            'jabatan'=>'required',
            'umur'=>'required',
            'alamat'=>'required',

        ],[
            'nama.required'=>'Nama Wajib Diisi',
            'jabatan.required'=>'Jabatan Wajib Diisi',
            'umur.required'=>'Umur Wajib Diisi',
            'alamat.required'=>'Alamat Wajib Diisi',
        ]);
        $data=[
            'nama'=>$request->nama,
            'jabatan'=>$request->jabatan,
            'umur'=>$request->umur,
            'alamat'=>$request->alamat,
        ];
        Pegawai::where('id',$id)->update($data);
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
