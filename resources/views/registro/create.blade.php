@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Nuevo registro') }}</div>

                <div class="card-body">
                    <form action="{{ url('/registro') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <!-- Token de seguridad -->


                        <div class="form-group row">
                            <label for="inputUserId" class="col-sm-2 col-form-label">Código de usuario:</label>
                            <div class="col-sm-10">
                                <input type="text" name="usuario" value="{{ Auth::user()->id }}" class="form-control" id="inputUserId">
                            </div>
                        </div>

                        @include('registro.form', ['modo'=>'Crear'])

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection