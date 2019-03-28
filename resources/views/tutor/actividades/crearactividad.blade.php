@extends('tutor.plantilla')

@section('subtittle')
  <div class="title_left">
    <h3>Actividades<small> </small> </h3>
  </div>
@endsection

@section('content')
  <div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
      <div class="x_panel">
        <div class="x_title">
          <h2>Crear Actividad</h2>
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



          <form action="{{route('salvaractividad')}}" method="POST" class="form-horizontal form-label-left" novalidate>
            {{ csrf_field() }}

            <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-6">Seleccione un proceso colaborativo: </label>
                <div class="col-md-4 col-sm-6 col-xs-12">
                  {!! Form::select('id_Collaborative_Process',$collaboratives_process,null,['id'=>'institution','class' => 'form-control select-institution',
                      'placeholder' => 'Seleccione un proceso colaborativo'])!!}

                </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Nombre Actividad <span class="required">*</span>
              </label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="text" id="name" name="name_Child_Let_Task" required="required" class="form-control col-md-7 col-xs-12">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="description_task">Descripcion actividad <span class="required">*</span>
              </label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                {!! Form::textArea('description_Child_Let_Task', null,['class' => 'form-control', 'required'])!!}
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="inputs">Entradas <span class="required">*</span>
              </label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="text" id="inputs" name="input_Child_Let_Task" required="required" class="form-control col-md-7 col-xs-12">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="outputs">Salidas <span class="required">*</span>
              </label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="text" id="outputs" name="output_Child_Let_Task" required="required" class="form-control col-md-7 col-xs-12">
              </div>
            </div>
            <div class="ln_solid"></div>
            <div class="form-group">
              <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                <button type="submit" class="btn btn-success">Añadir actividad</button>
              </div>
            </div>
          </form>

        </div>
      </div>
    </div>
  </div>

@endsection
