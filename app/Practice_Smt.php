<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Practice_Smt extends Model
{
    //
    protected $table='practice_smt';
    protected $fillable=['name_Practice_Smt','description_Practice_Smt','inputs_Practice_Smt',
    'outputs_Practice_Smt', 'id_Child_Let_Task'];
    protected $primaryKey='id_Practice_Smt';


    public function elements_smt(){
      return $this->hasMany('App\Element_Smt');
    }

    public function child_let_task(){
      return $this->belongsTo('App\Child_Let_Task','id_Child_Let_Task','id_Practice_Smt');
    }
}
