<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Facture extends Model
{
    protected $fillable = array('clients_id','user_id','numCni', 'nomCompletExp','villeDestination','nomCompletDest', 'contenuColis','poidsColis', 'poidsSpecial', 'montantTotal','tarif','tarifSpecial','etat', 'dateFacture');
    public static $rules = array(   'client_id'=>'required|integer',
                                    'user_id'=>'required|integer',
                                    'numCni'=>'required|bigInteger',
                                    'nomCompletExp'=>'required|min:5',
                                    'villeDestination'=>'required|min:5',
                                    'nomCompletDest'=>'required|min:5',
                                    'contenuColis'=>'required|min:5',
                                    'poidsColis'=>'required|integer',
                                    'poidsSpecial'=>'required|integer',
                                    'montantTotal'=>'required|bigInteger',
                                    'tarif'=>'required|bigInteger',
                                    'tarifSpecial'=>'required|bigInteger',
                                    'etat'=>'required|min:5',
                                    'date'=>'required|min:3'                                                    
                                );
    public function clients()
    {
        return $this->belongsTo('App\Client');
    }
    public function users()
    {
        return $this->belongsTo('App\User');
    }
}
