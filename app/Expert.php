<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Expert extends Model
{
    //

  protected $table='expert';
  protected $fillable=['id_Child','description_Expert'];
  protected $primaryKey='id_Expert';

  public function child(){
    return $this->belongsTo('App\Child','id_Child', 'id_Expert');
  }
}
