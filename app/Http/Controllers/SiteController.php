<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function cadastroUsuario(){
        return view('site.cadastrousuario');
    }

    public function index(){
        return view('site.home');
    }

    public function login(){
        return view('site.login');
    }

    public function quemSomos(){
        return view('site.quem_somos');
    }
}
