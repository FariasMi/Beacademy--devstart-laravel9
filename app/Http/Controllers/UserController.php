<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = [
            'nome' => ['Tanjiro Kamado',
                        'Nesuko Kamado'
            ]
        ];

        dd($users);

    }

    public function show($id)
    {
       
        dd('O id do fulaninho descabido:', $id);
    }
}
