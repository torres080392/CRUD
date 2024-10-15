<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sucursal;
use App\Models\TipoSucursal;

class SucursalController extends Controller
{

    public function index()
    {
        $sucursales = Sucursal::all(); // Nombre en plural para mayor claridad
        return view('sucursales.index', compact('sucursales'));
    }


    public function create()
    {  
        //traemos los tipos de sucursales para selecionarlos
        $tipoSucursal = TipoSucursal::all();
        //retorna la vista para crear una nueva sucursal
        return view('sucursales.create', compact('tipoSucursal'));
    }


   
    public function store(Request $request)
{
    // Validación de los datos del formulario
    $request->validate([
        'numero' => 'required|integer',
        'nombre' => 'required|string|max:255',
        'ciudad' => 'required|string|max:255', // Cambiado de 'cuidad' a 'ciudad'
        'telefono' => 'required|string|max:15',
        'tipo_sucursal_id' => 'required|exists:tipo_sucursals,id', // Cambiado de 'tipo_sucursals_id' a 'tipo_sucursals,id'
    ]);

    // Crear una nueva instancia de Sucursal
    $sucursal = new Sucursal();
    $sucursal->numero = $request->input('numero');
    $sucursal->nombre = $request->input('nombre');
    $sucursal->cuidad = $request->input('ciudad'); // Cambiado de 'cuidad' a 'ciudad'
    $sucursal->telefono = $request->input('telefono');
    $sucursal->tipo_sucursals_id = $request->input('tipo_sucursal_id'); // Cambiado de 'tipo_sucursals_id' a 'tipo_sucursal_id'

    // Guardar la nueva sucursal en la base de datos
    $sucursal->save();

    // Redirigir a la lista de sucursales con un mensaje de éxito
    return redirect()->route('sucursales.index')->with('success', 'Sucursal creada exitosamente.');
}


 
    public function show($id)
    {
         // Busca el cliente por su ID
         $sucursal = Sucursal::findOrFail($id); // findOrFail lanzará un error 404 si no se encuentra el cliente

         // Devuelve la vista con la sucursal encontrado
         return view('sucursales.show', compact('sucursal'));
    }


    public function edit($id)
    {
        // Obtener la sucursal a editar
        $sucursal = Sucursal::find($id); // Retorna null si no se encuentra
    
        // Verificar si la sucursal fue encontrada
        if (!$sucursal) {
            return redirect()->route('sucursales.index')->with('error', 'Sucursal no encontrada.');
        }
    
        // Obtener los tipos de sucursales para el dropdown
        $tipos_sucursal = TipoSucursal::all();
    
        // Pasar la sucursal y los tipos de sucursal a la vista
        return view('sucursales.edit', compact('sucursal', 'tipos_sucursal'));
    }
    
    public function update(Request $request, $id)
    {
       
    
        // Encontrar la sucursal que se va a actualizar
        $sucursal = Sucursal::findOrFail($id);
    
        // Actualizar los campos de la sucursal
        $sucursal->numero = $request->input('numero');
        $sucursal->nombre = $request->input('nombre');
        $sucursal->cuidad = $request->input('cuidad'); // Asegúrate de que el nombre del campo sea correcto
        $sucursal->telefono = $request->input('telefono');
        $sucursal->tipo_sucursals_id = $request->input('tipo_sucursal_id');
    
        // Guardar los cambios en la base de datos
        $sucursal->save();
    
        // Redirigir al listado de sucursales con un mensaje de éxito
        return redirect()->route('sucursales.index')->with('success', 'Sucursal actualizada correctamente.');
    }
    

    
    public function destroy($id)
    {
          // Encuentra la sucursal por el Id
    $sucursal = Sucursal::find($id);

    // Verifica si la sucursalexiste
    if (!$sucursal) {
        return redirect()->route('sucursales.index')->with('error', 'Sucursal no encontrada.');
    }

    // Elimina sucursal
    $sucursal->delete();

    // Redirige con un mensaje de éxito
    return redirect()->route('sucursales.index')->with('success', 'Sucursal eliminada con éxito.');
    }
}
