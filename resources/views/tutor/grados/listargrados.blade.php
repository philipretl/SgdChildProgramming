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
                  <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12"> Seleccionar Institución</label>
                    <div class="col-md-6 col-sm-9 col-xs-12">
                        <select class="form-control">
                        <option>Elige ...</option>
                        <option>Institucion a</option>
                        <option>Institucion b</option>
                        <option>Institucion c</option>
                        <option>Institucion d</option>
                        </select>
                    </div>
                </div>
                
                  <table class="table table-striped projects">
                    <thead>
                      <tr>
                        <th>Curso</th>
                        <th>Numero Estudiantes</th>                        
                        <th style="width: 20%">#Edit</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>
                          <a>curso 5</a>
                        </td>
                        <td>
                          <a>30</a>
                        </td>
                        <td>
                          <!--<a data-toggle="modal" href="#exampleModal" class="btn btn-primary btn-xs"><i class="fa fa-folder"></i> View </a>-->
                          <a href="#editargrados" class="btn btn-info btn-xs">
                            <i class="fa fa-pencil"></i> Editar </a>
                          <!-- Button trigger modal -->
                          <a data-toggle="modal" href="#deleteModal" class="btn btn-danger btn-xs">
                            <i class="fa fa-trash-o"></i> Elimiar </a>

                        </td>
                      </tr>
                      <tr>
                        <td>
                          <a>Curso 16</a>
                        </td>
                        <td>
                          <a>33</a>
                        </td>
                       
                        <td>

                          <a href="" class="btn btn-info btn-xs">
                            <i class="fa fa-pencil"></i> Edit </a>
                          <a data-toggle="modal" href="#deleteModal" class="btn btn-danger btn-xs">
                            <i class="fa fa-trash-o"></i> Delete </a>
                        </td>
                      </tr>


                      
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