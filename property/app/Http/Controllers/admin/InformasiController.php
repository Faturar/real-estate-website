<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Informasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class InformasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $informasi = Informasi::all()->first();
        return view('pages.admin.informasi.index', [
            'informasi' => $informasi
        ]);
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
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $informasi = Informasi::find($id);
        return view('pages.admin.informasi.edit', [
            'informasi' => $informasi
        ]);
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
        $informasi = Informasi::find($id);

        if ($request->logo) {
            Storage::disk('public')->delete($informasi->logo);
            $informasi->logo = $request->file('logo')->store('logo', 'public');
        }

        $informasi->title = $request->title;
        $informasi->short_description = $request->short_description;
        $informasi->no_telepon = $request->no_telepon;
        $informasi->email = $request->email;
        $informasi->alamat = $request->alamat;
        $informasi->gmaps_link = $request->gmaps_link;

        $informasi->save();

        return redirect()->route('informasi.index');
    }
}
