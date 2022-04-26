<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Client;
use Illuminate\Support\Facades\Auth;

class ClientController extends Controller
{
    public function add(){
        return view("client.add");
    }
    public function getAll(){
        return view("client.list");
    }
    public function edit($id){
        return view("client.edit");
    }
    public function update(){
        return $this->getAll();
    }
    public function delete($id){
        return $this->getAll();
    }
    public function persist(Request $request)
    {
        $client = new Client();
        $client->nom = $request->nom;
        $client->prenom = $request->prenom;
        $client->adresse = $request->adresse;
        $client->telephone = $request->telephone;
        $client->vers = $request->vers;

        //$result = $client->save();//1 ou 0

        return $this->add();
    }
}
