@extends('layouts.app')

@section('content')

@if(Session::has('mensaje'))
{{ Session::get('mensaje') }}
@endif

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Total de registros') }}</div>

                <div class="card-body">
                    <table class="table table-light">
                        <thead class="thead-light">
                            <tr>
                                <th>Id</th>
                                <th>Usuario</th>
                                <th>REGE</th>
                                <th>Tiempo</th>
                                <th>Fecha</th>
                                <th>Operaciones</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($registros as $registro)
                            <tr>
                                <td>{{ $registro->id }}</td>
                                <td>{{ $registro->usuario }}</td>
                                <td>{{ $registro->rege }}</td>
                                <td>{{ $registro->tiempo }}</td>
                                <td>{{ $registro->fecha }}</td>
                                <td>


                                    <a class="btn btn-success" href="{{ url('/registro/'.$registro->id.'/edit') }}">Editar</a>

                                    <form action="{{ url('/registro/'.$registro->id) }}" method="post">
                                        @csrf
                                        {{ method_field('DELETE') }}
                                        <input type="submit" class="btn btn-primary" onclick="return confirm('¿Quieres borrar este registo?')" value="Borrar">

                                    </form>

                                </td>
                            </tr>
                            @endforeach

                        </tbody>

                    </table>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection