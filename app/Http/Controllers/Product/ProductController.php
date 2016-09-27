<?php

namespace App\Http\Controllers\Product;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    public function index(){
        return view('index');
    }
    public function create(){

    }
    public function store(){

    }
    public function update(){

    }
    public function js(){
        return view('script');
    }
    public function js2(){
        return view('programjs');
    }
    public function jss(){
        return view ('jsss');
    }
}
