<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Grade extends Model
{
    //
    protected $table='grade';
    protected $fillable=['name_Grade', 'id_Instution'];
    protected $primaryKey='id_Grade';

    public function childs(){
      return $this->hasMany('App\Child');
    }
    public function institution(){
      return $this->belongsTo('App\Instution', 'id_Institution', 'id_Grade');
    }
}
