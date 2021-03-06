	@extends('layouts.default')
	@section('content')
	<h1>saludo lista empleados </h1>
    <table class="table table-hover">
        <thead>
            <tr>
                <th> id </th>
                <th> codigo </th>
                <th> nombre </th>
                <th> estado </th>
                <th> acciones </th>    
            </tr>
        </thead>
        <tbody>
        @foreach ( $empleados as $empleado )
        <tr>
            <td>{{ $empleado->id}}</td>
            <td>{{ $empleado->codigo}}</td>
            <td>{{ $empleado->nombre}}</td>
            <td>{{ $empleado->estado}}</td>
            <td>
            <button href=  {{url("empleados/".$empleado->id) }} type="button" class="btn btn-secondary">Ver</button> 
            <button type="button" class="btn btn-primary">Editar</button>
            <button type="button" class="btn btn-danger">Eliminar</button>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
<script>
document.querySelectorAll("button").forEach(el => {
     el.addEventListener('click', (ev) => {
         window.location.href = ev.target.getAttribute('href');
    })
})
</script>
@stop

