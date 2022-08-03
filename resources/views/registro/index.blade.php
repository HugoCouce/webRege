@if(Session::has('mensaje'))
{{ Session::get('mensaje') }}
@endif

<a href="{{ url('registro/create') }}">Nuevo registro</a><br><br>

<h1>Total de registros</h1>

<table class="table table-light">

    <thead class="thead-light">
        <tr>
            <th>Id</th>
            <th>Usuario</th>
            <th>REGE</th>
            <th>Tiempo</th>
            <th>Fecha</th>
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


                <a href="{{ url('/registro/'.$registro->id.'/edit') }}">Editar

                </a> |

                <form action="{{ url('/registro/'.$registro->id) }}" method="post">
                    @csrf
                    {{ method_field('DELETE') }}
                    <input type="submit" onclick="return confirm('¿Quieres borrar este registo?')" value="Borrar">

                </form>

            </td>
        </tr>
        @endforeach

    </tbody>

</table>