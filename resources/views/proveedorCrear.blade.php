<!DOCTYPE html>
<html>
<head>
    <title>Formulario de Proveedor</title>
</head>
<body>

<h1>Formulario de Proveedor</h1>

<form action="{{ route('proveedor.guardar') }}" method="post">
    @csrf <!-- Agrega el token CSRF para protección -->
    <label for="nombre">Nombre:</label>
    <input type="text" name="nombre" id="nombre" required><br>
    
    <label for="fechaRegistro">Fecha de Registro:</label>
    <input type="date" name="fechaRegistro" id="fechaRegistro" required><br>
    
    <label for="telefono">Teléfono:</label>
    <input type="tel" name="telefono" id="telefono" required><br>
    
    <label for="correo">Correo:</label>
    <input type="email" name="correo" id="correo" required><br>
    
    <button type="submit">Guardar Proveedor</button>
</form>

</body>
</html>
