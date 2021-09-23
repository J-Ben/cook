<?php

namespace App\Controllers;

class Recette extends BaseController
{
    public function index()
    {
        echo view('header');
        echo view('recette');
        echo view('footer');
    }
}
