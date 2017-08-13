@extends('layouts.master')

@section('content')
<div class="row">

 
      <div class="large-12 columns">

        <div class="section-container tabs" data-section>
          <section class="section">
            <h5 class="title"><a href="#panel1"> 
            </a></h5>
              <div class="large-12 columns">
                <table width="100%">
                <thead>
                  <tr>
                    <th>Titulo</th>
                    <th>Descripcion</th>
                    <th>Foto</th>
                    <th>Acción</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach( $properties as $propertie )
                  <tr>
                    <td>{{$propertie->titulo}}</td>
                    <td>{{$propertie->descripcion}}</td>
                    <td><img title="{{$propertie->titulo}}" alt="{{$propertie->titulo}}" src="{{$propertie->foto}}"></td>
                    <td>
                      <a href="{{url('propiedades/')}}/{{$propertie->id}}" class="button tiny radius secondary">MODIFICAR</a>
                      <a href="{{url('propiedades/destroy/')}}/{{$propertie->id}}" class="button tiny radius alert">ELIMINAR</a>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
              </div>
              
          </section>
        </div>
      </div>
      
</div>
@stop