<!DOCTYPE html>
<html>
<head>
    <title>Formulario de Empleado</title>
</head>
<body>

<h1>Formulario de Empleado</h1>

<form action="{{ route('empleado.guardar') }}" method="post">
    @csrf 
    <label for="nombre">Nombre:</label>
    <input type="text" name="nombre" id="nombre" required><br>
    
    <label for="apellido">Apellido:</label>
    <input type="text" name="apellido" id="apellido" required><br>
    
    <label for="fechaIngreso">Fecha de Ingreso:</label>
    <input type="date" name="fechaIngreso" id="fechaIngreso" required><br>
    
    <label for="salario">Salario:</label>
    <input type="number" name="salario" id="salario" step="0.01" required><br>
    
    <button type="submit">Guardar Empleado</button>
</form>

</body>
</html>
