<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;  // para usar  Guzzle HTTP client

class ClientesController extends Controller
{
    /**
     * La URL del servidor API.
     */
    protected $url, $token;

    /**
     * Constructor del controlador.
     */
    public function __construct()
    {
        $this->token = '7|fipoKXf208kneSQgXzAptL9l6G3fBYqefBLpGnzf4bb365c4';
        // Reemplaza con el token real (admin, update, basic)
        // Obten el toquen en  http://laravel-api-rest-ful.test/setup 
        // Inicializamos la URL desde el archivo .env
        $this->url = env('URL_SERVER_API', 'http://127.0.0.1/');

      
    }


    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        // Puedes usar $this->url aquí
              $url = $this->url;
        // Realizamos la solicitud con el token en las cabeceras
        $response = Http::withToken($this->token)->get($this->url.'/clientes');
        // $response = Http::get($this->url.'/clientes');

        $data = $response->json();
     
        return view('clientes.index', compact('data'));
 
      
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */

    public function edit(string $id)
    {
        if ($id) {
            // Hacer la solicitud a la API
            $response = Http::withToken($this->token)->get($this->url . '/clientes/' . $id);

            // Obtener los datos en formato JSON
            $data = $response->json();
           
            // Verificar si la respuesta tiene la clave "data"
            if (isset($data['data'])) {
                // Pasar solo el array interno a la vista
                $cliente = $data['data'];
             
                return view('clientes.edit', compact('cliente'));
            } else {
                // Manejar el caso en que no haya datos
                return redirect()->back()->with('error', 'No se encontraron datos del cliente.');
            }
        } else {
            return redirect()->back()->with('error', 'ID no proporcionado.');
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    { 
            // Validar los datos del formulario (opcional pero recomendado)
            $request->validate([
                'name' => 'required|string|max:255',
                'tipo' => 'required|string|max:1',
                'email' => 'required|email',
                'direccion' => 'required|string|max:255',
                'ciudad' => 'required|string|max:255',
                'departamento' => 'required|string|max:255',
                'codigoPostal' => 'required|string|max:10',
            ]);

            // Datos actualizados del cliente
            $datosActualizados = [
                'name' => $request->input('name'),
                'tipo' => $request->input('tipo'),
                'email' => $request->input('email'),
                'direccion' => $request->input('direccion'),
                'ciudad' => $request->input('ciudad'),
                'departamento' => $request->input('departamento'),
                'codigoPostal' => $request->input('codigoPostal'),
            ];

           // Realizar la solicitud PUT o PATCH a la API
            $response = Http::withToken($this->token)
            ->put($this->url . '/clientes/' . $id, $datosActualizados);
               // Verificar si la solicitud fue exitosa
        if ($response->successful()) {
            // Redirigir con un mensaje de éxito
            return redirect()->route('clientes.index')->with('success', 'Cliente actualizado correctamente.');
        } else {
            // Redirigir con un mensaje de error
            return redirect()->back()->with('error', 'Error al actualizar el cliente.');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
