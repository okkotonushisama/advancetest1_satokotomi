<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function confirm(Request $request)
    {
        $contact = $request->only(['lastname', 'gender', 'email', 'postcode', 'address', 'building_name', 'option']);
        return view('confirm', compact('contact'));
    }
}
