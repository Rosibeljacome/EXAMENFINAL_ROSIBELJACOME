@extends('layouts.plantilla')

@section('content')
<br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('EDITAR MEDICAMENTO') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('Ingrese Nuevos Datos') }}
                    {{ session('status') }}

                    <form action="{{route('editamedicina', $farmacia->id)}}" method="POST">
                        @csrf

                        <label>
                            Cantidad: <br>
                            <input name="Cantidad" type="text" value="{{$farmacia->Cantidad}}">
                        </label>

                        <label>
                            Nombre: <br>
                            <input name="Nombre" type="text" value="{{$farmacia->Nombre}}">
                        </label>

                        <label>
                            Marca: <br>
                            <input name="Marca" type="text" value="{{$farmacia->Marca}}">
                        </label>

                        <label>
                        Precio: <br>
                            <input name="Precio" type="text" value="{{$farmacia->Precio}}">
                        </label>

                        <button type="submit">Guardar Cambios</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection