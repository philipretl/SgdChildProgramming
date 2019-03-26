@extends('tutor.plantilla')

@section('subtittle')
  <div class="title_left">
    <h3> Instituciones<small> </small> </h3>
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
                      <div class="btn-group">
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
                      </div>
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
                      <tr>
                        <td>Tiger Nixon</td>
                        <td>System Architect</td>
                        <td>56</td>
                        <td>Institución</td>
                        <td>
                          <a href="form_Crear_Estudiantes.html" class="btn btn-info btn-xs">
                            <i class="fa fa-pencil"></i> Editar </a>
                          <a data-toggle="modal" href="#deleteModal" class="btn btn-danger btn-xs">
                            <i class="fa fa-trash-o"></i> Eliminar </a>
                        </td>

                      </tr>
                      <tr>
                        <td>Garrett Winters</td>
                        <td>Accountant</td>
                        <td>Tokyo</td>
                        <td>63</td>
                        <td>
                          <a href="form_Crear_Estudiantes.html" class="btn btn-info btn-xs">
                            <i class="fa fa-pencil"></i> Edita </a>
                          <a data-toggle="modal" href="#deleteModal" class="btn btn-danger btn-xs">
                            <i class="fa fa-trash-o"></i> Eliminar </a>
                        </td>

                      </tr>
                      <tr>
                        <td>Ashton Cox</td>
                        <td>Junior Technical Author</td>
                        <td>San Francisco</td>
                        <td>66</td>
                        <td>
                          <a href="form_Crear_Estudiantes.html" class="btn btn-info btn-xs">
                            <i class="fa fa-pencil"></i> Editar </a>
                          <a data-toggle="modal" href="#deleteModal" class="btn btn-danger btn-xs">
                            <i class="fa fa-trash-o"></i> Eliminar </a>
                        </td>

                      </tr>
                      <tr>
                        <td>Cedric Kelly</td>
                        <td>Senior Javascript Developer</td>
                        <td>Edinburgh</td>
                        <td>22</td>
                        <td>
                          <a href="form_Crear_Estudiantes.html" class="btn btn-info btn-xs">
                            <i class="fa fa-pencil"></i> Editar </a>
                          <a data-toggle="modal" href="#deleteModal" class="btn btn-danger btn-xs">
                            <i class="fa fa-trash-o"></i> Eliminar </a>
                        </td>

                      </tr>
                      <tr>
                        <td>Airi Satou</td>
                        <td>Accountant</td>
                        <td>Tokyo</td>
                        <td>33</td>
                        <td>
                          <a href="form_Crear_Estudiantes.html" class="btn btn-info btn-xs">
                            <i class="fa fa-pencil"></i> Editar </a>
                          <a data-toggle="modal" href="#deleteModal" class="btn btn-danger btn-xs">
                            <i class="fa fa-trash-o"></i> Eliminar </a>
                        </td>

                      </tr>
                      <tr>
                        <td>Brielle Williamson</td>
                        <td>Integration Specialist</td>
                        <td>New York</td>
                        <td>61</td>
                        <td>
                          <a href="form_Crear_Estudiantes.html" class="btn btn-info btn-xs">
                            <i class="fa fa-pencil"></i> Editar </a>
                          <a data-toggle="modal" href="#deleteModal" class="btn btn-danger btn-xs">
                            <i class="fa fa-trash-o"></i> Eliminar </a>
                        </td>

                      </tr>
                      <tr>
                        <td>Herrod Chandler</td>
                        <td>Sales Assistant</td>
                        <td>San Francisco</td>
                        <td>59</td>
                        <td>
                          <a href="form_Crear_Estudiantes.html" class="btn btn-info btn-xs">
                            <i class="fa fa-pencil"></i> Editar </a>
                          <a data-toggle="modal" href="#deleteModal" class="btn btn-danger btn-xs">
                            <i class="fa fa-trash-o"></i> Eliminar </a>
                        </td>

                      </tr>
                      <tr>
                        <td>Rhona Davidson</td>
                        <td>Integration Specialist</td>
                        <td>Tokyo</td>
                        <td>55</td>
                        <td>
                          <a href="form_Crear_Estudiantes.html" class="btn btn-info btn-xs">
                            <i class="fa fa-pencil"></i> Editar </a>
                          <a data-toggle="modal" href="#deleteModal" class="btn btn-danger btn-xs">
                            <i class="fa fa-trash-o"></i> Eliminar </a>
                        </td>

                      </tr>
                      <tr>
                        <td>Colleen Hurst</td>
                        <td>Javascript Developer</td>
                        <td>San Francisco</td>
                        <td>39</td>
                        <td>
                          <a href="form_Crear_Estudiantes.html" class="btn btn-info btn-xs">
                            <i class="fa fa-pencil"></i> Editar </a>
                          <a data-toggle="modal" href="#deleteModal" class="btn btn-danger btn-xs">
                            <i class="fa fa-trash-o"></i> Eliminar </a>
                        </td>

                      </tr>
                      <tr>
                        <td>Sonya Frost</td>
                        <td>Software Engineer</td>
                        <td>Edinburgh</td>
                        <td>23</td>
                        <td>
                          <a href="form_Crear_Estudiantes.html" class="btn btn-info btn-xs">
                            <i class="fa fa-pencil"></i> Editar </a>
                          <a data-toggle="modal" href="#deleteModal" class="btn btn-danger btn-xs">
                            <i class="fa fa-trash-o"></i> Eliminar </a>
                        </td>

                      </tr>
                      <tr>
                        <td>Jena Gaines</td>
                        <td>Office Manager</td>
                        <td>London</td>
                        <td>30</td>
                        <td>
                          <a href="form_Crear_Estudiantes.html" class="btn btn-info btn-xs">
                            <i class="fa fa-pencil"></i> Editar </a>
                          <a data-toggle="modal" href="#deleteModal" class="btn btn-danger btn-xs">
                            <i class="fa fa-trash-o"></i> Eliminar </a>
                        </td>

                      </tr>
                      <tr>
                        <td>Quinn Flynn</td>
                        <td>Support Lead</td>
                        <td>Edinburgh</td>
                        <td>22</td>
                        <td>
                          <a href="form_Crear_Estudiantes.html" class="btn btn-info btn-xs">
                            <i class="fa fa-pencil"></i> Editar </a>
                          <a data-toggle="modal" href="#deleteModal" class="btn btn-danger btn-xs">
                            <i class="fa fa-trash-o"></i> Eliminar </a>
                        </td>

                      </tr>
                      <tr>
                        <td>Charde Marshall</td>
                        <td>Regional Director</td>
                        <td>San Francisco</td>
                        <td>36</td>
                        <td>
                          <a href="form_Crear_Estudiantes.html" class="btn btn-info btn-xs">
                            <i class="fa fa-pencil"></i> Editar </a>
                          <a data-toggle="modal" href="#deleteModal" class="btn btn-danger btn-xs">
                            <i class="fa fa-trash-o"></i> Eliminar </a>
                        </td>

                      </tr>
                      <tr>
                        <td>Haley Kennedy</td>
                        <td>Senior Marketing Designer</td>
                        <td>London</td>
                        <td>43</td>
                        <td>
                          <a href="form_Crear_Estudiantes.html" class="btn btn-info btn-xs">
                            <i class="fa fa-pencil"></i> Editar </a>
                          <a data-toggle="modal" href="#deleteModal" class="btn btn-danger btn-xs">
                            <i class="fa fa-trash-o"></i> Eliminar </a>
                        </td>

                      </tr>
                      <tr>
                        <td>Tatyana Fitzpatrick</td>
                        <td>Regional Director</td>
                        <td>London</td>
                        <td>19</td>
                        <td>
                          <a href="form_Crear_Estudiantes.html" class="btn btn-info btn-xs">
                            <i class="fa fa-pencil"></i> Editar </a>
                          <a data-toggle="modal" href="#deleteModal" class="btn btn-danger btn-xs">
                            <i class="fa fa-trash-o"></i> Eliminar </a>
                        </td>

                      </tr>
                      <tr>
                        <td>Michael Silva</td>
                        <td>Marketing Designer</td>
                        <td>London</td>
                        <td>66</td>
                        <td>
                          <a href="form_Crear_Estudiantes.html" class="btn btn-info btn-xs">
                            <i class="fa fa-pencil"></i> Editar </a>
                          <a data-toggle="modal" href="#deleteModal" class="btn btn-danger btn-xs">
                            <i class="fa fa-trash-o"></i> Eliminar </a>
                        </td>

                      </tr>
                      <tr>
                        <td>Paul Byrd</td>
                        <td>Chief Financial Officer (CFO)</td>
                        <td>New York</td>
                        <td>64</td>
                        <td>
                          <a href="form_Crear_Estudiantes.html" class="btn btn-info btn-xs">
                            <i class="fa fa-pencil"></i> Editar </a>
                          <a data-toggle="modal" href="#deleteModal" class="btn btn-danger btn-xs">
                            <i class="fa fa-trash-o"></i> Eliminar </a>
                        </td>

                      </tr>
                      <tr>
                        <td>Gloria Little</td>
                        <td>Systems Administrator</td>
                        <td>New York</td>
                        <td>59</td>
                        <td>
                          <a href="form_Crear_Estudiantes.html" class="btn btn-info btn-xs">
                            <i class="fa fa-pencil"></i> Editar </a>
                          <a data-toggle="modal" href="#deleteModal" class="btn btn-danger btn-xs">
                            <i class="fa fa-trash-o"></i> Eliminar </a>
                        </td>

                      </tr>
                      <tr>
                        <td>Bradley Greer</td>
                        <td>Software Engineer</td>
                        <td>London</td>
                        <td>41</td>
                        <td>
                          <a href="form_Crear_Estudiantes.html" class="btn btn-info btn-xs">
                            <i class="fa fa-pencil"></i> Editar </a>
                          <a data-toggle="modal" href="#deleteModal" class="btn btn-danger btn-xs">
                            <i class="fa fa-trash-o"></i> Eliminar </a>
                        </td>

                      </tr>
                      <tr>
                        <td>Dai Rios</td>
                        <td>Personnel Lead</td>
                        <td>Edinburgh</td>
                        <td>35</td>
                        <td>
                          <a href="form_Crear_Estudiantes.html" class="btn btn-info btn-xs">
                            <i class="fa fa-pencil"></i> Editar </a>
                          <a data-toggle="modal" href="#deleteModal" class="btn btn-danger btn-xs">
                            <i class="fa fa-trash-o"></i> Eliminar </a>
                        </td>

                      </tr>

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
