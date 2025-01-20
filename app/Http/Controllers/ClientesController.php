<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;  // para usar  Guzzle HTTP client

class ClientesController extends Controller
{
    /**
     * La URL del servidor API.
     */
    protected $url;

    /**
     * Constructor del controlador.
     */
    public function __construct()
    {
        $token = '7|fipoKXf208kneSQgXzAptL9l6G3fBYqefBLpGnzf4bb365c4';
        // Reemplaza con el token real (admin, update, basic)
        // Obten el toquen en  http://laravel-api-rest-ful.test/setup 
        // Inicializamos la URL desde el archivo .env
        $this->url = env('URL_SERVER_API', 'http://127.0.0.1/');
           // Realizamos la solicitud con el token en las cabeceras
        $response = Http::withToken($token)->get($this->url.'/v1/clientes');
        // $response = Http::get($this->url.'/v1/clientes');
        $data = $response->json();
        
        return view('clientes.index', compact('data'));
      
    }


    /**
     * Display a listing of the resource.
     */
    public function index()
    {
              // Puedes usar $this->url aquí
              $url = $this->url;
              return "URL configurada: $url";
 
      
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
