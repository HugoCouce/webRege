@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Acceso') }}</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    {{ __('Estás logueado.') }}

                    <br><br>

                    <a href="{{ url('registro/create') }}">Nuevo registro</a>

                    <br><br>

                    Aqui saldrán los registros a su nombre.
                </div>
            </div>
        </div>
    </div>
</div>
@endsection