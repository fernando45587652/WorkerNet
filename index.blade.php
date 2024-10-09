Inicio Despliegue de datos

<table class="table table-light">

    <thead class="thead-light">
        <tr>
            <th>#</th>
            <th>Primer Nombre</th>
            <th>Segundo Nombre</th>
            <th>Primer Apellido</th>
            <th>Segundo Apellido</th>
            <th>Dui</th>
            <th>Nit</th>
            <th>Fecha de Cumpleaños</th>
            <th>Numero de Telefono</th>
            <th>Casado o Soltero</th>
            <th>Genero</th>
            <th>Nombre Completo</th>
            <th>Apellido Nombre</th>
            <th>posicion</th>
        </tr>
    </thead>
    
    <tbody>
        @foreach ( $empleados as $empleado )
            
      
        <tr>
            <td>{{$loop->iteration}} </td>
            
        </tr>
        @endforeach
    </tbody>
</table>            