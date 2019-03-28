@extends('tutor.plantilla')

@section('subtittle')
  <div class="title_left">
    <h3>Practicas</h3>
  </div>
@endsection

@section('content')
  <div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
      <div class="x_panel">
        <div class="x_title">
          <h2>Listar Practicas </h2>
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

          <form action="{{route('practicasact')}}" method="GET" class="form-horizontal form-label-left" novalidate>
            {{ csrf_field() }}

            <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-6">Seleccione un proceso colaborativo: </label>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    @if (isset($collaborative_process))
                      {!! Form::select('id_Collaborative_Process',$collaboratives_process,$collaborative_process->id_Collaborative_Process,
                        ['id'=>'process','class' => 'form-control select-procesos','placeholder' => 'Seleccione un proceso colaborativo'])!!}
                    @else
                      {!! Form::select('id_Collaborative_Process',$collaboratives_process,null,['id'=>'process','class' => 'form-control select-procesos',
                          'placeholder' => 'Seleccione un proceso colaborativo'])!!}
                    @endif

                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-6">Seleccione una actividad: </label>
                <div class="col-md-4 col-sm-6 col-xs-12">
                  @if (isset($child_let_task))
                    {!! Form::select('id_Child_Let_Task',$child_let_tasks,$child_let_task->id_child_let_task,['id'=>'activity','required','class' => 'form-control '])!!}
                  @else
                    {!! Form::select('id_Child_Let_Task',[],null,['id'=>'activity','required','class' => 'form-control '])!!}
                  @endif

                </div>
                <div class="col-md-4 ">
                  <button id="send" type="submit" class="btn btn-success">Filtrar</button>
                </div>
            </div>
          </form>

            <div class="x_content">
              <div class="" role="tabpanel" data-example-id="togglable-tabs">
                <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
                  <li role="presentation" class="active"><a href="#tab_content1" id="abstraccion" role="tab" data-toggle="tab" aria-expanded="true">Practica Normal</a>
                  </li>
                  <li role="presentation" class=""><a href="#tab_content2" role="tab" id="mts" data-toggle="tab" aria-expanded="false">Memoria transactiva</a>
                  </li>
                  <li role="presentation" class=""><a href="#tab_content3" role="tab" id="genero" data-toggle="tab" aria-expanded="false">Genero</a>
                  </li>
                </ul>
                <div id="myTabContent" class="tab-content">
                  <div role="tabpanel" class="tab-pane fade active in" id="tab_content1" aria-labelledby="home-tab">

                      @isset($practices)
                        <table class="table">
                          <thead>
                            <tr>
                              <th>#</th>
                              <th>Nombre Practica</th>
                              <th>Descripcion Practica</th>
                              <th>Entradas</th>
                              <th>Salidas</th>
                              <th>Opciones</th>
                            </tr>
                          </thead>
                          <tbody>
                            @if ($practices!=null)
                              @foreach ($practices as $practice)
                                <tr>
                                  <th scope="row">1</th>
                                  <td>{{$practice->name_Practice}}</td>
                                  <td>{{$practice->description_Practice}}</td>
                                  <td>{{$practice->inputs_Practice}}</td>
                                  <td>{{$practice->outputs_Practice}}</td>
                                  <td>
                                    <a href="#" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Editar </a>
                                    <a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Eliminar </a>
                                  </td>
                                </tr>
                              @endforeach
                            @endif

                          </tbody>
                        </table>
                      @endisset
                  </div>
                  <div role="tabpanel" class="tab-pane fade" id="tab_content2" aria-labelledby="profile-tab">

                      @isset($practices_smt)


                        <table class="table">
                          <thead>
                            <tr>
                              <th>#</th>
                              <th>Nombre Practica Smt</th>
                              <th>Descripcion Practica Smt</th>
                              <th>Entradas</th>
                              <th>Salidas</th>
                              <th>Opciones</th>
                            </tr>
                          </thead>
                          <tbody>
                            @if ($practices_smt!=null)
                              @foreach ($practices_smt as $practice_smt)
                                <tr>
                                  <th scope="row">1</th>
                                  <td>{{$practice_smt->name_Practice_Smt}}</td>
                                  <td>{{$practice_smt->description_Practice_Smt}}</td>
                                  <td>{{$practice_smt->inputs_Practice_Smt}}</td>
                                  <td>{{$practice_smt->outputs_Practice_Smt}}</td>
                                  <td>
                                    <a href="#" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Editar </a>
                                    <a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Eliminar </a>
                                  </td>
                                </tr>
                              @endforeach
                            @endif
                          </tbody>
                        </table>
                      @endisset

                  </div>
                  <div role="tabpanel" class="tab-pane fade" id="tab_content3" aria-labelledby="profile-tab">
                  
                      @isset($practices_gender)
                          <table class="table">
                            <thead>
                              <tr>
                                <th>#</th>
                                <th>Nombre Practica</th>
                                <th>Descripcion Practica</th>
                                <th>Entradas</th>
                                <th>Salidas</th>
                                <th>Orientacion</th>
                                <th>Indicador</th>
                                <th>Opciones</th>
                              </tr>
                            </thead>
                            <tbody>
                              @if ($practices_gender!=null)
                                @foreach ($practices_gender as $practice_gender)
                                  <tr>
                                    <th scope="row">1</th>
                                    <td>{{$practice_gender->name_Practice_Gender}}</td>
                                    <td>{{$practice_gender->description_Practice_Gender}}</td>
                                    <td>{{$practice_gender->inputs_Practice_Gender}}</td>
                                    <td>{{$practice_gender->outputs_Practice_Gender}}</td>
                                    <td>{{$practice_gender->orientation_Practice_Gender}}</td>
                                    <td>{{$practice_gender->indicator_Practice_Gender}}</td>

                                    <td>
                                      <a href="#" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Editar </a>
                                      <a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Eliminar </a>
                                    </td>
                                  </tr>
                                @endforeach
                              @endif
                            </tbody>
                          </table>
                      @endisset
                  </div>
                </div>
              </div>

            </div>

            <div class="ln_solid"></div>


        </div>
      </div>
    </div>
  </div>
@endsection


@section('js')
  <script type="text/javascript">
    $("#process").change(function(event){


      $.get("../sgd/getactividades/"+event.target.value+"",function(response,state){
         console.log(response);
          $("#activity").empty();

          $("#activity").append('<option value="">Seleccione una Actividad</option>');
          for (i = 0; i < response.length; i++) {


            $("#activity").append("<option value='"+response[i].id_Child_Let_Task+"'>"
            + response[i].name_Child_Let_Task + "</option>");
          }
            $("#activity").trigger('chosen:updated');
      });

    });
  </script>

@endsection
