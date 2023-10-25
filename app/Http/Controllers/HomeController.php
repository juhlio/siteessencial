<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {

        return view('Site.home');
    }


    public function quemSomos()
    {
        return view('Site.quemsomos');
    }

    public function equipe()
    {
        return view('Site.equipe');
    }

    public function frota()
    {
        return view('Site.frota');
    }
}
