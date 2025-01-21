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
<body class="text-center px-10 w-full mt-10">
    <div class="relative overflow-x-auto">
        @if(session('error') || session('success'))
            <div class="alert text-red-500">
                {{ session('error') }}
            </div>
            <div class="alert text-green-500">
                {{ session('success') }}
            </div>
        @endif
        <p>Clientes</p>
        @if(isset($data['data']) && count($data['data']) > 0)
           <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
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
                           <a href="{{ route('clientes.show', $cliente['id']) }}" class="text-white bg-gray-700 hover:bg-gray-800 rounded-lg text-sm px-4 py-1 mb-1">Ver</a>
                           <a href="{{ route('clientes.edit', $cliente['id']) }}" class="text-white bg-green-700 hover:bg-green-800 rounded-lg text-sm px-4 py-1  mb-1">Editar</a>
                           <form action="{{ route('clientes.destroy', $cliente['id']) }}" method="post" style="display:inline;">
                               @csrf
                               @method('DELETE')
                               <button class="text-white bg-red-700 hover:bg-red-800 rounded-lg text-sm px-4 py-1  mb-1" type="submit">Eliminar</button>
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

