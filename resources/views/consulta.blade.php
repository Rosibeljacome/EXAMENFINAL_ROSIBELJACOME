@extends('layouts.plantilla')

@section('content')
<br>


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
            <b><div class="card-header">{{ __('CONSULTA DE TODOS LOS MEDICAMENTOS') }}</div></b>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <table class="table col-12">
                        <thread>
                            
                                <tr>
                                    
                                    <td><b>CANTIDAD</b></td>
                                    <td><b>NOMBRE</b></td>
                                    <td><b>MARCA</b></td>
                                    <td><b>PRECIO</b></td>
                                    <td><b>ACCION</b></td>
                                    
                                </tr>
                            
                    </thread>
                        <tbody>
                            @foreach($farmacia as $farmacia)
                            
                            <tr>
                                <td>{{$farmacia->Cantidad}}</td>
                                <td>{{$farmacia->Nombre}}</td>
                                <td>{{$farmacia->Marca}}</td>
                                <td>{{$farmacia->Precio}}</td>
                                <td>
                                <a href="{{route('eliminarmedicina',$farmacia->id)}}" class="btn btn-danger">Borrar</a>
                                </td>
                                <td>
                                <a href="{{route('muestramedicina',$farmacia->id)}}" class="btn btn-warning">Editar</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection