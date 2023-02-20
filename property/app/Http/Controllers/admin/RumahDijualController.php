<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\RumahDijual;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class RumahDijualController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response 
     */
    public function index()
    {
        $rumah_dijuals = RumahDijual::all();

        return view('pages.admin.rumah-dijual.index', [
            'rumah_dijuals' => $rumah_dijuals
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.admin.rumah-dijual.tambah');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rumah_dijual = new RumahDijual;

        if ($request->file('image')) {
            $rumah_dijual->image = $request->file('image')->store('rumah-dijual', 'public');
        } else {
            $rumah_dijual->image = 'rumah-dijual/default.jpg';
        }
        
        $rumah_dijual->name = $request->name;
        $rumah_dijual->tipe = $request->tipe;
        $rumah_dijual->ukuran_tanah = $request->ukuran_tanah;
        $rumah_dijual->lokasi = $request->lokasi;
        $rumah_dijual->kamar_tidur = $request->kamar_tidur;
        $rumah_dijual->kamar_mandi = $request->kamar_mandi;
        $rumah_dijual->harga_cash = $request->harga_cash;
        $rumah_dijual->harga_dp = $request->harga_dp;
        $rumah_dijual->description = $request->description;

        $rumah_dijual->status = "Dijual";

        $rumah_dijual->save();

        return redirect()->route('rumah-dijual.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $rumah_dijual = RumahDijual::find($id);

        return view('pages.admin.rumah-dijual.detail', [
            'rumah_dijual' => $rumah_dijual
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $rumah_dijual = RumahDijual::find($id);

        return view('pages.admin.rumah-dijual.edit', [
            'rumah_dijual' => $rumah_dijual
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
        $rumah_dijual = RumahDijual::find($id);

        if($request->file('image')){
            Storage::disk('public')->delete($rumah_dijual->image);
            $rumah_dijual->image = $request->file('image')->store('rumah-dijual', 'public');
        }

        $rumah_dijual->name = $request->name;
        $rumah_dijual->tipe = $request->tipe;
        $rumah_dijual->ukuran_tanah = $request->ukuran_tanah;
        $rumah_dijual->lokasi = $request->lokasi;
        $rumah_dijual->kamar_tidur = $request->kamar_tidur;
        $rumah_dijual->kamar_mandi = $request->kamar_mandi;
        $rumah_dijual->harga_cash = $request->harga_cash;
        $rumah_dijual->harga_dp = $request->harga_dp;
        $rumah_dijual->description = $request->description;

        $rumah_dijual->status = $request->status;

        $rumah_dijual->save();

        return redirect()->route('rumah-dijual.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $rumah_dijual = RumahDijual::find($id);

        Storage::disk('public')->delete($rumah_dijual->image);

        $rumah_dijual->delete();

        return redirect()->route('rumah-dijual.index');
    }
}
