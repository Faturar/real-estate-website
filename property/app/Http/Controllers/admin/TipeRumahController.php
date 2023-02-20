<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\TipeRumah;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TipeRumahController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tipe_rumahs = TipeRumah::all();

        return view('pages.admin.tipe-rumah.index', [
            'tipe_rumahs' => $tipe_rumahs
        ]);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.admin.tipe-rumah.tambah');
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tipe_rumah = New TipeRumah;

        if($request->file('icon')){
            $tipe_rumah->icon = $request->file('icon')->store('tipe-rumah', 'public');
        } else {
            $tipe_rumah->icon = 'tipe-rumah/default.jpg';
        }

        $tipe_rumah->name = $request->name;
        $tipe_rumah->deskripsi = $request->deskripsi;

        $tipe_rumah->save();

        return redirect()->route('tipe-rumah.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tipe_rumah = TipeRumah::find($id);

        return view('pages.admin.tipe-rumah.edit', [
            'tipe_rumah' => $tipe_rumah
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
        $tipe_rumah = TipeRumah::find($id);

        if($request->file('icon')){
            Storage::disk('public')->delete($tipe_rumah->icon);
            $tipe_rumah->icon = $request->file('icon')->store('tipe-rumah', 'public');
        }

        $tipe_rumah->name = $request->name;
        $tipe_rumah->deskripsi = $request->deskripsi;

        $tipe_rumah->save();

        return redirect()->route('tipe-rumah.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tipe_rumah = TipeRumah::find($id);

        Storage::disk('public')->delete($tipe_rumah->icon);

        $tipe_rumah->delete();

        return redirect()->route('tipe-rumah.index');
    }
}
