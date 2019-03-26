@extends('tutor.plantilla')

@section('subtittle')
  <div class="title_left">
    <h3> Creacion de Practica<small> paso 2</small> </h3>
  </div>
@endsection

@section('content')
  <form class="form-horizontal form-label-left" action="" method="post">
    <div class="x_content">

      <table class="table">
        <thead>
          <tr>
            <th>Codigo</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Participacion</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td>Mark</td>
            <td>Otto</td>
            <td>
              <div class="form-group">
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <div class="">
                    <label>
                      <input type="checkbox" class="js-switch" checked />
                    </label>
                  </div>
                </div>
              </div>
            </td>
          </tr>
        </tbody>
      </table>

    </div>
  </form>

</div>
@endsection
