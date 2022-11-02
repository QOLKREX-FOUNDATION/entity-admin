@extends('adminlte::page')

@section('title', 'Centros de Registros')

@section('content_header')
    <h1>Centros de Registros</h1>
@stop

@section('content')
    <button class="btn-sm btn-primary text-white" data-toggle="modal" data-target="#nuevo"><i
            class="fa fa-add">Nuevo</i></button>
    <hr>
    @if (session('alert'))
        <div class="alert alert-success">{{ session('alert') }}</div>
    @endif

    @if (session('alertWarning'))
    <div class="alert alert-warning text-white">{{ session('alertWarning') }}</div>
@endif

    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col" style="width: 15%">Imagen</th>
                <th scope="col"  style="width:60%">Nombre</th>
                <th scope="col" style="width: 10%">Tipo</th>
                <th scope="col" style="width: 10%">E-mail</th>
                <th scope="col" style="width: 2%">Teléfono</th>
                @if (Auth::user()->rol == 'Admin')
                    <th scope="col" style="width: 10%">Acción</th>
                @endif
            </tr>
        </thead>
        <tbody>
            @foreach ($centers as $item)
                <tr>
                    <td>
                        <img 
                        src="{{ $item->img }}" 
                        onerror="this.src='{{asset('local.png')}}'"
                        style="max-width: 30px; max-height:30px"
                        alt="centro"
                        /></td>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->type }}</td>
                        <td>{{ $item->email }}</td>
                    <td>{{ $item->phone }}</td>
                    @if (Auth::user()->rol == 'Admin')
                    <td>
                        <button class="btn-sm btn-warning text-white" data-toggle="modal"
                            data-target="#edit{{ $item->id }}"><i class="fa fa-edit"></i></button>
                        <button class="btn-sm btn-danger" data-toggle="modal" data-target="#delete{{ $item->id }}"><i
                                class="fa fa-trash"></i></button>
                    </td>
                @endif
            </tr>
            @include('centers/partials/edit')
            @include('centers/partials/delete')

            @endforeach
        </tbody>
    </table>

    @include('centers/partials/create')

    {{ $centers->links('pagination::bootstrap-4') }}

@stop


@section('js')
    <script src="//cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>

    <script>
        CKEDITOR.replaceClass='ckeditor';
    </script>
@stop
