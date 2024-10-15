<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;

class ClienteController extends Controller
{

    public function index()
    {
        $clientes = Cliente::all(); // Nombre en plural para mayor claridad
        return view('clientes.index', compact('clientes'));
    }


    public function create()
    {
        //retorna la vista para crear un nuevo cliente
        return view('clientes.create');
    }


    public function store(Request $request)
    {
          // Validar los datos de entrada
          $request->validate([
            'nombres' => 'required|string|max:255',
            'apellidos' => 'required|string|max:255',
            'documento' => 'required|string|max:20', // Ajusta el tamaño según tus necesidades
            'direccion' => 'required|string|max:255',
            'telefono' => 'required|string|max:15', // Ajusta el tamaño según tus necesidades
        ]);

        // Crear un nuevo cliente
        Cliente::create([
            'Nombres' => $request->nombres,
            'Apellidos' => $request->apellidos,
            'Documento' => $request->documento,
            'Direccion' => $request->direccion,
            'Telefono' => $request->telefono,
        ]);

        // Redirigir a la lista de clientes con un mensaje de éxito
        return redirect()->route('clientes.index')->with('success', 'Cliente creado exitosamente.');
    }

    

    public function show($id)
    {
         // Busca el cliente por su ID
         $cliente = Cliente::findOrFail($id); // findOrFail lanzará un error 404 si no se encuentra el cliente

         // Devuelve la vista con el cliente encontrado
         return view('clientes.show', compact('cliente'));
    }


    public function edit($id)
    {
        // Encuentra el cliente por ID o devuelve un error 404 si no se encuentra
        $cliente = Cliente::findOrFail($id);
        
        // Pasa la variable $cliente a la vista 'clientes.edit'
        return view('clientes.edit', compact('cliente'));
    }


    public function update(Request $request, $id)
    {
        // Validar la solicitud
        $request->validate([
            'nombres' => 'required|string|max:255',
            'apellidos' => 'required|string|max:255',
            'documento' => 'required|string|max:20', // Ajusta el tamaño según tus necesidades
            'direccion' => 'required|string|max:255',
            'telefono' => 'required|string|max:15', // Ajusta el tamaño según tus necesidades
        ]);
    
        // Buscar el cliente por ID
        $cliente = Cliente::find($id);
    
        // Verificar si el cliente existe
        if (!$cliente) {
            return redirect()->route('clientes.index')->with('error', 'Cliente no encontrado.');
        }
    
        // Actualizar los campos del cliente
        $cliente->Nombres = $request->nombres;
        $cliente->Apellidos = $request->apellidos;
        $cliente->Documento = $request->documento;
        $cliente->Direccion = $request->direccion;
        $cliente->Telefono = $request->telefono;
    
        // Guardar los cambios en la base de datos
        $cliente->save();
    
        // Redirigir con un mensaje de éxito
        return redirect()->route('clientes.index')->with('success', 'Cliente actualizado con éxito.');
    }
    


    public function destroy($id)
    {
            // Encuentra el cliente por ID
    $cliente = Cliente::find($id);

    // Verifica si el cliente existe
    if (!$cliente) {
        return redirect()->route('clientes.index')->with('error', 'Cliente no encontrado.');
    }

    // Elimina el cliente
    $cliente->delete();

    // Redirige con un mensaje de éxito
    return redirect()->route('clientes.index')->with('success', 'Cliente eliminado con éxito.');
    }






}
