<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Abstraction_Mechanism extends Model
{
    //
    protected $table='abstraction_mechanism';
    protected $fillable=['description_Abstraction_Mechanism','id_Practice'];
    protected $primaryKey='id_Abstraction_Mechanism';

    public function practice(){
      return $this->belongsTo('App\Practice', 'id_Practice', 'id_Abstraction_Mechanism');

    }
}
