@extends('layouts.plantilla')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><b> <center> Que Es Una Farmacia </b> <center> </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    Se conoce como farmacia al establecimiento en el cual se venden diferentes tipos de productos relacionados con la salud, especialmente medicamentos. Una farmacia es uno de los tipos de negocios más necesarios con los que debe contar un barrio ya que es ella el único espacio donde se pueden conseguir algunos tipos de medicamentos de gran importancia para la cura de determinadas complicaciones médicas. <br><br>




</div>
            </div>
        </div>
    </div>
</div>
@endsection
