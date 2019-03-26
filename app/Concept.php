<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Concept extends Model
{
    //
    public $table='concept';
    public $fillable= ['description_Concept', 'name_Concept',
    'note_Concept','id_Child_Let_Task'];
    public $primaryKey='id_Concept';


    public function concept(){
      return $this->belongsTo('App\Child_Let_Task', 'id_Child_Let_Task',
      'id_Concept');
    }
}
