<?php

namespace App\Controllers;

class Ingredient extends BaseController
{
    public function index()
    { 
        echo view('ingredient/ingredient_add'); 
    }

    public function add()
    { 
        echo view('ingredient/ingredient_add'); 
    }

    public function all()
    { 
        echo view('ingredient/ingredient_all'); 
    }

    
}
