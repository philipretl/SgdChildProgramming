<div class="">
  @isset($child_let_task->practices)
    @if ($child_let_task->practices!=null)
      <h4>Practicas Normales</h4>
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

          @foreach ($child_let_task->practices as $practice)
            <tr>
              <th scope="row">1</th>
              <td>{{$practice->name_Practice}}</td>
              <td>{{$practice->description_Practice}}</td>
              <td>{{$practice->inputs_Practice}}</td>
              <td>{{$practice->outputs_Practice}}</td>
              <td>
                <a href="#" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Editar </a>
                <a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Eliminar </a>
              </td>
            </tr>
          @endforeach


      </tbody>
    </table>
    @endif
  @endisset
</div>

<div class="">
  @isset($child_let_task->practices_smt)
    @if ($child_let_task->practices_smt!=null)
      <h4>Practicas Smt</h4>

    <table class="table">
      <thead>
        <tr>
          <th>#</th>
          <th>Nombre Practica Smt</th>
          <th>Descripcion Practica Smt</th>
          <th>Entradas</th>
          <th>Salidas</th>
          <th>Opciones</th>
        </tr>
      </thead>
      <tbody>

          @foreach ($child_let_task->practices_smt as $practice_smt)
            <tr>
              <th scope="row">1</th>
              <td>{{$practice_smt->name_Practice_Smt}}</td>
              <td>{{$practice_smt->description_Practice_Smt}}</td>
              <td>{{$practice_smt->inputs_Practice_Smt}}</td>
              <td>{{$practice_smt->outputs_Practice_Smt}}</td>
              <td>
                <a href="#" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Editar </a>
                <a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Eliminar </a>
              </td>
            </tr>
          @endforeach

      </tbody>
    </table>
    @endif
  @endisset
</div>

<div class="">

      @isset($child_let_task->practices_gender)
        @if ($child_let_task->practices_gender!=null)
          <h4>Practicas Genero</h4>
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

                @foreach ($child_let_task->practices_gender as $practice_gender)
                  <tr>
                    <th scope="row">1</th>
                    <td>{{$practice_gender->name_Practice_Gender}}</td>
                    <td>{{$practice_gender->description_Practice_Gender}}</td>
                    <td>{{$practice_gender->inputs_Practice_Gender}}</td>
                    <td>{{$practice_gender->outputs_Practice_Gender}}</td>
                    <td>{{$practice_gender->orientation_Practice_Gender}}</td>
                    <td>{{$practice_gender->indicator_Practice_Gender}}</td>

                    <td>
                      <a href="#" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Editar </a>
                      <a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Eliminar </a>
                    </td>
                  </tr>
                @endforeach

            </tbody>
          </table>
          @endif
      @endisset
</div>
