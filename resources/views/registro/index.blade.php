@extends('layouts.app')

@section('content')

@if(Session::has('mensaje'))
{{ Session::get('mensaje') }}
@endif

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">{{ __('Total de registros') }}</div>

                <div class="card-body">
                    <table class="table table-light text-center">
                        <thead class="thead-light">
                            <tr>
                                <th>Id</th>
                                <th>Usuario</th>
                                <th>REGE</th>
                                <th>Tiempo %</th>
                                <th>Fecha (a/m/d)</th>
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

                                    <div class="btn-group">
                                        <a class="btn btn-link d-block" href="{{ url('/registro/'.$registro->id.'/edit') }}">Editar</a>

                                        <form action="{{ url('/registro/'.$registro->id) }}" method="post">
                                            @csrf
                                            {{ method_field('DELETE') }}
                                            <input type="submit" class="btn btn-danger space-left" onclick="return confirm('¿Quieres borrar este registo?')" value="Borrar">

                                        </form>
                                    </div>

                                </td>
                            </tr>
                            @endforeach

                        </tbody>
                    </table>
                    <span>
                        {{ $registros->links() }}
                    </span>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection