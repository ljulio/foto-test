@extends('layouts.master')

@section('content')
<div class="row">
 	<div data-alert class="alert-box warning radius">
	  Acceso a zona reestringida
	  <a href="#" class="close">&times;</a>
	</div>
      <ul class="small-block-grid-2 medium-block-grid-3 large-block-grid-4">
		  <li><img src="{{URL::asset('assets/img/beach_sunset_1000x750.jpg')}}" width="100" /></li>
		  <li><img src="{{URL::asset('assets/img/lights_400x300.jpg')}}" width="100" /></li>
		  <li><img src="{{URL::asset('assets/img/calatrava_400x300.jpg')}}" width="100" /></li>
		</ul>
</div>
@stop