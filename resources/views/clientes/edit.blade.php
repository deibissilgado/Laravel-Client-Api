<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
       <!-- Importar el CDN de Tailwind CSS -->
       <script src="https://cdn.tailwindcss.com"></script>
    <title>Document</title>
</head>
<body>
    <div class="container mx-auto px-50 mx-100">
        <p>Clientes</p>
        
        <form action="{{ route('clientes.update', $cliente['id']) }}" method="POST" style="display:inline;">
            @csrf
            @method('PUT')
        
            <table class="table table-striped border ">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Tipo</th>
                        <th>Email</th>
                        <th>Dirección</th>
                        <th>Ciudad</th>
                        <th>Departamento</th>
                        <th>Código Postal</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <!-- Mostrar datos actuales -->
                        <td>{{ $cliente['id'] }}</td>
                        <td>
                            <input type="text" name="name" value="{{ $cliente['name'] }}" class="form-control">
                        </td>
                        <td>
                            <input type="text" name="tipo" value="{{ $cliente['tipo'] }}" class="form-control">
                        </td>
                        <td>
                            <input type="email" name="email" value="{{ $cliente['email'] }}" class="form-control">
                        </td>
                        <td>
                            <input type="text" name="direccion" value="{{ $cliente['direccion'] }}" class="form-control">
                        </td>
                        <td>
                            <input type="text" name="ciudad" value="{{ $cliente['ciudad'] }}" class="form-control">
                        </td>
                        <td>
                            <input type="text" name="departamento" value="{{ $cliente['departamento'] }}" class="form-control">
                        </td>
                        <td>
                            <input type="text" name="codigoPostal" value="{{ $cliente['codigoPostal'] }}" class="form-control">
                        </td>
                        <td class="actions">
                            <button type="submit" class="btn btn-danger btn-sm">Actualizar</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </form>
   
    </div>
</body>
</html>

