<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Child extends Model
{
    //
    protected $table='child';
    protected $fillable=['name_Child','age_Child',
    'student_Code_Child', 'id_Institution','id_Grade'];
    protected $primaryKey='id_Child';

    public function institution(){
      return $this->belongsTo('App\Institution', 'id_Institution');
    }

    public function team(){
      return $this->belongsToMany('App\Team','child_team','id_Team','id_Child');
    }

    public function expert(){
      return $this->hasOne('App\Expert');
    }

    public function g_jugador(){
      return $this->hasOne('App\G_Jugador');
    }

    public function grade(){
      return $this->belongsTo('App\Grade', 'id_Grade');
    }
}
