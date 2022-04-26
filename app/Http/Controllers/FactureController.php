<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FactureController extends Controller
{
    public function add(){
        return view("facture.add");
    }
    public function getAll(){
        return view("facture.list");
    }
    public function edit($id){
        return view("facture.edit");
    }
    public function update(){
        return $this->getAll();
    }
    public function delete($id){
        return $this->getAll();
    }
}
