@extends('tutor.plantilla')

@section('subtittle')
  <div class="title_left">
    <h3> Creacion de Practica<small> paso 3</small> </h3>
  </div>
@endsection

@section('content')
  <form class="form-horizontal form-label-left" action="" method="post">

    <div class="form-group">
      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name_Role">Nombre rol <span class="required">*</span>
      </label>
      <div class="col-md-6 col-sm-6 col-xs-12">
        <input type="text" id="name_Role" required="required" class="form-control col-md-7 col-xs-12">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="description_Role">Descripcion rol <span class="required">*</span>
      </label>
      <div class="col-md-6 col-sm-6 col-xs-12">
        <input type="text" id="description_Role" name="description_Role" required="required" class="form-control col-md-7 col-xs-12">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="type_Role">Tipo rol <span class="required">*</span>
      </label>
      <div class="col-md-6 col-sm-6 col-xs-12">
        <input type="text" id="type_Role" name="type_Role" required="required" class="form-control col-md-7 col-xs-12">
      </div>
    </div>
  </form>
@endsection
