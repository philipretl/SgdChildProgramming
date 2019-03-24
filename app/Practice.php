<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Practice extends Model
{
    //
    protected $table="practice";
    protected $fillable=["name_Practice","description_Practice","inputs_Practice",
    "outputs_Practice","id_Child_Let_Task"];
    protected $primary_key="id_Practice";
}
