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
          <h3>Lista Instituciones</h3>
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
              <h2>A continuación se listan instituciones

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

              <table class="table table-striped projects">
                <thead>
                  <tr>
                    <th>Nombre</th>
                    <th>Dirección</th>
                    <th>Teléfono</th>
                    <th>Código</th>
                    <th style="width: 20%">#Edit</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($institutions as $institution)
                      <tr>
                        <td>
                          <a>{{$institution->name_Institution}}</a>
                        </td>
                        <td>
                          <a>{{$institution->address_Institution}}</a>
                        </td>
                        <td>
                          <a>{{$institution->phone_Institution}}</a>
                        </td>
                        <td>
                          <a>{{$institution->code_Institution}}</a>
                        </td>
                        <td>
                          <!--<a data-toggle="modal" href="#exampleModal" class="btn btn-primary btn-xs"><i class="fa fa-folder"></i> View </a>-->
                          <a href="{{route('editarinstitucion',$institution->id_Institution)}}" class="btn btn-info btn-xs">
                            <i class="fa fa-pencil"></i> Editar </a>
                          <!-- Button trigger modal -->
                          <form action="{{route('borrarinstitucion',[$institution->id])}}" method="POST" id="form_x" data-parsley-validate class="form-horizontal form-label-left">
                            {{method_field('DELETE')}}
                             {{ csrf_field() }}


                                <input type="hidden" readonly id="id_Institution" value="{{$institution->id_Institution}}" name="id_Institution" required="required" class="form-control col-md-7 col-xs-12">


                            <button type="submit" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Eliminar</button>
                          </form>


                        </td>

                      </tr>
                    @endforeach
                </tbody>
              </table>
              <!-- End SmartWizard Content -->

              <!-- End SmartWizard Content -->
            </div>
          </div>
        </div>
      </div>
    </div>

  <!-- /page content -->

  <!--//////// Modal elimiar Institución /////////////////////////-->



@endsection
