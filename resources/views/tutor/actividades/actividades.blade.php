@extends('tutor.plantilla')

@section('subtittle')
  <div class="title_left">
    <h3> Mis Actividades<small> </small> </h3>
  </div>
@endsection

@section('content')
  <div class="row">
    <div class="col-md-12">
      <div class="x_panel">
        <div class="x_title">
          <h2> Creadas <small>  </small></h2>

          <div class="clearfix"></div>
        </div>
        <div class="x_content">

          <div class="row">

            <p>A continuación podrá visualizar, editar o eliminar las prácticas creadas </p>

            @foreach ($collaborative_Process as $c_b)
              <div class="col-md-55">
                <div class="thumbnail">
                  <div class="image view view-first">
                    <img style="width: 100%; display: block;" src="images/media.jpg" alt="image" />
                    <div class="mask">
                      <p>Practica {{$c_b->id_Collaborative_Process}}</p>
                      <div class="tools tools-bottom">
                        <a href="practica.html"><i class="fa fa-eye"></i></a>
                        <a href="#"><i class="fa fa-pencil"></i></a>
                        <a href="#"><i class="fa fa-times"></i></a>
                      </div>
                    </div>
                  </div>
                  <div class="caption">
                    <p>{{$c_b->name_Collaborative_Process}}</p>
                    <p>meta: {{$c_b->goal_Collaborative_Process}}</p>
                  </div>

                </div>
              </div>
            @endforeach



          </div>
        </div>
      </div>
    </div>
  </div>

@endsection
