<!DOCTYPE html>
<html>
<head>
    <title>Tabla de Empleados</title>
</head>
<body>

<h1>Tabla de Empleados</h1>
<div class="table-responsive">
    <table border="1" class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Fecha de Ingreso</th>
                <th>Salario</th>
            </tr>
        </thead>
        <tbody>
            <!-- Aquí puedes agregar los registros de la tabla empleados en un ciclo PHP -->
            @foreach($empleados as $empleado)
                <tr>
                    <td>{{$empleado->id}}</td>
                    <td>{{$empleado->nombre}}</td>
                    <td>{{$empleado->apellido}}</td>
                    <td>{{$empleado->fechaIngreso}}</td>
                    <td>{{$empleado->salario}}</td>
                </tr>
            @endforeach
            <!-- Agrega más filas para otros registros -->
        </tbody>
    </table>
</div>

</body>
</html>
