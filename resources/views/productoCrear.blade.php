<!DOCTYPE html>
<html>
<head>
    <title>Formulario de Producto</title>
</head>
<body>

<h1>Formulario de Producto</h1>

<form action="{{route('producto.guardar')}}" method="post">
    @csrf 
    <label for="descripcion">Descripción:</label>
    <input type="text" name="descripcion" id="descripcion" required><br>
    
    <label for="precio">Precio:</label>
    <input type="number" name="precio" id="precio" step="0.01" required><br>
    
    <label for="stock">Stock:</label>
    <input type="number" name="stock" id="stock" required><br>

    <label for="pagaIsv">¿Paga ISV?</label>
    <input type="checkbox" name="pagaIsv" id="pagaIsv" value="1"><br>
    
    <button type="submit">Guardar Producto</button>
</form>

</body>
</html>
