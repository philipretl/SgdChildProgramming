<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Collaborative_Patterns extends Model
{
    //
    private $table='collaborative_patterns';
    private $fillable=['id_Collaborative_Patterns', 'name_Collaborative_Patterns',
    'description_Collaborative_Patterns', 'description_Collaborative_Patterns',
    'id_Thinklet'];
    private $primary_key='id_Collaborative_Patterns';

    public function thinklet(){
      return $this->belongsTo('App\Thinklet', 'id_Thinklet', 'id_Collaborative_Patterns');
    }
}
