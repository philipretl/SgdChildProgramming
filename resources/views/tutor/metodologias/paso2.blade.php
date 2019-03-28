@extends('tutor.plantilla')

@section('subtittle')
  <div class="title_left">
    <h3>Metodologias</h3>
  </div>
@endsection

@section('content')

  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>Crear Metodologia: paso 2</h3>
      </div>
    </div>

    <div class="clearfix"></div>

    <div class="row">

      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <h2>Datos del equipo para el proceso collaborativo: {{$collaborative_Process->name_Collaborative_Process}}</h2>

            <ul class="nav navbar-right panel_toolbox">
              <li>
                <a class="collapse-link">
                  <i class="fa fa-chevron-up"></i>
                </a>
              </li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                  <i class="fa fa-wrench"></i>
                </a>
                <ul class="dropdown-menu" role="menu">
                  <li>
                    <a href="#">Settings 1</a>
                  </li>
                  <li>
                    <a href="#">Settings 2</a>
                  </li>
                </ul>
              </li>
              <li>
                <a class="close-link">
                  <i class="fa fa-close"></i>
                </a>
              </li>
            </ul>
            <div class="clearfix"></div>
          </div>
          <div class="x_content">
            <br/>
            <form action="{{route('salvarmetodp2')}}" method="POST" id="form_x" data-parsley-validate class="form-horizontal form-label-left">
              {{ csrf_field() }}

              <div class="form-group">
                {!! Form::hidden('id_Collaborative_Process', $collaborative_Process->id_Collaborative_Process,['class' => 'form-control', 'required','readonly'])!!}

                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="team_name">Nombre equipo <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" id="team_name" name="name_Team" required="required" class="form-control col-md-7 col-xs-12">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="description_tram">Descripcion <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  {!! Form::textArea('description_Team', null,['class' => 'form-control', 'required'])!!}
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="description_tram">Integrantes <span class="required"></span>
                </label>

                <table class="table">
                   <thead>
                     <tr>
                       <th>Codigo</th>
                       <th>Nombre</th>
                       <th>Participacion</th>
                     </tr>
                   </thead>
                   <tbody>
                       @foreach ($childs as $child)
                         <tr>
                           <td>{{$child->student_Code_Child}}</td>
                           <td>{{$child->name_Child}}</td>
                           <td>
                             <label>{{ Form::checkbox('childs[]',$child->id_Child)}}</label>

                           </td>
                         </tr>
                       @endforeach
                   </tbody>
                 </table>
              </div>

              <div class="form-group">
                <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">

                  <button type="submit" class="btn btn-success">Finalizar</button>
                </div>
              </div>


            </form>
          </div>
        </div>

      </div>
    </div>
  </div>
@endsection
