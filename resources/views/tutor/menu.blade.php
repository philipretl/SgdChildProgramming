<!-- sidebar menu -->
<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
  <div class="menu_section">
    <h3>Practicas</h3>
    <ul class="nav side-menu">
      <li><a><i class="fa fa-puzzle-piece"></i> Mis Metodologias <span class="fa fa-chevron-down"></span></a>
        <ul class="nav child_menu">
          <li><a href="{{route('metodologias')}}">Listar Metodologias</a></li>
          <li><a href="{{route('crearmetodp1')}}">Crear Metodologias</a></li>
          <li><a href="form_wizards.html">Listar Actividades</a></li>
          <li><a href="form_wizards.html">Crear Actividad</a></li>
          <li><a href="form_wizards.html">Listar Practicas</a></li>
          <li><a href="form_wizards.html">Crear Practicas</a></li>
          <li><a href="form_wizards.html">Listar Roles</a></li>
          <li><a href="form_wizards.html">Crear Roles</a></li>


        </ul>
      </li>
      <li><a><i class="fa fa-building"></i> Instituciones<span class="fa fa-chevron-down"></span></a>
        <ul class="nav child_menu">

          <li><a href="{{route('instituciones')}}">Listar</a></li>
          <li><a href="{{route('crearinstituciones')}}">Crear Institucion</a></li>

        </ul>
      </li>

      <li><a><i class="fa fa-edit"></i>Estudiantes<span class="fa fa-chevron-down"></span></a>
        <ul class="nav child_menu">

            <li><a href="{{route('estudiantes')}}">Listar</a></li>
            <li><a href="{{route('crearestudiante')}}">Crear Estudiante</a></li>

        </ul>
      </li>
      <li><a><i class="fa fa-book"></i>Cursos<span class="fa fa-chevron-down"></span></a>
        <ul class="nav child_menu">

          <li><a href="{{route('grados')}}">Listar</a></li>
          <li><a href="{{route('creargrado')}}">Crear Curso</a></li>

        </ul>
      </li>


    </ul>
  </div>

</div>
