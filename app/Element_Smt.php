<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Element_Smt extends Model
{
    //
    protected $table="element_smt";
    protected $fiallble=['description_Element_Smt', 'id_Practice_Smt'];
    protected $primary_key="id_Element_Smt";

    public function practice_smt(){
      return $this->belongsTo('App\Practice_Smt', 'id_Practice_Smt', 'id_Element_Smt');
    }

}
