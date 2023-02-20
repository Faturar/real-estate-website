<?php

namespace App\Http\Controllers;

use App\Models\Informasi;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index() {
        $informasi = Informasi::all()->first();

        return view('pages.contact', [
            'informasi' => $informasi
        ]);
    }
}
