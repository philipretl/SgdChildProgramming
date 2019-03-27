@extends('tutor.plantilla')

@section('subtitle')
  <div class="title_left">
    <h3> Mis Actividades<small> </small> </h3>
  </div>
@endsection

@section('content')
  <div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
      <div class="x_panel">
        <div class="x_title">
          <h2>Listar Practicas <small>different form elements</small></h2>
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
          <form id="demo-form2" action="" method="get" data-parsley-validate class="form-horizontal form-label-left">

            <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-6">Metodologias</label>
              <div class="col-md-4 col-sm-6 col-xs-12">
                <select class="form-control" id="type_User">
                  <option>Choose option</option>
                  <option>Option one</option>
                  <option>Option two</option>
                  <option>Option three</option>
                  <option>Option four</option>
                </select>
              </div>
              <div class="col-md-4 ">
                <button id="send" type="submit" class="btn btn-success">Filtrar</button>
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-6">Actividad</label>
              <div class="col-md-4 col-sm-6 col-xs-12">
                <select class="form-control" id="type_User">
                  <option>Choose option</option>
                  <option>Option one</option>
                  <option>Option two</option>
                  <option>Option three</option>
                  <option>Option four</option>
                </select>
              </div>
              <div class="col-md-4 ">
                <button id="send" type="submit" class="btn btn-success">Filtrar</button>
              </div>
            </div>

            <div class="x_content">


              <div class="" role="tabpanel" data-example-id="togglable-tabs">
                <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
                  <li role="presentation" class="active"><a href="#tab_content1" id="abstraccion" role="tab" data-toggle="tab" aria-expanded="true">Abstraccion</a>
                  </li>
                  <li role="presentation" class=""><a href="#tab_content2" role="tab" id="mts" data-toggle="tab" aria-expanded="false">Memoria transactiva</a>
                  </li>
                  <li role="presentation" class=""><a href="#tab_content3" role="tab" id="genero" data-toggle="tab" aria-expanded="false">Genero</a>
                  </li>
                </ul>
                <div id="myTabContent" class="tab-content">
                  <div role="tabpanel" class="tab-pane fade active in" id="tab_content1" aria-labelledby="home-tab">
                    <p>Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher
                      synth. Cosby sweater eu banh mi, qui irure terr.</p>

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
                          <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                            <td>@mdo</td>
                            <td>
                              <a href="#" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Editar </a>
                              <a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Eliminar </a>
                            </td>
                          </tr>
                        </tbody>
                      </table>

                  </div>
                  <div role="tabpanel" class="tab-pane fade" id="tab_content2" aria-labelledby="profile-tab">
                    <p>Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui photo
                      booth letterpress, commodo enim craft beer mlkshk aliquip</p>

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
                          <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                            <td>@mdo</td>
                            <td>
                              <a href="#" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Editar </a>
                              <a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Eliminar </a>
                            </td>
                          </tr>
                        </tbody>
                      </table>

                  </div>
                  <div role="tabpanel" class="tab-pane fade" id="tab_content3" aria-labelledby="profile-tab">
                    <p>xxFood truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui photo
                      booth letterpress, commodo enim craft beer mlkshk </p>

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
                          <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                            <td>@mdo</td>
                            <td>@mdo</td>
                            <td>@mdo</td>
                            <td>
                              <a href="#" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Editar </a>
                              <a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Eliminar </a>
                            </td>
                          </tr>
                        </tbody>
                      </table>

                  </div>
                </div>
              </div>

            </div>

            <div class="ln_solid"></div>
            <div class="form-group">
              <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                <button class="btn btn-primary" type="button">Cancel</button>
                <button class="btn btn-primary" type="reset">Reset</button>
                <button type="submit" class="btn btn-success">Submit</button>
              </div>
            </div>

          </form>
        </div>
      </div>
    </div>
  </div>
@endsection
