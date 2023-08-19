<!DOCTYPE html>
<html>
<head>
    <title>Tabla de Productos</title>
</head>
<body>

<h1>Tabla de Productos</h1>
<div class = "table-responsive"></div>
<table border = 1 class = "table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Descripción</th>
            <th>Precio</th>
            <th>Stock</th>  
        </tr>
    </thead>
    <tbody>
        <!-- Aquí puedes agregar los registros de la tabla productos en un ciclo PHP -->
        @foreach($list as $item)
            <tr>

            <td>{{$item->id}}</td>
            <td>{{$item->descripcion}}</td>
            <td>{{$item->precio}}</td>
            <td>{{$item->stock}}</td>
                
                
                
            </tr>
        @endforeach
            
        <!-- Agrega más filas para otros registros -->
    </tbody>
</table>

</body>
</html>
