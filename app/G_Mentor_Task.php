<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class G_Mentor_Task extends Model
{
    //
    protected $table='g_mentor_task';
    protected $fillable=['name_G_Mentor_Task','description_G_Mentor_Task',
    'target_G_Mentor_Task','inputs_G_Mentor_Task','outputs_G_Mentor_Task',
    'id_Collaborative_Process'];
    protected $primaryKey='id_G_Mentor_Task';

    public function collaborative_process(){
      return $this->belongsTo('App\Collaborative_Process','id_Collaborative_Process',
      'id_G_Mentor_Task');
    }

    public function strategy_gamification(){
      return $this->hasMany('App\Stategy_Gamification');
    }


}
