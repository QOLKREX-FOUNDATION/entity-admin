@extends('adminlte::page')

@section('title', 'Perfil')

@section('content_header')
<h1>PERFIL</h1>
@stop

@section('content')
<div class="col-md-6">
    @if (session('alert'))
        <div class="alert alert-success">{{session('alert')}}</div>
    @endif
    <form method="post" action="{{route('profile.store')}}">
        @csrf
        <label>Contraseña Nueva:</label>
        <input type="password" class="form-control" name="password" id="password" onkeyup="compare()" required minlength="4">
        @error('password-new')
            <span class="alert alert-danger">{{$message}}</span>
        @enderror
        <label>Repetir Contraseña:</label>
        <input type="password" class="form-control" name="password2" id="password2" onkeyup="compare()" required minlength="4">
        <br>
        <button class="btn btn-success" id="button-form" disabled>Actualizar</button>
    </form>
</div>

<script>
    function compare(c=false) {
         document.getElementById("button-form").disabled=true;
        if(document.getElementById("password").value==document.getElementById("password2").value){
            document.getElementById("button-form").disabled=false;
        }
    }
</script>

@stop