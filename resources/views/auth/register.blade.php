@extends('layouts.master')

@section('content')
<div class="row">
    <div class="large-6 columns">
        <form method="POST">
        {!! csrf_field() !!}

        <div>
            Nombre
            <input type="text" name="name" value="{{ old('name') }}">
        </div>

        <div>
            Email
            <input type="email" name="email" value="{{ old('email') }}">
        </div>

        <div>
            Contraseña
            <input type="password" name="password">
        </div>

        <div>
            Confirmar Contraseña
            <input type="password" name="password_confirmation">
        </div>

        <div>
                <button type="submit" class="button success radius">REGISTRARSE</button>
        </div>
        </form>
    </div>
<div>
@stop