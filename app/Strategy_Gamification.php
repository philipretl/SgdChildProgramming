<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Strategy_Gamification extends Model
{
    //
    protected $table='strategy_gamification';
    protected $fillable=['name_Strategy_Gamification', 'description_Strategy_Gamitification',
    'target_Strategy_Gamification', 'id_G_Mentor_Task'];
    protected $primary_key='id_Strategy_Gamification';

    public function g_mentor_task(){
      return $this->belongsTo('App\G_Mentor_Task', 'id_G_Mentor_Task',
      'id_Strategy_Gamification');
    }

    public function g_jugadores(){
      return $this->hasMany('App\G_Jugador');
    }

    public function g_dinamicas(){
      return $this->hasMany('App\G_Dinamica');
    }
}
