<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    //
    protected $table='team';
    protected $fillable=['name_Team','description_Team','id_Collaborative_Process'];
    protected $primary_key='id_Team';


    public function collaborative_process(){
      return $this->belongsTo('App\Collaborative_Process','id_Collaborative_Process',
      'id_Team');
    }

    public function childs(){
        return $this->belongsToMany('App\Child','child_team','id_Team','id_Child')->withTimestamps();
    }


}
