@extends('adminlte::page')

@section('title', 'Usuarios')

@section('content_header')
<h1>Usuarios</h1>
@stop

@section('content')
<button class="btn-sm btn-primary text-white" data-toggle="modal" data-target="#nuevoUser"><i
        class="fa fa-add">Nuevo</i></button>
<hr>
@if (session('alert'))
<div class="alert alert-success">{{session('alert')}}</div>
@endif

<table class="table table-hover">
    <thead>
        <tr>
            <th scope="col">Nombre</th>
            <th scope="col">Email</th>
            <th scope="col">rol</th>
            @if (Auth::user()->rol=="Admin")
            <th scope="col">Acción</th>
            @endif
        </tr>
    </thead>
    <tbody>
        @foreach ($users as $item)
        <tr>
            <td>{{$item->name}}</td>
            <td>{{$item->email}}</td>
            <td>{{$item->rol}}</td>
            @if (Auth::user()->rol=="Admin")
            <td>
                <button class="btn-sm btn-warning text-white" data-toggle="modal" data-target="#editUser{{$item->id}}"><i class="fa fa-edit"></i></button>
                <button class="btn-sm btn-danger" data-toggle="modal" data-target="#deleteUser{{$item->id}}"><i class="fa fa-trash"></i></button>
            </td>
            @endif
        </tr>
        @include('users/partials/edit')
        @include('users/partials/delete')

        @endforeach
    </tbody>
</table>

@include('users/partials/create')

{{ $users->links( "pagination::bootstrap-4") }}




@stop