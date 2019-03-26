<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Practice_Gender extends Model
{
    //
    protected $table='practice_gender';
    protected $fillable=['name_Practice_Gender','description_Practice_Gender',
    'inputs_Practice_Gender','outputs_Practice_Gender', 'orientation_Practice_Gender',
    'indicators_Problem_Practice_Gender','id_Child_Let_Task'];
    protected $primaryKey='id_Practice_Gender';

  public function dimension_gender(){
    return $this->hasOne('App,Dimendion_Gender');

  }

  public function child_Let_Task(){
    return $this->belongsTo('App\Child_Let_Task', 'id_Child_Let_Task',
    'id_Practice_Gender');
  }

  



}
