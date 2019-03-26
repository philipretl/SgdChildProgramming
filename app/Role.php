<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    //
    protected $table='role';
    protected $fillable=['name_Role','description_Role', 'type_Role','
    id_Child_Let_Task'];
    protected $primaryKey='id_Role';

    public function child_let_task(){
      return $this->belongsTo('App\Child_Let_Task','id_Child_Let_Task',
      'id_Role');
    }
}
