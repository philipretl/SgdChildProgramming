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
          <h3>Agregar Estudiantes</h3>
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
              <h2>A continuación se podrá crear estudiantes</h2>

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
                  <br/>
                  <form action="{{route('actualizarestudiante',[$child])}}" method="PUT" id="form_x" data-parsley-validate class="form-horizontal form-label-left">
                     {{ csrf_field() }}
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name_Child">Nombre
                          <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="name_Child" name="name_Child" value="{{$child->name_Child}}" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>

                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="age_Child">Edad
                        <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" id="age_Child" name="age_Child" value="{{$child->age_Child}}" required="required" class="form-control col-md-7 col-xs-12">
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="age_Child">Codigo Estudiantil
                        <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" id="student_Code_Child" value="{{$child->student_Code_Child}}" name="student_Code_Child" required="required" class="form-control col-md-7 col-xs-12">
                      </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Institución<span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          {!! Form::select('id_Institution',$institutions,$child->institution->id_Institution,['id'=>'institution','class' => 'form-control select-institution',
                              'placeholder' => 'Seleccione una Institucion','required'])!!}
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Curso</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          {!! Form::label('id_Grade', 'Grados', ['class' => 'bmd-label-floating'])!!}
                          {!! Form::select('id_Grade',$grades,$child->grade->id_Grade,['id'=>'grade', 'class' => 'form-control ','required'])!!}
					            	</div>
                    </div>

                    <div class="ln_solid"></div>
                    <div class="form-group">
                      <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">

                        <button type="agregar" class="btn btn-success">Actualizar</button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>

        </div>

<!-- /page content -->
@endsection

@section('js')
  <script type="text/javascript">
    $("#institution").change(function(event){


      $.get("../getgrado/"+event.target.value+"",function(response,state){
         console.log(response);
          $("#grade").empty();

          $("#grade").append('<option value="">Seleccione un grado</option>');
          for (i = 0; i < response.length; i++) {


            $("#grade").append("<option value='"+response[i].id_Grade+"'>"
            + response[i].name_Grade  + "</option>");
          }
            $("#grade").trigger('chosen:updated');
      });

    });
  </script>

@endsection
