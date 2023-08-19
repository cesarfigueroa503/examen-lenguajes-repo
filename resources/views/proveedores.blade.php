<!DOCTYPE html>
<html>
<head>
    <title>Tabla de Proveedores</title>
</head>
<body>

<h1>Tabla de Proveedores</h1>
<div class="table-responsive">
    <table border="1" class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Fecha de Registro</th>
                <th>Teléfono</th>
                <th>Correo</th>
            </tr>
        </thead>
        <tbody>
            <!-- Aquí puedes agregar los registros de la tabla proveedores en un ciclo PHP -->
            @foreach($proveedores as $proveedor)
                <tr>
                    <td>{{$proveedor->id}}</td>
                    <td>{{$proveedor->nombre}}</td>
                    <td>{{$proveedor->fechaRegistro}}</td>
                    <td>{{$proveedor->telefono}}</td>
                    <td>{{$proveedor->correo}}</td>
                </tr>
            @endforeach
            <!-- Agrega más filas para otros registros -->
        </tbody>
    </table>
</div>

</body>
</html>
