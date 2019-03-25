<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Collaborative_Process;

class FlavorController extends Controller
{
    //

    public function index(Request $request){

      $collaborative_Process = Collaborative_Process::orderBy('id_Collaborative_Process','ASC')->paginate(8);
      return view('tutor.practicas')->with('collaborative_Process',$collaborative_Process);


    }
}
