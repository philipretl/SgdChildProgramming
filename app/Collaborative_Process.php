<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Collaborative_Process extends Model
{
    //
    protected $table='collaborative_process';
    protected $fillable=['name_Collaborative_Process',
    'goal_Collaborative_Process', 'id_User', 'id_Institution'];
    protected $primaryKey='id_Collaborative_Process';

    public function user(){
      return $this->belongsTo('App\User', 'id_User', 'id_Collaborative_Process');
    }

    public function child_let_tasks(){
      return $this->hasMany('App\Child_Let_Task');
    }

    public function facilitators(){
      return $this->hasMany('App\Facilitator');
    }

    public function team(){
      return $this->hasOne('App\Team');
    }

    public function g_mentor_tasks(){
      return $this->hasMany('App\G_Mentor_Task');
    }

    public function thinklets(){
      return $this->hasMany('App\Thinklet');
    }

    public function institution(){
      return $this->belongsTo('App\Institution', 'id_Institution',
      'id_Collaborative_Process');
    }


}
