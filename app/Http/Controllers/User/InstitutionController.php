<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Laracasts\Flash\Flash;
use App\Institution;
use App\User;

class InstitutionController extends Controller
{
    //

    public function index(Request $request){
      $institutions= Institution::orderBy('id_Institution','ASC')->paginate(8);
      return view('tutor.institucion.listarinstituciones')->with('institutions',$institutions);
    }

    public function create(Request $request){
      //$user = User::find(auth()->user()->id);
        $user = User::where('id_User',1)->first();
        $institution = new Institution($request->all());
        //dd($request);

        $institution->user()->associate($user->id_User);

        $institution->save();
        Flash::success("Se ha agregado la institucion correctamente");
        return redirect()->route('instituciones');
        //dd($user);
    }

    public function edit($id){
        $institution = Institution::find($id);
        //dd($institution);
        return view('tutor.institucion.editarinstituciones')->with('institution',$institution);
    }

    public function update(Request $request,$id){
        $institution = Institution::find($id);
        $institution->fill($request->all());
        $institution->save();
        Flash::info("Se ha editado la institucion correctamente");
        return redirect()->route('instituciones');

    }

    public function delete(Request $request){
      $institution = Institution::where('id_Institution',$request->id_Institution)->first();
      //dd($institution);
      $institution->delete();
      Flash::error("Se ha eliminado la institucion correctamente");
      return redirect()->route('instituciones');
    }


}
