<div class="panel">
  <a class="panel-heading" role="tab" id="headingTwo" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="true" aria-controls="collapseOne">
    <h4 class="panel-title">Equipo: {{$c_b->team->name_Team}}</h4>
  </a>
  <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
    <div class="panel-body">
      <p><strong>Descripcion: {{$c_b->team->description_Team}}</strong>
      </p>
      <p><strong>Integrantes del equipo</strong>
      </p>
      <table class="table table-bordered">
        <thead>
          <tr>
            <th>#</th>
            <th>Nombre</th>
            <th>Edad</th>
            <th>Cod. Estudiante</th>

          </tr>
        </thead>
        <tbody>


            @foreach ($team as $child)
              <tr>
                <th scope="row">{{$child->id_Child}}</th>
                <td>{{$child->name_Child}}</td>
                <td>{{$child->age_Child}}</td>
                <td>{{$child->student_Code_Child}}</td>
                

              </tr>
            @endforeach

        </tbody>
      </table>
    </div>
  </div>
</div>
