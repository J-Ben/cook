<?php

namespace App\Controllers;

class Ingredient extends BaseController
{
    public function index($page_title=null,$content_title=null)
    { 
        $data = [
			'page_title' => $page_title,
			'content_title' => $content_title
		];
        echo view('ingredient_add', $data); 
    }

    public function add($page_title=null,$content_title=null)
    { 
        $data = [
			'page_title' => $page_title,
			'content_title' => $content_title
		];
        echo view('ingredient_add', $data); 
    }

    public function all($page_title=null,$content_title=null)
    { 
        $data = [
			'page_title' => $page_title,
			'content_title' => $content_title
		];
        echo view('ingredient_all', $data);  
    }
}
