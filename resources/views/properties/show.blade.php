@extends('layouts.master')

@section('content')

<div class="row">
		
		
		
	

	@if( isset( $post ) )
	<div data-alert class="alert-box success radius">
	  Datos guardados
	  <a href="#" class="close">&times;</a>
	</div>
	@endif

	@include('partials.form')
      
</div>
@stop