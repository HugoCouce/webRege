@extends('layouts.app')

@section('content')

@if(Session::has('mensajeEdit'))
{{ Session::get('mensajeEdit') }}
@endif

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Edición de registros') }}</div>

                <div class="card-body">
                    <form action="{{ url('/registro/'.$registro->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        {{ method_field('PATCH') }}

                        <div class="form-group row">
                            <label for="inputUserId" class="col-sm-2 col-form-label">Código de usuario:</label>
                            <div class="col-sm-10">
                                <input type="text" name="usuario" value="{{ isset($registro->usuario)?$registro->usuario:'' }}" class="form-control" id="inputUserId">
                            </div>
                        </div>
                        @include('registro.form', ['modo'=>'Editar'])

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection