<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Laracasts\Flash\Flash;
use App\Institution;
use App\User;
use App\Grade;

class InstitutionController extends Controller
{
    //

    public function index(Request $request){
      //$user = User::find(auth()->user()->id);
      $user = User::where('id_User',1)->first();

      $institutions= Institution::where('id_User',$user->id_User)->orderBy('id_Institution','ASC')->paginate(8);
      return view('tutor.institucion.listarinstituciones')->with('institutions',$institutions);
    }

    public function store(Request $request){
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

    public function indexg(Request $request){
      //$user = User::find(auth()->user()->id);
      $user = User::where('id_User',1)->first();
      $institutions = Institution::select('name_Institution','id_Institution')
      ->where('id_User',$user->id_User)->pluck('name_Institution','id_Institution');

      return view('tutor.grados.listargrados')->with('institutions',$institutions);
    }

    public function indexgxi(Request $request){
      //$user = User::find(auth()->user()->id);
      $user = User::where('id_User',1)->first();
      $institutions = Institution::select('name_Institution','id_Institution')
      ->where('id_User',$user->id_User)->pluck('name_Institution','id_Institution');


      $grades = Grade::where('id_Institution',$request->id_Institution)->orderBy('id_Grade','ASC')->paginate(8);

      return view('tutor.grados.listargrados')->with('institutions',$institutions)
      ->with('grades', $grades);
    }

    public function createg(Request $request){
      //$user = User::find(auth()->user()->id);
        $user = User::where('id_User',1)->first();

        $institutions = Institution::select('name_Institution','id_Institution')
        ->where('id_User',$user->id_User)->pluck('name_Institution','id_Institution');
        return view('tutor.grados.creargrados')->with('institutions',$institutions);
    }
    public function storeg(Request $request){
      //dd($request);
      $institution = Institution::where('id_Institution',$request->id_Institution)->first();
      $grade = new Grade($request->all());
      $grade->save();
      Flash::success("Se ha agregado la institucion correctamente");
      return redirect()->route('grados');

    }

    public function getGrades(Request $request,$id){
    //dd('hola');
    if ($request->ajax()) {
        $grades = Grade::select('name_Grade','id_Grade')
        ->where('id_Institution',$id)->get();
        //dd($grades);
        return response()->json($grades);
      }
    }



}
