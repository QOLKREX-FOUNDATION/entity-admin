@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
   <!--page content -->
   <div class="right_col" role="main">

    <div class="row">
      <div class="col-md-12 col-sm-12 ">
        <div class="dashboard_graph">

          <div class="row x_title">
            {{-- <div class="col-md-6">
            </div> --}}
            <div class="col-md-6">
                <i class="fa fa-calendar"></i>
                <span><?php echo date("d/m/Y", time()) ?></span> <b class="caret"></b>
            </div>
          </div>
        </div>
    </div>

          {{-- <div class="col-md-6 col-sm-6  ">
            <div class="x_panel">
            
                    <div class="block">
               
                      <div class="block_content">
                        <h4 class="title">
                          <a>¿Pendientes?</a>
                                    </h4>
                        <div class="byline">
                        </div>
                        <p class="excerpt">Donaciones que aún no han sa han calculado su precio de acuerdo a la fecha de envio.
                        </p>
                      </div>
                    </div>
                 
                    <div class="block">
                  
                      <div class="block_content">
                        <h4 class="title">
                          <a>¿Procesados?</a>
                      </h4>
                        <div class="byline">
                        </div>
                        <p class="excerpt">Donaciones que están esperando el envio de initcoin.
                      </div>
                    </div>
                    <div class="block">
                
                      <div class="block_content">
                        <h4 class="title">
                          <a>Enviados?</a>
                      </h4>
                        <div class="byline">
                        </div>
                        <p class="excerpt">Donaciones que ya se les envio la notificacion de que le fueron enviados sus inticoin.
                        </div>
                    </div>

            </div>
        </div> --}}
        <div class="bs-example col-sm-6" >
              <div class="jumbotron">
                <h1>Buen día, {{Auth::user()->name}} !</h1>
                <p>Bienvenido al panel administrativo</p>
              </div>
        </div>
    </div>
  </div>
</div>
@stop

