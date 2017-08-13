@extends('layouts.master')

@section('content')
<?php $i=1;?>
 <div class="row">
 @foreach( $properties as $propertie )
  <div class="large-6 columns">
      <ul class="pricing-table">
        <li class="title"><img title="{{$propertie->titulo}}" alt="{{$propertie->titulo}}" src="{{$propertie->foto}}"></li>
        <li class="price">{{$propertie->titulo}}</li>
        <li class="description">{{$propertie->descripcion}}</li>
        {{--<li class="cta-button"><a class="button" href="#">Buy Now</a></li>--}}
      </ul>
  </div>
@endforeach
 </div>
 @stop

