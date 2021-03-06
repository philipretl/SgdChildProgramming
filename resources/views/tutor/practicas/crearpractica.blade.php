@extends('tutor.plantilla')

@section('subtittle')
  <div class="title_left">
    <h3> Practicas</h3>
  </div>
@endsection

@section('content')
  <div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
      <div class="x_panel">
        <div class="x_title">
          <h2>Crear Practica </h2>
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

                      <form action="{{route('salvarpractica')}}" method="POST" class="form-horizontal form-label-left" novalidate>
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
                        </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name_practice">Nombre Practica <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="name" required="required" name="name_Practice" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="description_practice">Descripcion Practica <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          {!! Form::textArea('description_Practice', null,['class' => 'form-control', 'required'])!!}

                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="inputs">Entradas <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="inputs" name="inputs_Practice" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="outputs">Salidas <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="outputs" name="outputs_Practice" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>

                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <button type="submit" class="btn btn-success">Crea Practica</button>
                        </div>
                      </div>

                    </form>
                  </div>



                  <div role="tabpanel" class="tab-pane fade" id="tab_content2" aria-labelledby="profile-tab">


                      <form action="{{route('salvarpracticasmt')}}" method="POST" class="form-horizontal form-label-left" novalidate>
                        {{ csrf_field() }}

                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-6">Seleccione un proceso colaborativo: </label>
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                @if (isset($collaborative_process))
                                  {!! Form::select('id_Collaborative_Process',$collaboratives_process,$collaborative_process->id_Collaborative_Process,
                                    ['id'=>'process2','class' => 'form-control select-procesos','placeholder' => 'Seleccione un proceso colaborativo'])!!}
                                @else
                                  {!! Form::select('id_Collaborative_Process',$collaboratives_process,null,['id'=>'process2','class' => 'form-control select-procesos',
                                      'placeholder' => 'Seleccione un proceso colaborativo'])!!}
                                @endif

                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-6">Seleccione una actividad: </label>
                            <div class="col-md-4 col-sm-6 col-xs-12">
                              @if (isset($child_let_task))
                                {!! Form::select('id_Child_Let_Task',$child_let_tasks,$child_let_task->id_child_let_task,['id'=>'activity2','required','class' => 'form-control '])!!}
                              @else
                                {!! Form::select('id_Child_Let_Task',[],null,['id'=>'activity2','required','class' => 'form-control '])!!}
                              @endif

                            </div>
                        </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name_practice">Nombre Practica Memoria Transactiva<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text"  name="name_Practice_Smt" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="description_practice">Descripcion Practica <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          {!! Form::textArea('description_Practice_Smt', null,['class' => 'form-control', 'required'])!!}
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="inputs">Entradas <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="inputs" name="inputs_Practice_Smt" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="outputs">Salidas <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="outputs" name="outputs_Practice_Smt" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <button type="submit" class="btn btn-info">Crear Practica Memoria Transactiva</button>
                        </div>
                      </div>
                    </form>
                  </div>


                  <div role="tabpanel" class="tab-pane fade" id="tab_content3" aria-labelledby="profile-tab">
                  
                      <form action="{{route('salvarpracticagenero')}}" method="POST" class="form-horizontal form-label-left" novalidate>
                        {{ csrf_field() }}

                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-6">Seleccione un proceso colaborativo: </label>
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                @if (isset($collaborative_process))
                                  {!! Form::select('id_Collaborative_Process',$collaboratives_process,$collaborative_process->id_Collaborative_Process,
                                    ['id'=>'process3','class' => 'form-control select-procesos','placeholder' => 'Seleccione un proceso colaborativo'])!!}
                                @else
                                  {!! Form::select('id_Collaborative_Process',$collaboratives_process,null,['id'=>'process3','class' => 'form-control select-procesos',
                                      'placeholder' => 'Seleccione un proceso colaborativo'])!!}
                                @endif

                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-6">Seleccione una actividad: </label>
                            <div class="col-md-4 col-sm-6 col-xs-12">
                              @if (isset($child_let_task))
                                {!! Form::select('id_Child_Let_Task',$child_let_tasks,$child_let_task->id_child_let_task,['id'=>'activity3','required','class' => 'form-control '])!!}
                              @else
                                {!! Form::select('id_Child_Let_Task',[],null,['id'=>'activity3','required','class' => 'form-control '])!!}
                              @endif

                            </div>
                        </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Nombre Practica Genero<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="name" name="name_Practice_Gender"required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="description_practice">Descripcion Practica <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          {!! Form::textArea('description_Practice_Gender', null,['class' => 'form-control', 'required'])!!}
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="inputs">Entradas <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="inputs" name="inputs_Practice_Gender" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="outputs">Salidas <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="outputs" name="outputs_Practice_Gender" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="orientation">Orientacion <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="orientation" name="orientation_Practice_Gender" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="Indicator">Indicador <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="Indicator" name="indicators_Problem_Practice_Gender" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <button type="submit" class="btn btn-danger">Crea Practica Genero</button>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>

            </div>



          </form>
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

    $("#process2").change(function(event){


      $.get("../sgd/getactividades/"+event.target.value+"",function(response,state){
         console.log(response);
          $("#activity2").empty();

          $("#activity2").append('<option value="">Seleccione una Actividad</option>');
          for (i = 0; i < response.length; i++) {


            $("#activity2").append("<option value='"+response[i].id_Child_Let_Task+"'>"
            + response[i].name_Child_Let_Task + "</option>");
          }
            $("#activity2").trigger('chosen:updated');
      });

    });

    $("#process3").change(function(event){


      $.get("../sgd/getactividades/"+event.target.value+"",function(response,state){
         console.log(response);
          $("#activity3").empty();

          $("#activity3").append('<option value="">Seleccione una Actividad</option>');
          for (i = 0; i < response.length; i++) {


            $("#activity3").append("<option value='"+response[i].id_Child_Let_Task+"'>"
            + response[i].name_Child_Let_Task + "</option>");
          }
            $("#activity3").trigger('chosen:updated');
      });

    });
  </script>

@endsection
