<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Message;
use App\Models\RumahDijual;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index() {
        $rumah_dijuals = RumahDijual::all()->count();
        $messages = Message::all()->count();
        $users = User::all()->count();

        return view('pages.admin.dashboard', [
            'rumah_dijuals' => $rumah_dijuals,
            'messages' => $messages,
            'users' => $users,
        ]);
    }
}
