<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Notifications\registerNotif;
use Illuminate\Http\Request;

class registerController extends Controller
{
    public function index()
    {
        $user = User::all();
        return view('welcome', [
            'users' => $user
        ]);
    }

    public function store(Request $request)
    {
        $data = $request->input();
        $user = User::create($data);

        // kirim notif ke database
        $user->notify(new registerNotif($user));

        return back();
    }

    public function bacaNotif($id, $notifId)
    {
        $read = User::where('id', $id)->first();
        $read->notifications->where('id', $notifId)->markAsRead();
        return back();
    }
}
