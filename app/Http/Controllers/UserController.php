<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function index()
    {
        $users = DB::table('users')
        ->select('users.id', 'users.name')
        // ->where()
        // ->orderBy()
        // ->limit()
        // ->offset()
        ->get();

        foreach($users as $user) {
            echo "#{$user->id} - Nome: {$user->name}<br>";
        }
    }
}
