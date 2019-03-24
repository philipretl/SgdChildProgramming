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
}
