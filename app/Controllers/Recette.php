<?php

namespace App\Controllers;

class Recette extends BaseController
{
    public function index()
    { 
        echo view('recette/recette_add'); 
    }

    public function add()
    { 
        echo view('recette/recette_add'); 
    }

    public function all()
    { 
        echo view('recette/recette_all'); 
    }
}
