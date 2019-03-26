<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Institution extends Model
{
    //
    protected $table='institution';
    protected $fillable=['name_Institution','address_Institution',
    'phone_Institution','code_Institution','id_User'];
    protected $primary_key='id_Institution';


    public function childs(){
      return $this->hasMany('App\Child');
    }

    public function user(){
      return $this->belongsTo('App\User', 'id_User');
    }

    public function grades(){
      return $this->hasMany('App\Grade');
    }

    public function collaborative_process(){
      return $this->hasMany('App\Collaborative_Process');
    }
}
