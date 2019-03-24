<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Practice extends Model
{
    //
    protected $table='practice';
    protected $fillable=['name_Practice','description_Practice','inputs_Practice',
    'outputs_Practice','id_Child_Let_Task'];
    protected $primary_key='id_Practice';

    public function child_let_task(){
      return $this->belongsTo('App\Child_Let_Task','id_Child_Let_Task','id_practice');
    }

    public function abstraction_mechanisn(){
      return $this->hasMany('App\Abstraction_Mechanism');
    }

    public function role(){
      return $this->hasMany('App\Role');
    }
}
