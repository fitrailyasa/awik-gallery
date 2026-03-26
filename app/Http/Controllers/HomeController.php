<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('client.index');
    }

    public function makeup()
    {
        return view('client.makeup');
    }

    public function box()
    {
        return view('client.box');
    }

    public function attire()
    {
        return view('client.attire');
    }

    public function farm()
    {
        return view('client.farm');
    }

    public function link()
    {
        return view('client.link');
    }

    public function contact()
    {
        return view('client.contact');
    }
}
