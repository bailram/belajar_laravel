<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// pembuatan controller melalui terminal dengan mengetikkan php artisan make:controller DosenController

class DosenController extends Controller 
{
    public function index(){
        return "Halo ini adalah method index, dalam controller DosenController";
    }

}
