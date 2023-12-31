<?php

namespace App\Http\Controllers;


class AdminController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function dashboard(){
        return view('pages.admin.dashboard');
    }

    public function user(){
        return view('pages.admin.user');
    }

}
