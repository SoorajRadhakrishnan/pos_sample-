<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    //method shows product page
    public function index()
    {
        // return view('products.index');
    }
    //method create new product
    public function create()
    {
        return view('products.create');
    }
    //method store new product on db
    public function store()

    {
        // return view('products.index');
    }

    //method show edit product page
    public function edit(){

    }
    //method show update product page
    public function update(){

    }
    //method  delete product
    public function delete(){

    }

}
