<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Concept extends Model
{
    //
    public $table='concept';
    public $fillable= ['id_Concept', 'description_Concept', 'name_Concept',
    'note_Concept','id_Child_Let_Task'];
    public $primary_key='id_Concept';


    public function concept(){
      return $this->belongsTo('App\Child_Let_Task', 'id_Child_Let_Task',
      'id_Concept');
    }
}