<?php

namespace App\Controllers;

class Recette extends BaseController
{
    public function index()
    {
        echo view('header');
        echo view('recette_add');
        echo view('footer');
    }

    public function add()
    {
        echo view('header');
        echo view('recette_add');
        echo view('footer');
    }

    public function all()
    {
        echo view('header');
        echo view('recette_all');
        echo view('footer');
    }
}
