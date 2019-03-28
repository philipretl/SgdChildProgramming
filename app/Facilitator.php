<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Facilitator extends Model
{
    //
    protected $table='facilitator';
    protected $fillable=['description_Facilitator', 'name_Facilitator',
    'id_Collaborative_Process'];
    protected $primaryKey='id_Facilitator';

    public function collaborative_process(){
      return $this->belongsTo('App\Collaborative_Process', 'id_Collaborative_Process',
      'id_Facilitator');
    }

}
