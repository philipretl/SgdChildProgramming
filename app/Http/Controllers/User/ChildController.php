<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Child;
use App\Institution;
use App\User;


class ChildController extends Controller
{
    //
    public function index(Request $request){
      $childs= Child::orderBy('id_Child','ASC')->paginate(8);
      return view('tutor.estudiantes.listarestudiantes')->with('childs',$childs);
    }

    public function create(){
      //$user = User::find(auth()->user()->id);
        $user = User::where('id_User',1)->first();

        $institutions = Institution::where('id_User',$user->id_User)->get();
        //dd($institutions);
        return view('tutor.estudiantes.crearestudiantes')->with('institutions',$institutions);
    }



}
