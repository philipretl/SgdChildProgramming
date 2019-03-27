@extends('tutor.plantilla')


@section('subtittle')
  <div class="title_left">
    <h3> Metodologias</h3>
  </div>
@endsection

@section('content')

<!-- page content -->

  <div class="">
<div class="page-title">
  <div class="title_left">
    <h3>Crear Metodologia: paso 1</h3>
  </div>


</div>
<div class="clearfix"></div>

<div class="row">

  <div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
      <div class="x_title">
        <h2>Datos Generales de la metodologia</h2>

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
            <form action="{{route('salvarestudiante')}}" method="POST" id="form_x" data-parsley-validate class="form-horizontal form-label-left">
                {{ csrf_field() }}
                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Nombre <span class="required">*</span>
                  </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="text" id="first-name" required="required" class="form-control col-md-7 col-xs-12">
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Meta <span class="required">*</span>
                  </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="text" id="last-name" name="last-name" required="required" class="form-control col-md-7 col-xs-12">
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Descripcion <span class="required">*</span>
                  </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    {!! Form::textArea('descripcion', null,['class' => 'form-control', 'required'])!!}
                  </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Institución<span class="required">*</span></label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      {!! Form::select('id_Institution',$institutions,null,['id'=>'institution','class' => 'form-control select-institution',
                          'placeholder' => 'Seleccione una Institucion'])!!}
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Curso</label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      {!! Form::label('id_Grade', 'Grados', ['class' => 'bmd-label-floating'])!!}
                      {!! Form::select('id_Grade',[],null,['id'=>'grade', 'class' => 'form-control '])!!}
                    </div>
                </div>


              </form>
          </div>
        </div>
      </div>
    </div>

  </div>

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
