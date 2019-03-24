<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dimension_Gender extends Model
{
    //
    protected $table='dimension_gender';
    protected $fillable=['description_Dimension_Gender', 'concept_Dimension_Gender',
    'id_Child_Let_Task','id_Practice_Gender'];
    protected $primary_key='id_Dimension_Gender';

    public function child_let_task(){
      return $this->belongsTo('App\Child_Let_Task', 'id_Child_Let_Task',
      'id_Dimension_Gender');

    }

    public function practice_gender(){
      return $this->belongsTo('App\Practice_Gender','id_Practice_Gender',
      'id_Dimension_Gender');
    }



}
