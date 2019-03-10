<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Child_Let_Task extends Model
{
    //
    protected $table='child_let_task';
    protected $fillable=['id_Child_Let_Task', 'name_Child_Let_Task',
    'descriptio_Child_Let_Task', 'input_Child_Let_Task','id_Collaborative_Process',
    'output_Child_Let_Task,'];
    protected $primary_key='id_Child_Let_Task';

    public function colaborative_process(){
        return $this->belongsTo('App\Collaborative_Process',
        'id_Collaborative_Process','id_Child_Let_Task');

    }
}
