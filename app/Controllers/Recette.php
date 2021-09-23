<?php

namespace App\Controllers;


use App\Models\RecetteModel;

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

    public function mk()
    { 
        $db = db_connect();
        $requete = $db->query("SELECT * FROM Recette");
        var_dump($requete);
        die("ici");
               /* foreach ($query->result() as $resultat)
                {
                        echo "ID : " . $resultat->id  . " Nom : "  . $resultat->libelle_recette . "<br />";
                }
                */ 
    }

    public function bmk()
    {
        $recette = new RecetteModel();
        $data[] = $recette->findAll();

        echo view('recette/recette_all', $data);

    }
}
