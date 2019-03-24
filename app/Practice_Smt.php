<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Practice_Smt extends Model
{
    //
    protected $table='practice_smt';
    protected $fillable=['description_Practice_Smt','inputs_Practice_Smt',
    'outputs_Practice_Smt', 'id_Child_Let_Task'];
    protected $primary_key='id_Practice_Smt';


    public function elements_smt(){
      return $this->hasMany('App\Element_Smt');
    }
}
