<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Laracasts\Flash\Flash;
use App\Collaborative_Process;
use App\User;
use App\Child_Let_Task;
use App\Practice;


class PracticeController extends Controller
{
    //
    public function index(){
      //$user = User::find(auth()->user()->id);
      $user = User::where('id_User',1)->first();

      $collaboratives_process = Collaborative_Process::select('name_Collaborative_Process','id_Collaborative_Process')
      ->where('id_User',$user->id_User)->pluck('name_Collaborative_Process','id_Collaborative_Process');

      return view('tutor.practicas.practicas')
      ->with('collaboratives_process',$collaboratives_process);
    }

    public function create(){
      //$user = User::find(auth()->user()->id);
      $user = User::where('id_User',1)->first();

      $collaboratives_process = Collaborative_Process::select('name_Collaborative_Process','id_Collaborative_Process')
      ->where('id_User',$user->id_User)->pluck('name_Collaborative_Process','id_Collaborative_Process');

      return view('tutor.practicas.crearpractica')
      ->with('collaboratives_process',$collaboratives_process);
    }

    public function indexAct(Request $request){

      //$user = User::find(auth()->user()->id);
      $user = User::where('id_User',1)->first();

      $collaboratives_process = Collaborative_Process::select('name_Collaborative_Process','id_Collaborative_Process')
      ->where('id_User',$user->id_User)->pluck('name_Collaborative_Process','id_Collaborative_Process');
      $collaborative_process = Collaborative_Process::find($request->id_Collaborative_Process);

      $child_let_tasks =Child_Let_Task::select('name_Child_Let_Task','id_Child_Let_Task')
      ->where('id_Collaborative_Process',$collaborative_process->id_Collaborative_Process)
      ->pluck('name_Child_Let_Task','id_Child_Let_Task');
      $child_let_task = Child_Let_Task::find($request->id_Child_Let_Task);

      $practices= $child_let_task->practices;

      //dd($child_let_tasks);

      return view('tutor.practicas.practicas')
      ->with('collaboratives_process',$collaboratives_process)
      ->with('collaborative_process', $collaborative_process)
      ->with('child_let_task',$child_let_task)
      ->with('child_let_tasks',$child_let_tasks)
      ->with('practices', $practices);
    }




}
