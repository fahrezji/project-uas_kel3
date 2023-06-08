<?php

namespace App\Http\Controllers;

use App\Models\tamu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Session;
use Laravel\Sail\Console\PublishCommand;


class tamucontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data = tamu::orderby('id', 'desc')->paginate(5);
        return view('tamu.index')->with ('data',$data);


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('tamu/create');
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

        // Session::flash('id', $request->id);
        Session::flash('nama_tamu', $request->nama_tamu);
        Session::flash('alamat', $request->alamat);
        Session::flash('email', $request->email);
        Session::flash('telepon', $request->telepon);
        Session::flash('tujuan', $request->tujuan);
        Session::flash('tanggal', $request->tanggal);


         $request->validate([
        'nama_tamu' => 'required',
        'alamat' => 'required',
        'email'=> 'required',
        'telepon'=> 'required',
        'tujuan'=> 'required',
        'tanggal'=> 'required',


         ], [
            'nama_tamu.required' => 'Nama tamu Wajib Diisi',
            'alamat.required' => 'Alamat tamu Wajib Diisi',
            'email.required' => 'Email tamu Wajib Diisi',
            'telepon.required' => 'Telepon tamu Wajib Diisi',
            'tujuan.required' => 'Deksripsi tamu Wajib Diisi',
            'tanggal.required' => 'tanggal tamu Wajib Diisi'

         ]

     );
        //  //return 'Cek Data';
        //  $foto_file = $request->file('gambar');
        //  $foto_ekstensi = $foto_file->extension();
        //  $gambar_nama = date('ymdhis') . ".". $foto_ekstensi;
        //  $foto_file->move(public_path('gambar'),$gambar_nama);

         $data=[
             'nama_tamu'=> $request->input('nama_tamu'),
             'alamat'=> $request->input('alamat'),
             'email'=> $request->input('email'),
             'telepon'=> $request->input('telepon'),
             'tujuan'=> $request->input('tujuan'),
             'tanggal'=> $request->input('tanggal')

            //  'gambar' => $gambar_nama

         ];
         tamu::create($data);
         return redirect('/tamu')->with('success', 'Berhasil Melakukan Input Data');
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
        $data = tamu::where('id', $id)->first();
        return view('tamu/show')->with('data', $data);
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
        $data = tamu::where('id', $id)->first();
        return view('tamu/edit')->with('data', $data);
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
        $request->validate([
            'nama_tamu' => 'required',
            'alamat' => 'required',
            'email'=> 'required',
            'telepon'=> 'required',
            'tujuan'=> 'required',
            'tanggal'=> 'required',



             ], [
                'nama_tamu.required' => 'Nama tamu Wajib Diisi',
                'alamat.required' => 'Alamat tamu Wajib Diisi',
                'email.required' => 'Email tamu Wajib Diisi',
                'telepon.required' => 'Telepon tamu Wajib Diisi',
                'tujuan.required' => 'Deksripsi tamu Wajib Diisi',
                'tanggal.required' => 'tanggal tamu Wajib Diisi',


             ]

         );
         $data=[
            'nama_tamu'=> $request->input('nama_tamu'),
            'alamat'=> $request->input('alamat'),
            'email'=> $request->input('email'),
            'telepon'=> $request->input('telepon'),
            'tujuan'=> $request->input('tujuan'),
            'tanggal'=> $request->input('tanggal'),

         ];
    tamu::where('id', $id)->update($data);
    return redirect('/tamu')->with('success', 'Berhasil Melakukan Update Data');
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
        $data= tamu::where('id', $id)->delete();

        // $data_gambar = tamu::where('id', $id)->first();
        // File::delete(public_path('gambar'). '/'. $data_gambar->gambar);

       tamu::where('id', $id)->delete();
        return redirect('/tamu')->with('success', 'Berhasil Hapus Data');
    }
}
