<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    function index(Request $request)
    {
        $users = [
            [
                'name' => 'Maung Maung',
                'age' => 25
            ],
            [
                'name' => 'Aung Aung',
                'age' => 26
            ],
            [
                'name' => 'Naung Naung',
                'age' => 27
            ],
            [
                'name' => 'Daung Daung',
                'age' => 28
            ],
        ];

        return view('loop', ['users' => $users]);
    }
}
