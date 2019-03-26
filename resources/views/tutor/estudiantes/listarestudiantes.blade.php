@extends('tutor.plantilla')

@section('subtittle')
  <div class="title_left">
    <h3> Estudiantes<small> </small> </h3>
  </div>
@endsection

@section('content')
 <!-- page content -->
        <div class="">
          <div class="page-title">
            <div class="title_left">
              <h3>Lista de Estudiantes
              </h3>
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
                  <h2>A continuación se listan los estudiantes
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
                  <table id="datatable" class="table table-striped table-bordered">
                    <div class="text-center">
                    <!--  <div class="btn-group">
                        <button data-toggle="dropdown" class="btn btn-default dropdown-toggle" type="button" aria-expanded="false">Grado
                          <span class="caret"></span>
                        </button>
                        <ul role="menu" class="dropdown-menu">
                          <li>
                            <a href="#"></a>
                          </li>
                          <li>
                            <a href="#">Sexto</a>
                          </li>
                          <li>
                            <a href="#">Séptimo</a>
                          </li>
                          <li>
                            <a href="#">Octavo</a>
                          </li>
                          <li>
                            <a href="#">Noveno</a>
                          </li>
                          <li>
                            <a href="#">Décimo</a>
                          </li>
                          <li>
                            <a href="#">Undécimo</a>
                          </li>
                        </ul>
                      </div> -->
                    </div>
                    <thead>
                      <tr>
                        <th>Nombre</th>
                        <th>Grado</th>
                        <th>Edad</th>
                        <th>Institucion</th>
                        <th>Editar</th>

                      </tr>
                    </thead>


                    <tbody>
                      @foreach ($childs as $child)
                        <tr>
                          <td>{{$child->name_Child}}</td>
                          <td>{{$child->grade->name_Grade}}</td>
                          <td>{{$child->age_Child}}</td>
                          <td>{{$child->institution->name_Institution}}</td>
                          <td>
                            <a href="{{route('editarestudiante',$child->id_Child)}}" class="btn btn-info btn-xs">
                              <i class="fa fa-pencil"></i> Editar </a>
                            <!-- Button trigger modal -->
                            <form action="{{route('borrarestudiante',[$child->id_Child])}}" method="POST" id="form_x" data-parsley-validate class="form-horizontal form-label-left">
                              {{method_field('DELETE')}}
                               {{ csrf_field() }}


                                  <input type="hidden" readonly id="id_Child" value="{{$child->id_Child}}" name="id_Child" required="required" class="form-control col-md-7 col-xs-12">


                              <button type="submit" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Eliminar</button>
                            </form>

                          </td>

                        </tr>
                      @endforeach



                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
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
    </div>
    <!-- footer content -->
    <!-- /page content -->
@endsection
