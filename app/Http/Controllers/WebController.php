<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebController extends Controller
{
    public function home()
    {
    	return view('welcome');
    }

    public function ktp()
    {
    	return view('ktp');
    }
    public function syarat()
    {
        return view('syarat');
    }

public function syaratkk()
    {
        return view('syaratkk');
    }

    public function contact()
    {
    	return view('contact');
    }
}
