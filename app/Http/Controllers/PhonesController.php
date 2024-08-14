<?php

namespace App\Http\Controllers;

use App\Models\phones;
use Illuminate\Http\Request;

class PhonesController extends Controller
{
    
 

    /**
     * Store guardar un nuevo recurso en el almacenamiento.
     */
    public function store(Request $request)
    {
        //desde el request nos llegaron los siguientes datos ['model', 'color', 'price', 'stock','store']
        //creeamos un nuevo registro de telefonos con los datos que llegan del request
        $phone = phones::create($request->all());
        //retornamos el registro creado con un mensaje 
        return response()->json(['message'=>'Se a añadido un telefono'], 200);
    }

    /**
     * show mostrar el recurso especificado.
     */
    public function show()
    {
        //
    }

    /**
     * edit actualizara el recurso especificado en el almacenamiento.
     */
    public function edit(phones $phones)
    {
        //
    }
    /**
     * destroy eliminar el recurso especificado del almacenamiento.
     */
    public function destroy(phones $phones)
    {
        //
    }
}
