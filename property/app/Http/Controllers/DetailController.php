<?php

namespace App\Http\Controllers;

use App\Models\Informasi;
use App\Models\RumahDijual;
use Illuminate\Http\Request;

class DetailController extends Controller
{
    public function index($id) {
        $informasi = Informasi::all()->first();
        $rumah_dijual = RumahDijual::find($id);

        return view('pages.detail', [
            'informasi' => $informasi,
            'rumah_dijual' => $rumah_dijual,
        ]);
    }
}
