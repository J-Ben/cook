<?php

namespace App\Controllers;

class Ingredient extends BaseController
{
    public function index()
    {
        echo view('header');
        echo view('ingredient_add');
        echo view('footer');
    }

    public function add()
    {
        echo view('header');
        echo view('ingredient_add');
        echo view('footer');
    }

    public function all()
    {
        echo view('header');
        echo view('ingredient_all');
        echo view('footer');
    }
}
