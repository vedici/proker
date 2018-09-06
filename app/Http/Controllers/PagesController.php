<?php

namespace App\Http\Controllers;

class PagesController extends Controller {

    public function getIndex() {
        return view('pages/welcome');
    }

    public function getAbout() {
        $fullname = array(
            'first'  => 'Naufal',
            'last' => 'Muntaaza'
        );
        return view('pages/about')->with('name', $fullname);
    }

    public function getContact() {
        return view('pages/contact');
    }

    public function getHome() {
        return view('pages/home');
    }

    public function getMessage() {
      return view('pages/message');
    }
}

?>
