<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Collaborative_Process extends Model
{
    //
    protected $table='collaborative_process';
    protected $fillable=['id_Collaborative_Process', 'name_Collaborative_Process',
    'goal_Collaborative_Process', 'id_User'];
    protected $primary_key='id_Collaborative_Process';

    public function user(){
      return $this->belongsTo('App\User', 'id_User', 'id_Collaborative_Process');
    }

    public function child_let_task(){
      return $this->hasMany('App\Child_Let_Task','id_Collaborative_Process');
    }

    public function facilitator(){
      return $this->hasMany('App\Facilitator');
    }

    public function team(){
      return $this->hasOne('App\Team');
    }

    public function g_mentor_task(){
      return $this->hasMany('App\G_Mentor_Task');
    }

    


}
