<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Laracasts\Flash\Flash;
use App\Institution;
use App\Collaborative_Process;
use App\User;
use App\Child_Let_Task;

class ChildLetTaskController extends Controller
{

    public function index(){
      //$user = User::find(auth()->user()->id);
      $user = User::where('id_User',1)->first();

      $collaboratives_process = Collaborative_Process::select('name_Collaborative_Process','id_Collaborative_Process')
      ->where('id_User',$user->id_User)->pluck('name_Collaborative_Process','id_Collaborative_Process');

      return view('tutor.actividades.actividades')
      ->with('collaboratives_process',$collaboratives_process);
    }

    public function indexmetod(Request $request){
      //$user = User::find(auth()->user()->id);
      $user = User::where('id_User',1)->first();

      $collaboratives_process = Collaborative_Process::select('name_Collaborative_Process','id_Collaborative_Process')
      ->where('id_User',$user->id_User)->pluck('name_Collaborative_Process','id_Collaborative_Process');

      $collaborative_process= Collaborative_Process::find($request->id_Collaborative_Process);

      //dd($collaborative_process->child_let_task);
      return view('tutor.actividades.actividades')
      ->with('collaborative_process',$collaborative_process)
      ->with('collaboratives_process',$collaboratives_process);
    }

    public function create(){
      //$user = User::find(auth()->user()->id);
      $user = User::where('id_User',1)->first();

      $collaboratives_process = Collaborative_Process::select('name_Collaborative_Process','id_Collaborative_Process')
      ->where('id_User',$user->id_User)->pluck('name_Collaborative_Process','id_Collaborative_Process');

      return view('tutor.actividades.crearactividad')
      ->with('collaboratives_process',$collaboratives_process);

    }

    public function store(Request $request){
      //dd($request);
      $child_let_task = new Child_Let_Task($request->all());
      $child_let_task->save();
      Flash::success("Se ha creado la actividad correctamente");
      return redirect()->route('actividades');
    }

    public function getActividades(Request $request,$id){
    //dd($id);
    if ($request->ajax()) {
        $child_let_tasks =Child_Let_Task::select('name_Child_Let_Task','id_Child_Let_Task')
        ->where('id_Collaborative_Process',$id)->get();
        //dd($grades);
        return response()->json($child_let_tasks);
      }
    }


}
