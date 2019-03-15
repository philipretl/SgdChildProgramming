<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Abstraction_Mechanism extends Model
{
    //
    protected $table='abstraction_mechanism';
    protected $fillable=['id_Abstraction_Mechanism', 'description_Abstraction_Mechanism',
    'id_Practice'];
    protected $primary_key='id_Abstraction_Mechanism';

    public function practice(){
      return $this->belongsTo('App\Practice', 'id_Practice', 'id_Abstraction_Mechanism');

    }
}