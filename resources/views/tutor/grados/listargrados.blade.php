@extends('tutor.plantilla')

@section('subtittle')
  <div class="title_left">
    <h3> Curso<small> </small> </h3>
  </div>
@endsection

@section('content')
<!-- page content -->

        <div class="">
          <div class="page-title">
            <div class="title_left">
              <h3>Lista Cursos</h3>
            </div>

            <div class="title_right">
              <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                <div class="input-group">
                  <input type="text" class="form-control" placeholder="Search for...">
                  <span class="input-group-btn">
                    <button class="btn btn-default" type="button">Go!</button>
                  </span>
                </div>
              </div>
            </div>
          </div>
          <div class="clearfix"></div>

          <div class="row">

            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="x_panel">
                <div class="x_title">
                  <h2>A continuación se listan cursos

                  </h2>

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


                  <!-- Smart Wizard -->


                  <form action="{{route('gradosinstituciones')}}" method="GET" class="form-horizontal form-label-left" novalidate>
                    {{ csrf_field() }}

                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-6">Institución</label>
                        <div class="col-md-4 col-sm-6 col-xs-12">
                          {!! Form::select('id_Institution',$institutions,null,['id'=>'institution','class' => 'form-control select-institution',
                              'placeholder' => 'Seleccione una Institucion'])!!}

                        </div>
                        <div class="col-md-4 ">
                          <button id="send" type="submit" class="btn btn-success">Filtrar</button>
                        </div>
                    </div>
                  </form>

                  <table class="table table-striped projects">
                    <thead>
                      <tr>
                        <th>Curso</th>
                        <th>Numero Estudiantes</th>
                        <th style="width: 20%">#Edit</th>
                      </tr>
                    </thead>
                    <tbody>
                      @isset($grades)
                        @foreach ($grades as $grade)
                          <tr>
                            <td>
                              <a>{{$grade->name_Grade}}</a>
                            </td>
                            <td>
                              <a>{{count($grade->childs)}}</a>
                            </td>
                            <td>
                              <a href="{{route('editargrado',$grade->id_Grade)}}" class="btn btn-info btn-xs">
                                <i class="fa fa-pencil"></i> Editar </a>
                              <!-- Button trigger modal -->
                              <form action="{{route('borrargrado',[$grade->id_Grade])}}" method="POST" id="form_x" data-parsley-validate class="form-horizontal form-label-left">
                                {{method_field('DELETE')}}
                                 {{ csrf_field() }}


                                    <input type="hidden" readonly id="id_Grade" value="{{$grade->id_Grade}}" name="id_Grade" required="required" class="form-control col-md-7 col-xs-12">


                                <button type="submit" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Eliminar</button>
                              </form>

                            </td>

                          </tr>
                        @endforeach

                      @endisset

                    </tbody>
                  </table>
                  <!-- End SmartWizard Content -->

                  <!-- End SmartWizard Content -->
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- /page content -->

      <!--//////// Modal elimiar Institución /////////////////////////-->
      <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Eliminar Institución</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              ¿Esta seguro de eliminar esta institución?
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
              <button type="button" class="btn btn-primary">Eliminar</button>
            </div>
          </div>
        </div>
    <!-- footer content -->
    <!-- /page content -->
@endsection
