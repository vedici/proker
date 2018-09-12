<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except([]);
    }

    public function feed()
    {
        return view('pages.feed2');
    }

    public function message()
    {
        return "Message";
    }
}
