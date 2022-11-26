@extends('layouts.plantilla')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"> <b> <center> Que Es Medicina </b> <center> </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <br>
                   
                  
                    <br>
                    
                    
                    La medicina es una ciencia encargada del estudio de la vida y muerte de los seres humanos, se especializa en todas las áreas que hacen referencia en cuanto a su salud, diagnóstico, tratamiento y prevención de las enfermedades. En otras palabras, es el arte que se ocupa del mantenimiento de la salud o de curar y prevenir afecciones y dolencias en un individuo. Por otra parte se le llama medicina a los medicamentos o componentes, que son recetados por los médicos, que ayudan a sanar o prevenir una enfermedad, y también para aliviar las dolencias físicas <br>
<br>


</div>
            </div>
        </div>
    </div>
</div>
@endsection
