<!DOCTYPE html>
<html>
<head>
    <title>Editar Producto</title>
</head>
<body>
    <h1>Editar Producto</h1>

    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form action="{{ route('productos.update', $producto->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" id="nombre" value="{{ $producto->nombre }}" required>
        <br>

        <label for="descripcion">Descripción:</label>
        <textarea name="descripcion" id="descripcion" required>{{ $producto->descripcion }}</textarea>
        <br>

        <label for="precio">Precio:</label>
        <input type="text" name="precio" id="precio" value="{{ $producto->precio }}" required>
        <br>

        <button type="submit">Actualizar</button>
    </form>
</body>
</html>
