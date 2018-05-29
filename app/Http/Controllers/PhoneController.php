<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Phone;
use App\User;


class PhoneController extends Controller
{
    public function getAllPhones() {
        $phones = Phone::orderBy('id', 'DESC')->get();
        return view('phones', ['phones' => $phones]);
    }

    public function userPhones($id) {
    	$user = User::find($id);
        $phones = $user->phones;        
        return view('userphones', ['user' => $user, 'phones' => $phones,]);
    }
}
