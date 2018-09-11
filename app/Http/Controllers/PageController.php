<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    function __construct()
    {
        $this->middleware('auth')->except([]);
    }

    public function feed()
    {
        return view('pages.home');
    }

    public function message()
    {
        return view('pages.message');
    }
}
