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
    <div class="container mx-auto px-50">
        <p>Clientes</p>
        @if(isset($data['data']) && count($data['data']) > 0)
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
                   @foreach($data['data'] as $cliente)
                   <tr>
                       <td>{{ $cliente['id'] }}</td>
                       <td>{{ $cliente['name'] }}</td>
                       <td>{{ $cliente['tipo'] }}</td>
                       <td>{{ $cliente['email'] }}</td>
                       <td>{{ $cliente['direccion'] }}</td>
                       <td>{{ $cliente['ciudad'] }}</td>
                       <td>{{ $cliente['departamento'] }}</td>
                       <td>{{ $cliente['codigoPostal'] }}</td>
                       <td class="actions">
                           <a href="{{ route('clientes.show', $cliente['id']) }}" class="btn btn-info btn-sm">Ver</a>
                           <a href="{{ route('clientes.edit', $cliente['id']) }}" class="btn btn-warning btn-sm">Editar</a>
                           <form action="{{ route('clientes.destroy', $cliente['id']) }}" method="post" style="display:inline;">
                               @csrf
                               @method('DELETE')
                               <button class="btn btn-danger btn-sm" type="submit">Eliminar</button>
                           </form>
                       </td>
                   </tr>
                   @endforeach
               </tbody>
           </table>
           @else
               <p>No hay clientes</p>
           @endif
    </div>
</body>
</html>

