<?php

namespace App\Http\Controllers;


use App\Kebab;

class KebabController extends Controller
{
    public function index(){
        $kebabs = Kebab::latest() -> get();
    }
}
