<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function getIndex() {
        return view ('pages/welcome');
    }

    public function getLogin() {
        return view ('pages/login');
    }

    public function getHome() {
        return view ('pages/home');
    }

}
