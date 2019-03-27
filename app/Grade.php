<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Grade extends Model
{
    //
    protected $table='grade';
    protected $fillable=['name_Grade', 'id_Institution'];
    protected $primaryKey='id_Grade';

    public function childs(){
      return $this->hasMany('App\Child','id_Grade');
    }
    public function institution(){
      return $this->belongsTo('App\Institution', 'id_Institution');
    }
}
