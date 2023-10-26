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

    public function timeline()
    {
        return view('Site.timeline');
    }


    public function venda()
    {
        return view('Site.venda');
    }

    public function locacao()
    {
        return view('Site.locacao');
    }
    public function manutencao()
    {
        return view('Site.manutencao');
    }
}
