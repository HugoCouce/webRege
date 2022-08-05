@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">

                    <div class="row">
                        <div class="col-sm-6">
                            <p>{{ __('Registros de ') }} {{ Auth::user()->name }}</p>
                        </div>

                        <div class="col-sm-6">
                            <a href="{{ url('registro/create') }}" class="d-flex justify-content-end">Nuevo registro</a>
                        </div>
                    </div>


                </div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    <br><br>

                    <table class="table table-light">
                        <thead class="thead-light">
                            <tr>
                                <th>Usuario</th>
                                <th>REGE</th>
                                <th>Tiempo</th>
                                <th>Fecha</th>
                                <th>Operaciones</th>
                            </tr>
                        </thead>

                        <tbody>

                            @foreach ($registros as $registro)
                            @if ($registro->usuario == Auth::user()->id)
                            <tr>
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
                            @endif
                            @endforeach

                        </tbody>

                    </table>

                </div>
            </div>
        </div>
    </div>
    @endsection