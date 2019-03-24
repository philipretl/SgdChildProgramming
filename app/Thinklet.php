<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Thinklet extends Model
{
    //
    protected $table='thinklet';
    protected $fillable=['name_Thinklet', 'description_Thinklet', 'inputs_Thinklet',
    'outputs_Thinklet','steps_Thinklet','id_Collaborative_Process'];
    protected $primary_key='id_Thinklet';

    public function collaborative_patterns(){
        return $this->hasMany('App\Collaborative_Patterns');

    }

    public function collaborative_process(){
      return $this->belongsTo('App\Collaborative_Process', 'id_Collaborative_Process');
    }

}
