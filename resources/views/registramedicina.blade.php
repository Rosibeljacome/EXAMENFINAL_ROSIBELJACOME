@extends('layouts.plantilla')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><center> <b> Registros De Medicina </b> </center> </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('Registrar Nuevo Medicamento') }}

                    <form action="{{route('guardarmedicina')}}" method="POST">
                        @csrf
                        <label>
                        Cantidad: <br>
                            <input name="Cantidad" type="text">                  
                        </label>

                        <label>
                            Nombre: <br>
                            <input name="Nombre" type="text">
                        </label>

                        <label>
                            Marca:<br>
                            <input name="Marca" type="text">
                        </label>

                        <label>
                            Precio:<br>
                            <input name="Precio" type="text">
                        </label>

                        <button type="submit">Guardar</button>
                    
                        </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection