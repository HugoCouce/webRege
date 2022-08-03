Formulario de creación.

<form action="{{ url('/registro') }}" method="post" enctype="multipart/form-data">
    @csrf
    <!-- Token de seguridad -->

    @include('registro.form', ['modo'=>'Crear']);   

</form>