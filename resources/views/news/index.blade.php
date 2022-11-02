@extends('adminlte::page')

@section('title', 'Noticias')

@section('content_header')
    <h1>Noticias</h1>
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
                <th scope="col"  style="width:60%">Título</th>
                <th scope="col"  style="width:5%">Destacado</th>
                <th scope="col"  style="width:5%">Autor</th>
                <th scope="col" style="width: 10%">Fecha Cre.</th>
                <th scope="col" style="width: 10%">Fecha Pub.</th>
                <th scope="col" style="width: 2%">Estado</th>
                @if (Auth::user()->rol == 'Admin')
                    <th scope="col" style="width: 8%">Acción</th>
                @endif
            </tr>
        </thead>
        <tbody>
            @foreach ($news as $item)
                @php 
                    $item->date_publish = date('Y-m-d', strtotime($item->date_publish));
                @endphp 
                <tr>
                    <td>{{ $item->title_es }}</td>
                    <td>@if($item->featured==1) SI @else NO @endif</td>
                    <td>{{ $item->autor }}</td>
                    <td>{{ $item->created_at }}</td>
                    <td>{{ $item->date_publish }}</td>
                    <td><div style="margin: 0;padding: 0.2rem .5rem"  class=" @if ($item->status == 'Pendiente') alert alert-warning text-white  @elseif ($item->status == 'Publicado') alert alert-success @endif">
                            {{ $item->status }}</div> </td>
                    @if (Auth::user()->rol == 'Admin')
                        <td>
                            <button class="btn-sm btn-warning text-white" data-toggle="modal"
                                data-target="#edit{{ $item->id }}"><i class="fa fa-edit"></i></button>
                            <button class="btn-sm btn-danger" data-toggle="modal" data-target="#delete{{ $item->id }}"><i
                                    class="fa fa-trash"></i></button>
                        </td>
                    @endif
            </tr>
            @include('news/partials/edit')
            @include('news/partials/delete')

            @endforeach
        </tbody>
    </table>

    @include('news/partials/create')

    {{ $news->links('pagination::bootstrap-4') }}

@stop


@section('js')
    <script src="//cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>

    <script>
        CKEDITOR.replaceClass='ckeditor';
    </script>
@stop
