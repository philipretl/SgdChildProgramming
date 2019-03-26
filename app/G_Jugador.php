<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class G_Jugador extends Model
{
    //
    protected $table='g_jugador';
    protected $fillable=['type_G_Jugador', 'id_Child', 'id_Strategy_Gamification',
    'description_G_Jugador'];
    protected $primaryKey='id_G_Jugador';

    public function child(){
      return $this->belongsTo('App\Child', 'id_Child', 'id_G_Jugador');
    }

    public function strategy_gamification(){
      return $this->belongsTo('App\Strategy_Gamification', 'id_Strategy_Gamification',
      'id_G_Jugador');
    }
}
