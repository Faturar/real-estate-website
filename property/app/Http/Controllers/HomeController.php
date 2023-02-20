<?php

namespace App\Http\Controllers;

use App\Models\Informasi;
use App\Models\RumahDijual;
use App\Models\Testimonial;
use App\Models\TipeRumah;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        $informasi = Informasi::all()->first();
        $tipe_rumahs = TipeRumah::all();
        $testimonials = Testimonial::all();
        $rumah_dijuals = RumahDijual::all();

        return view('pages.home', [
            'informasi' => $informasi,
            'tipe_rumahs' => $tipe_rumahs,
            'testimonials' => $testimonials,
            'rumah_dijuals' => $rumah_dijuals
        ]);
    }
}
