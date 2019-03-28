<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Collaborative_Process;
use Laracasts\Flash\Flash;
use App\Institution;
use App\User;
use App\Grade;
use App\Child;
use App\Team;
use App\Facilitator;


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

    public function store_Collaborative_Process(Request $request){
      //$user = User::find(auth()->user()->id);
      $user = User::where('id_User',1)->first();
      $cb = new Collaborative_Process($request->all());
      $cb->user()->associate($user->id_User);
      //$grade = Grade::find($request->id_Grade);
      //dd($grade);

      $cb->save();

      $faci = new Facilitator($request->all());
      $faci->id_Collaborative_Process = $cb->id_Collaborative_Process;
      //dd($faci);
      $faci->save();
      $childs=Child::where('id_Grade',$request->id_Grade)->get();
      //dd($childs);
      Flash::success("Metodologia creada correctamente");
      return view('tutor.metodologias.paso2')->with('childs', $childs)
      ->with('collaborative_Process',$cb);


    }

    public function store_Team(Request $request){
      //dd($request);
      $team = new Team($request->all());

      $team->save();
      if ($request->childs!=null) {

        foreach ($request->childs as $child) {

          $childf = Child::find($child);

          $team->childs()->attach($childf);
        }
      }
      Flash::success("Se ha agregado el Equipo correctamente");
      return redirect()->route('metodologias');
    }


}
