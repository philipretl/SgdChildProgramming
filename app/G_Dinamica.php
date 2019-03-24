<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class G_Dinamica extends Model
{
    //
    protected $table='g_dinamica';
    protected $fillable=['name_G_Dinamica','description_G_Dinamica',
    'utility_G_Dinamica', 'target_G_Dinamica', 'id_Strategy_Gamification'];

    protected $primary_key='id_G_Dinamica';

    public function strategy_gamification(){
      return $this->belongsTo('App\Strategy_Gamification','id_Strategy_Gamification',
      'id_G_Dinamica');
    }

    public function g_mecanicas(){
      return $this->hasMany('App\G_Mecanica');
    }

}
