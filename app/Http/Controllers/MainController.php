<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function home() {

        $data = [
            "nome" => "Gianluca"
        ];

        return view("pages.home" , $data);
    }
}
