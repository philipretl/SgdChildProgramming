<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    //
    protected $table='team';
    protected $fillable=['name_Team','description_Team','id_Collaborative_Process'];
    protected $primary_key='id_Team';
}
