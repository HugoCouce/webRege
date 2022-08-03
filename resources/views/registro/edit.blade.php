@if(Session::has('mensajeEdit'))
{{ Session::get('mensajeEdit') }}
@endif

Formulario de edición.

<form action="{{ url('/registro/'.$registro->id) }}" method="post" enctype="multipart/form-data">
    @csrf
    {{ method_field('PATCH') }}

    @include('registro.form', ['modo'=>'Editar'])

</form>