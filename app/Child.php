<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Child extends Model
{
    //
    protected $table='child';
    protected $fillable=['name_Child','age_Child', 'id_Institution','id_Grade'];
    protected $primary_key='id_Child';

    public function institution(){
      return $this->belongsTo('App\Institution', 'id_Institution', 'id_Child');
    }

    public function team(){
      return $this->belongsToMany('App\Team','child_team');
    }

    public function expert(){
      return $this->hasOne('App\Expert');
    }

    public function g_jugador(){
      return $this->hasOne('App\G_Jugador');
    }

    public function grade(){
      return $this->belongsTo('App\Grade', 'id_Grade', 'id_Child');
    }
}
