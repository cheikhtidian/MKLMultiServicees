<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $fillable = array('nom', 'prenom', 'adresse','telephone','Vers');
    public static $rules = array('nom'=>'required|min:2',
                                    'prenom'=>'required|min:3',
                                    'adresse'=>'required|min:15',
                                    'telephone'=>'required|min:9',
                                    'vers'=>'required|min:25',
                                );
                                
    public function factures()
    {
        return $this->hasMany( 'App\Facture');
    }
}
