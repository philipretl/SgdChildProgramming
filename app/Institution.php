<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Institution extends Model
{
    //
    protected $table="institution";
    protected $fillable=["id_Institution","name_Institution","address_Institution",
    "phone_Institution","code_Institution"];
    protected $primary_key="";


    public function childs(){
      return $this->hasMany('App\Child');
    }

    public function users(){
      return $this->hasMany('App\User');
    }
}
