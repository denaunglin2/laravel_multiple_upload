<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Photo;
use App\User;

class WelcomeController extends Controller
{
    public function getWelcome(){
        $users=User::all();
        return view ('welcome')->with(['users'=>$users]);
    }
}
