Seccion para crear empleado
<from action="{{url('/empleados')}}" method="post" enctype="multipart/form-data">
{{ csrf_field() }}

<label for="Nombre">{{'Nombre'}} </label>   
<input type="text" name="Nombre" id="Nombre" value="">
<br/>

<label for="Primer Nombre">{{'Primer Apellido'}} </label>   
<input type="text" name="PrimerApellido" id="PrimerApellido" value="">
<br/>

<label for="Segundo Nombre">{{'Segundo Apellido'}} </label>   
<input type="text" name="SegundoApellido" id="SegundoApellido" value="">
<br/>

<label for="Nombre">{{'Dui'}} </label>   
<input type="text" name="Dui" id="Dui" value="">
<br/>

<label for="Nombre">{{'Nit'}} </label>   
<input type="text" name="Nit" id="Nit" value="">
<br/>

<label for="Nombre">{{'Fecha de Cumpleaños'}} </label>   
<input type="text" name="FechadeCumpleños" id="FechadeCumpleaños" value="">
<br/>

<label for="Nombre">{{'Numero de Telefono'}} </label>   
<input type="text" name="NumerodeTelefono" id="NumerodeTelefono" value="">
<br/>

<label for="Nombre">{{'Es casado o soltero'}} </label>   
<input type="text" name="casadosoltero " id="casadosoltero" value="">
<br/>

<label for="Nombre">{{'Genero'}} </label>   
<input type="text" name="Genero" id="Genero" value="">
<br/>

<label for="Nombre">{{'Nombre Completo'}} </label>   
<input type="text" name="NombreCompleto" id="NombreCompleto" value="">
<br/>

<label for="Nombre">{{'Apellido Nombre'}} </label>   
<input type="text" name="ApellidoNombre" id="ApellidoNombre" value="">
<br/>

<label for="Nombre">{{'Id posicion'}} </label>   
<input type="text" name="Idposicion" id="Idposition" value="">
<br/>

<input type="text" value="Agregar">
<br/>
