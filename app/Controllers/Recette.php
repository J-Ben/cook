<?php

namespace App\Controllers;

class Recette extends BaseController
{
    public function index($page_title=null,$nom_reseau=null)
    { 
        echo view('recette_add'); 
    }

    public function add()
    { 
        echo view('recette_add'); 
    }

    public function all()
    { 
        echo view('recette_all'); 
    }
}
