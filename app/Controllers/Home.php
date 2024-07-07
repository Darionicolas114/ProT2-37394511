<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        echo view('front/headView');
        echo view('front/navbarView');
        echo view('front/principal');
        echo view ('front/footerView');
    }

    public function quienes_somos()
    {
        echo view('front/headView');
        echo view('front/navbarView');
        echo view('front/quienes_somos');
        echo view ('front/footerView');
    }
    public function acerca_de()
    {
        echo view('front/headView');
        echo view('front/navbarView');
        echo view('front/acerca_de');
        echo view ('front/footerView');
    }
    public function registro()
    {
        echo view('front/headView');
        echo view('front/navbarView');
        echo view('front/Registro');
        echo view ('front/footerView');
    }
    public function inicioDeSesion()
    {
        echo view('front/headView');
        echo view('front/navbarView');
        echo view('front/InicioDeSesion');
        echo view ('front/footerView');
    }
}
