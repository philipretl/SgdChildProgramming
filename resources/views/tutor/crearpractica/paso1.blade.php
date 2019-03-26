@extends('tutor.plantilla')


@section('subtittle')
  <div class="title_left">
    <h3> Crear Practica<small> </small> </h3>
  </div>
@endsection

@section('content')

  <form class="form-horizontal form-label-left" action="" method="post">

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
        <input type="text" id="last-name" name="last-name" required="required" class="form-control col-md-7 col-xs-12">
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-md-3 col-sm-3 col-xs-12">Institucion</label>
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
    <div class="form-group">
      <label class="control-label col-md-3 col-sm-3 col-xs-12">Curso</label>
      <div class="col-md-6 col-sm-9 col-xs-12">
        <select class="form-control">
          <option>Elige el curso...</option>
          <option>Curso a</option>
          <option>Curso b</option>
          <option>Curso c</option>
        </select>
      </div>
    </div>


  </form>

@endsection
