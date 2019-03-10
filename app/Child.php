<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Child extends Model
{
    //
    protected $table='child';
    protected $fillable=['id_Child', 'name_Child', 'grade_Child', 'age_Child',
    'id_Institution', 'id_Team'];
    protected $primary_key='id_Child';

    public function institution(){
      return $this->belongsTo('App\Institution', 'id_Institution', 'id_Child');
    }

    public function team(){
      return $this->belongsTo('App\Team', 'id_Team', 'id_Child');
    }
}
