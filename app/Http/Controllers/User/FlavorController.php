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
use Illuminate\Support\Facades\DB;


class FlavorController extends Controller
{
    //

    public function index(Request $request){
      //$user = User::find(auth()->user()->id);
      $user = User::where('id_User',1)->first();

      $collaboratives_process = Collaborative_Process::select('name_Collaborative_Process','id_Collaborative_Process')
      ->where('id_User',$user->id_User)->pluck('name_Collaborative_Process','id_Collaborative_Process');


      //$team = Team::where('id_Team',1)->first();
      //dd($team);

      return view('tutor.metodologias.metodologias')->with('collaboratives_process',$collaboratives_process);
    }

    public function indexmet(Request $request){
      //$user = User::find(auth()->user()->id);
      $user = User::where('id_User',1)->first();

      $c_b = Collaborative_Process::where('id_Collaborative_Process',
      $request->id_Collaborative_Process)->first();

      $collaboratives_process = Collaborative_Process::select('name_Collaborative_Process','id_Collaborative_Process')
      ->where('id_User',$user->id_User)->pluck('name_Collaborative_Process','id_Collaborative_Process');

      $team= DB::table('child')->join('child_team','child.id_Child','=', 'child_team.id_Child')
      ->where('id_Team',$c_b->team->id_Team)->get();

      //dd($team);
      //dd($c_b);
      return view('tutor.metodologias.metodologias')
      ->with('collaboratives_process',$collaboratives_process)
      ->with('c_b',$c_b)->with('team',$team);
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
          //dd($childf);
          $team->childs()->attach($childf);
        }
      }
      Flash::success("Se ha agregado el Equipo correctamente");
      return redirect()->route('metodologias');
    }

    public function delete(Request $request){
      //dd($request);
      $c_b = Collaborative_Process::where('id_Collaborative_Process',$request->id_Collaborative_Process)->first();
      //dd($institution);
      if ($c_b != null) {
        $c_b->delete();
      }
      Flash::error("Se ha eliminado el Sabor correctamente");
      return redirect()->route('metodologias');
    }



}
