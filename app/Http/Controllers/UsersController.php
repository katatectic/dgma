<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function getAllUsers() {
    	$c = 1;
    	$d = $c + 5;
    	return view('hello', ['d' => $d]);
    }
}
