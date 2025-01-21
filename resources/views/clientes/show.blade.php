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
                           <a href="{{ route('clientes.index') }}" class="text-white bg-gray-700 hover:bg-gray-800 rounded-lg text-sm px-4 py-1 mb-1">Volver</a>
                  
                       </td>
                   </tr>
               
               </tbody>
           </table>
            <!-- Mostrar facturas del cliente -->
            <h2 class="mt-20 ">Facturas del cliente</h2>
            @if (isset($cliente['facturas']) && count($cliente['facturas']) > 0)
                <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                    <thead>
                        <tr>
                            <th>Cantidad</th>
                            <th>Estado</th>
                            <th>Fecha Facturada</th>
                            <th>Fecha Pagada</th>
                  
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($cliente['facturas'] as $factura)
                            <tr>
                                <td>{{ $factura['cantidad'] }}</td>
                                <td>{{ $factura['estado'] }}</td>
                                <td>{{ $factura['fechaFacturada'] }}</td>
                                <td>{{ $factura['fechaPagada'] }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @else
                <div class="alert alert-info">
                    Este cliente no tiene facturas registradas.
                </div>
            @endif
   
    </div>
</body>
</html>

