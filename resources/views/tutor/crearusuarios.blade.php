@extends('tutor.plantilla')

@section('subtittle')
<div class="title_left">
    <h3> Usuarios<small> </small> </h3>
  </div>
@endsection

@section('content')
      <!-- /top navigation -->

      <!-- page content -->
      <div class="">
          <div class="page-title">
            <div class="title_left">
              <h3>Agregar Usuarios
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
                  <h2>A continuación podrá  agregar usuarios
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

                  <form class="form-horizontal form-label-left" novalidate>

                  
                   <!--<span class="section">Personal Info</span>-->

                    <div class="item form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name_User">Nombre
                        <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input id="name_User" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="name"
                          placeholder="Ingrese su nombre completo" required="required" type="text">
                      </div>
                    </div>
                    <div class="item form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email_User">Email
                        <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="email" id="email_User" name="email_User" required="required" class="form-control col-md-7 col-xs-12">
                      </div>
                    </div>
                    <div class="item form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email_User">Confirmar Email
                        <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="email" id="email2" name="confirm_email" data-validate-linked="email_User" required="required" class="form-control col-md-7 col-xs-12">
                      </div>
                    </div>
                   
                    <div class="item form-group">
                        <label for="password" class="control-label col-md-3">Contraseña</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="password" type="password" name="password" data-validate-length="6,8" class="form-control col-md-7 col-xs-12" required="required">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label for="password2" class="control-label col-md-3 col-sm-3 col-xs-12">Confirmar Password</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="password2" type="password" name="password2" data-validate-linked="password" class="form-control col-md-7 col-xs-12"
                            required="required">
                        </div>
                      </div>
                     
                      <div class="form-group">
                          <label class="control-label col-md-3 col-sm-3 col-xs-12">Tipo Usuario</label>
                          <div class="col-md-6 col-sm-6 col-xs-12">
                            <select class="form-control"  id="type_User">
                              <option>Elige ...</option>
                              <option>Administrador</option>
                              <option>Docente</option>
                            </select>
                          </div>
                        </div>
                    
                    <div class="item form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="telefono">Teléfono
                        <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="tel" id="phone_User" name="phone" required="required" data-validate-length-range="8,20" class="form-control col-md-7 col-xs-12">
                      </div>
                    </div>

                  
                    <div class="ln_solid"></div>
                    <div class="form-group">
                      <div class="col-md-6 col-md-offset-3">
                        <button type="submit" class="btn btn-primary">Limpiar</button>
                        <button id="send" type="submit" class="btn btn-success">Guardar</button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>

      <!-- /page content -->

      <!-- footer content -->
@endsection