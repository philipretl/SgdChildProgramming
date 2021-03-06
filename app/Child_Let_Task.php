<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Child_Let_Task extends Model
{
    //
    protected $table='child_let_task';
    protected $fillable=['name_Child_Let_Task','description_Child_Let_Task',
     'input_Child_Let_Task','id_Collaborative_Process', 'output_Child_Let_Task'];
    protected $primaryKey='id_Child_Let_Task';

    public function colaborative_process(){
        return $this->belongsTo('App\Collaborative_Process',
        'id_Collaborative_Process','id_Child_Let_Task');

    }

    public function dimensions(){
      return $this->hasMany('App\Dimension');
    }

    public function concepts(){
      return $this->hasMany('App\Concept');
    }

    public function practices_gender(){
      return $this->hasMany('App\Practice_Gender','id_Child_Let_Task');
    }

    public function practices(){
      return $this->hasMany('App\Practice','id_Child_Let_Task');
    }

    public function practices_smt(){
      return $this->hasMany('App\Practice_Smt','id_Child_Let_Task');
    }

    public function roles(){
      return $this->hasMany('App\Role');
    }

}
