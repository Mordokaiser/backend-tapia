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
        //obtenemos todos los registros de telefonos
        $phones = phones::all();
        //retornamos los registros de telefonos
        return response()->json(['message'=>'Se enviaron todos los celulares','phones'=>$phones], 200);
    }

    /**
     * edit actualizara el recurso especificado en el almacenamiento.
     */
    public function edit(Request $request)
    {
        //obtenemos el telefono que queremos editar
        $phone = phones::find($request->id);
        //actualizamos los datos del telefono
        $phone->update($request->all());
        //retornamos el telefono actualizado
        return response()->json(['message'=>'datos actualizados', 'phones'=>$request], 200);
    }
    /**
     * destroy eliminar el recurso especificado del almacenamiento.
     */
    public function destroy(Request $request)
    {   //obtenemos el telefono q vamos a eliminar
        $phones = phones::find($request->id);
        //eliminamos el telefono
        $phones->delete();
        //retornamos un mensaje
        return response()->json(['message'=>'Se a eliminado un telefono'], 200);
    }
}
