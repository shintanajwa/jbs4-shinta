<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {

        $profile = [
            'name' => 'Shinta Ainun Najwa',
            'email' => 'shintaainun37@gmail.com',
            'bio' => 'simplicity is the ultimate sophistication.',
            'profile_picture' => 'nayyyo.jpg',
            'skills' => ['kerja sama tim', 'mengelola waktu', 'kreativitas']
        ];
        return view('profile', compact('profile'));
    }
}
