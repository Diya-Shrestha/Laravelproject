<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function create() {
        return view('form');
    }
    public function form(Request $request)
    {
        $first = $request->first;
        $second = $request->second;
        $address = $request->address;
        $contact =$request->contact;
        $email = $request->email;

        return view('example', compact('first', 'second','address','contact','email'));
    }

    //
}
