<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Laracasts\Flash\Flash;
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
        $institutions = Institution::select('name_Institution','id_Institution')
        ->where('id_User',$user->id_User)->pluck('name_Institution','id_Institution');

        //dd($institutions);
        return view('tutor.estudiantes.crearestudiantes')->with('institutions',$institutions);
    }

    public function store(Request $request){
      //dd($request);
      $child = new Child($request->all());
      //dd($child);
      $child->save();
      Flash::success("Se ha agregador el estudiante correctamente");
      return redirect()->route('estudiantes');
    }


}
