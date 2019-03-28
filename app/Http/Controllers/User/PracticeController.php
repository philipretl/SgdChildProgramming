<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Laracasts\Flash\Flash;
use App\Collaborative_Process;
use App\User;
use App\Child_Let_Task;
use App\Practice;
use App\Practice_Smt;
use App\Practice_Gender;


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
      $practices_smt= $child_let_task->practices_smt;
      $practices_gender= $child_let_task->practices_gender;

      //dd($child_let_tasks);

      return view('tutor.practicas.practicas')
      ->with('collaboratives_process',$collaboratives_process)
      ->with('collaborative_process', $collaborative_process)
      ->with('child_let_task',$child_let_task)
      ->with('child_let_tasks',$child_let_tasks)
      ->with('practices', $practices)
      ->with('practices_smt', $practices_smt)
      ->with('practices_gender', $practices_gender);
    }

    public function storep(Request $request){
      //dd($request);
      $practice = new Practice($request->all());
      if ($practice->id_Child_Let_Task!=null) {
        $practice->save();

        Flash::success("Se creo la practica correctamente");
        return redirect()->route('practicas');

      }else {
        Flash::error("No se pudo agregar la practica revise los datos");
        return redirect()->back()->withInput();
      }

    }

    public function storepsmt(Request $request){
      //dd($request);
      $practice_smt = new Practice_Smt($request->all());
      //dd($practice_smt);
      if ($practice_smt->id_Child_Let_Task!=null) {
        $practice_smt->save();

        Flash::success("Se creo la practica correctamente");
        return redirect()->route('practicas');

      }else {
        Flash::error("No se pudo agregar la practica revise los datos");
        return redirect()->back()->withInput();
      }

    }

    public function storepgen(Request $request){
      //dd($request);
      $practice_gender = new Practice_Gender($request->all());
      if ($practice_gender->id_Child_Let_Task!=null) {
        $practice_gender->save();

        Flash::success("Se creo la practica correctamente");
        return redirect()->route('practicas');

      }else {
        Flash::error("No se pudo agregar la practica revise los datos");
        return redirect()->back()->withInput();
      }

    }




}
