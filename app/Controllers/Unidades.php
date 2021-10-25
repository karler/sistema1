<?php

namespace App\Controllers;

class Unidades extends BaseController
{
    public function index()
    {
        echo view('plantilla/cabecera');
		echo view('plantilla/tables');
		echo view('plantilla/pie');
    }
}