@extends('tutor.plantilla')

@section('subtittle')
  <div class="title_left">
    <h3> Mis Sabores<small> </small> </h3>
  </div>
@endsection

@section('content')
  <div class="row">
    <div class="col-md-12">
      <div class="x_panel">
        <div class="x_title">
          <h2> Creados <small>  </small></h2>

          <div class="clearfix"></div>
        </div>
        <div class="x_content">

          <div class="row">

            <p>A continuación podrá visualizar los Sabores creados de ChildProgramming</p>
            <div class="col-md-12 col-sm-6 col-xs-12">

                  <div class="x_panel">
                      <form action="{{route('metodologia')}}" method="GET" class="form-horizontal form-label-left" novalidate>
                        {{ csrf_field() }}

                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-6">Metodologia para el proceso colaborativo: </label>
                            <div class="col-md-4 col-sm-6 col-xs-12">
                              {!! Form::select('id_Collaborative_Process',$collaboratives_process,null,['id'=>'institution','class' => 'form-control select-institution',
                                  'placeholder' => 'Seleccione una metodologia'])!!}

                            </div>
                            <div class="col-md-4 ">
                              <button id="send" type="submit" class="btn btn-success">Ver plan de trabajo</button>
                            </div>
                        </div>
                      </form>

                    @isset($c_b)


                      <div class="x_title">
                        <div class="clearfix"></div>
                        <h2><i class="fa fa-align-"></i>{{$c_b->name_Collaborative_Process}}</h2>
                        <ul class="nav navbar-right panel_toolbox">

                          <a href="#" class="btn btn-info btn-xs">
                            <i class="fa fa-pencil"></i> Editar </a>
                          <form action="{{route('borrarmetodologia',[$c_b->id_Collaborative_Process])}}" method="POST" id="form_x" data-parsley-validate class="form-horizontal form-label-left">
                            {{method_field('DELETE')}}
                             {{ csrf_field() }}


                                <input type="hidden" readonly id="id_Grade" value="{{$c_b->id_Collaborative_Process}}" name="id_Collaborative_Process" required="required" class="form-control col-md-7 col-xs-12">


                            <button type="submit" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Eliminar</button>
                          </form>

                        </ul>
                        <div class="clearfix"></div>
                      </div>
                      <div class="x_content style="display: none"">
                        <!-- start accordion -->
                        <div class="accordion" id="accordion" role="tablist" aria-multiselectable="true">
                          <div class="panel">
                            <a class="panel-heading collapsed" role="tab" id="headingOne" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false" aria-controls="collapseThree">
                              <h4 class="panel-title">Facilitadores</h4>
                            </a>
                            <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                              <div class="panel-body">
                                <p><strong>Facilitadores de la Metodologia</strong>
                                </p>
                                <table class="table">
                                  <thead>
                                    <tr>
                                      <th>#</th>
                                      <th>Nombre</th>
                                      <th>Descripcion</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    @if ($c_b->facilitators!=null)
                                      @foreach ($c_b->facilitators as $facilitator)

                                      @endforeach
                                        <tr>
                                          <th scope="row">1</th>
                                          <td>{{$facilitator->name_Facilitator}}</td>
                                          <td>{{$facilitator->description_Facilitator}}</td>
                                        </tr>

                                    @endif


                                  </tbody>
                                </table>
                              </div>
                            </div>
                          </div>
                          @include('tutor.metodologias.team')
                          <div class="panel">
                            <a class="panel-heading collapsed" role="tab" id="headingThree" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseTwo">
                              <h4 class="panel-title">Actividades</h4>
                            </a>
                            <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                              <div class="panel-body">
                                @foreach ($c_b->child_let_tasks as $child_let_task )
                                  <div class="x_content">
                                    <ul class="list-unstyled timeline">
                                      <li>
                                        <div class="block">
                                          <div class="tags">
                                            <a href="" class="tag">
                                              <span>Activ: {{$child_let_task->id_Child_Let_Task}}</span>
                                            </a>
                                          </div>
                                          <div class="block_content">
                                            <h1 class="title">
                                                          {{$child_let_task->name_Child_Let_Task}}
                                                        </h1>

                                            <p class="excerpt">
                                              {{$child_let_task->description_Child_Let_Task}}
                                            </p>
                                              @include('tutor.metodologias.practicas')
                                          </div>
                                        </div>

                                      </li>



                                    </ul>

                                  </div>
                                @endforeach
                              </div>

                            </div>
                          </div>
                          <div class="panel">
                            <a class="panel-heading collapsed" role="tab" id="headingFour" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseThree">
                              <h4 class="panel-title">Roles</h4>
                            </a>
                            <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
                              <div class="panel-body">
                                <p><strong>Roles de los integrantes</strong>
                                </p>
                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor
                                <table class="table">
                                  <thead>
                                    <tr>
                                      <th>#</th>
                                      <th>Estudiante</th>
                                      <th>Nombre Rol</th>
                                      <th>Descripcion Rol</th>
                                      <th>Tipo de Rol</th>

                                    </tr>
                                  </thead>
                                  <tbody>
                                    <tr>
                                      <th scope="row">1</th>
                                      <td>Mark</td>
                                      <td>Lider</td>
                                      <td>Encaragdo de dirigir</td>
                                      <td>No se</td>

                                    </tr>
                                  </tbody>
                                </table>
                              </div>
                            </div>
                          </div>
                        </div>
                        <!-- end of accordion -->


                      </div>
                      @endisset
                    </div>

                  </div>

          </div>
        </div>
      </div>
    </div>
  </div>

@endsection
