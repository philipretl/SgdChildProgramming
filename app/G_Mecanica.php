<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class G_Mecanica extends Model
{
    //
    protected $table='g_mecanica';
    protected $fillable=['name_G_Mecanica', 'description_G_Mecanica',
    'utility_G_Mecanica', 'target_G_Mecanica', 'id_G_Dinamica'];
    protected $primaryKey='id_G_Mecanica';

    public function g_dinamica(){
      return $this->belongsTo('App\G_Dinamica', 'id_G_Dinamica', 'id_G_Mecanica'); 
    }

}
