<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dimension extends Model
{
    //
    protected $table='dimension';
    protected $fillable=['id_Dimension', 'description_Dimension',
    'concept_Gender_Dimension', 'id_Child_Let_Task'];
    protected $primary_key='id_Dimension';

    public function child_let_task(){
      return $this->belongsTo('App\Child_Let_Task', 'id_Child_Let_Task',
      'id_Dimension');

    }

}
