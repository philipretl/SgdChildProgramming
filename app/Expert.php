<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Expert extends Model
{
    //

  protected $table='expert';
  protected $fillable=['id_Child','description_Expert'];
  protected $primary_key='id_Expert';
}
