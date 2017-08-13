@extends('layouts.master')

@section('content')
<div class="row">
    <div class="large-6 columns">
        <form method="POST" action="/auth/login">
            {!! csrf_field() !!}

            <div>
                Email
                <input type="email" name="email" value="{{ old('email') }}">
            </div>

            <div>
                Comtraseña
                <input type="password" name="password" id="password">
            </div>

            <div>
                <input type="checkbox" name="remember"> Recordarme
            </div>

            <div>
                <button type="submit" class="button success radius">ENTRAR</button>
                <a class="button secondary radius" href="{{url('auth/register')}}">REGISTRARSE</a>
            </div>
        </form>
    </div>
<div>
@stop