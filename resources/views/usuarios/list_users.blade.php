@extends('layouts.master')
@section('content')
<div class="row">
 	<div data-alert class="alert-box warning radius">
	  Acceso a zona reestringida
	  <a href="#" class="close">&times;</a>
	</div>
</div>

<hr>

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
                    <th>Nombre</th>
                    <th>Correo</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach( $users as $user )
                  <tr>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
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