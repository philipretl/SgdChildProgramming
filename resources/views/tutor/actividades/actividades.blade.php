@extends('tutor.plantilla')

@section('subtittle')
  <div class="title_left">
    <h3> Actividades<small> </small> </h3>
  </div>
@endsection

@section('content')
  <div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
      <div class="x_panel">
        <div class="x_title">
          <h2>Listar Actividades</h2>
          <ul class="nav navbar-right panel_toolbox">
            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="#">Settings 1</a>
                </li>
                <li><a href="#">Settings 2</a>
                </li>
              </ul>
            </li>
            <li><a class="close-link"><i class="fa fa-close"></i></a>
            </li>
          </ul>
          <div class="clearfix"></div>
        </div>
        <div class="x_content">
          <br />

          <form action="{{route('actividadesmetod')}}" method="GET" class="form-horizontal form-label-left" novalidate>
            {{ csrf_field() }}

            <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-6">Metodologia para el proceso colaborativo: </label>
                <div class="col-md-4 col-sm-6 col-xs-12">
                  {!! Form::select('id_Collaborative_Process',$collaboratives_process,null,['id'=>'institution','class' => 'form-control select-institution',
                      'placeholder' => 'Seleccione una metodologia'])!!}

                </div>
                <div class="col-md-4 ">
                  <button id="send" type="submit" class="btn btn-success">Filtrar</button>
                </div>
            </div>
          </form>
            @isset($collaborative_process)
                <table class="table">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Nombre Actividad</th>
                    <th>Descripcion Actividad</th>
                    <th>Entrada</th>
                    <th>Salida</th>
                  </tr>
                </thead>
                <tbody>
                  @if ($collaborative_process->child_let_tasks!=null)

                    @foreach ($collaborative_process->child_let_tasks as $child_let_task)
                      <tr>
                        <th scope="row">1</th>
                        <td>{{$child_let_task->name_Child_Let_Task}}</td>
                        <td>{{$child_let_task->description_Child_Let_Task}}</td>
                        <td>{{$child_let_task->input_Child_Let_Task}}</td>
                        <td>{{$child_let_task->output_Child_Let_Task}}</td>
                        <td>
                          <a href="#" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Editar </a>
                          <a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Eliminar </a>
                        </td>
                      </tr>
                    @endforeach
                  @endif
                </tbody>
              </table>
              <div class="ln_solid"></div>
          @endisset
      </div>
    </div>
  </div>
</div>

@endsection
