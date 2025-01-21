<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Cliente</title>
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
    <!-- Contenedor principal -->
    <div class="min-h-screen flex items-center justify-center">
        <!-- Formulario (ocupa el 50% del ancho y está centrado) -->
        <div class="w-full max-w-md">
            <h1 class="text-2xl font-bold mb-6 text-center">Crear Cliente
                <a href="{{ route('clientes.index') }}" class="text-white bg-green-700 hover:bg-green-800 rounded-lg text-sm px-4 py-1  mb-1">Volver</a>
            </h1>

            <!-- Mostrar errores generales (por ejemplo, errores de la API) -->
            @if ($errors->any())
                <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-6">
                    <ul class="list-disc list-inside">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <!-- Formulario -->
            <form action="{{ route('clientes.store') }}" method="POST" class="bg-white p-6 rounded-lg shadow-md">
                @csrf

                <!-- Campo: Nombre -->
                <div class="mb-4">
                    <label for="name" class="block text-gray-700 font-bold mb-2">Nombre</label>
                    <input type="text" name="name" id="name" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" value="{{ old('name') }}" required>
                    @error('name')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Campo: Tipo -->
                <div class="mb-4">
                    <label for="tipo" class="block text-gray-700 font-bold mb-2">Tipo</label>
                    <input type="text" name="tipo" id="tipo" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" value="{{ old('tipo') }}" required>
                    @error('tipo')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Campo: Email -->
                <div class="mb-4">
                    <label for="email" class="block text-gray-700 font-bold mb-2">Email</label>
                    <input type="email" name="email" id="email" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" value="{{ old('email') }}" required>
                    @error('email')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Campo: Dirección -->
                <div class="mb-4">
                    <label for="direccion" class="block text-gray-700 font-bold mb-2">Dirección</label>
                    <input type="text" name="direccion" id="direccion" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" value="{{ old('direccion') }}" required>
                    @error('direccion')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Campo: Ciudad -->
                <div class="mb-4">
                    <label for="ciudad" class="block text-gray-700 font-bold mb-2">Ciudad</label>
                    <input type="text" name="ciudad" id="ciudad" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" value="{{ old('ciudad') }}" required>
                    @error('ciudad')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Campo: Departamento -->
                <div class="mb-4">
                    <label for="departamento" class="block text-gray-700 font-bold mb-2">Departamento</label>
                    <input type="text" name="departamento" id="departamento" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" value="{{ old('departamento') }}" required>
                    @error('departamento')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Campo: Código Postal -->
                <div class="mb-6">
                    <label for="codigoPostal" class="block text-gray-700 font-bold mb-2">Código Postal</label>
                    <input type="text" name="codigoPostal" id="codigoPostal" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" value="{{ old('codigoPostal') }}" required>
                    @error('codigoPostal')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Botón de envío -->
                <button type="submit" class="w-full bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500">
                    Crear Cliente
                </button>
            </form>
        </div>
    </div>
</body>
</html>