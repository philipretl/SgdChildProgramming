<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Collaborative_Process;
use Laracasts\Flash\Flash;
use App\Institution;
use App\User;

class FlavorController extends Controller
{
    //

    public function index(Request $request){
      //$user = User::find(auth()->user()->id);
      $user = User::where('id_User',1)->first();

      $collaborative_Process = Collaborative_Process::where('id_User',$user->id_User)
      ->orderBy('id_Collaborative_Process','ASC')->paginate(8);
      return view('tutor.metodologias.metodologias')->with('collaborative_Process',$collaborative_Process);
    }

    public function createp1(Request $request){
      //$user = User::find(auth()->user()->id);
      $user = User::where('id_User',1)->first();

      $institutions = Institution::select('name_Institution','id_Institution')
      ->where('id_User',$user->id_User)->pluck('name_Institution','id_Institution');

      return view('tutor.metodologias.paso1')->with('institutions', $institutions);
    }
}
