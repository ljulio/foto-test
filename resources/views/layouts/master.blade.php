<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Agencia Digital en Caracas Venezuela - Diseño y Desarrollo de Páginas Web Venezuela - SEO - Marketing Digital - Wordpress - Redes Sociales.</title>
    <link rel="stylesheet" href="{{URL::asset('assets/css/foundation.css')}}" />
    <script type="text/javascript" src="{{URL::asset('assets/js/vendor/modernizr.js')}}"></script>
</head>
<body>

<div class="row">
      <div class="large-3 columns">
        <h1><img src="{{URL::asset('assets/img/logo.png')}}"/></h1>
      </div>
      <div class="large-9 columns">
        <ul class="right button-group">
          <li><a href="{{url('/')}}" class="button">Inicio</a></li>
          <li><a href="{{url('/propiedades')}}" class="button">Propiedades</a></li>
          @if( Auth::check() )          
          <li><a href="{{url('/usuarios')}}" class="button">Lista de Usuarios</a></li>
          <li><a href="{{url('/auth/logout')}}" class="button">Salir</a></li>
          @endif
        </ul>
      </div>
</div>

<div class="row">
  <div class="large-12 columns">
  <ul class="right">
      <li>Nombre del usuario</li>
   </ul>  
  </div>
</div>



<hr>

 @if( Auth::check() )  
 <div class="row">  
 <div class="large-12 columns"> 
    <div>
      <a href="{{url('/propiedades/create')}}" class="button">Nueva Propiedad (+)</a>
    </div>
  </div>
</div>
@endif

@yield('content')

<footer class="row">
      <div class="large-12 columns">
        <hr/>
        <div class="row">
          <div class="large-6 columns">
            <p>&copy; Copyright <?php echo date('Y'); ?>.</p>
          </div>
        </div>
      </div>
    </footer>
<script type="text/javascript" src="{{URL::asset('assets/js/vendor/jquery.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('assets/js/foundation.min.js')}}"></script>
<script>
    $(document).foundation();
</script>
</body>
</html>