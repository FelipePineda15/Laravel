<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Producto;

class ProductoController extends Controller
{
    //
    public function index(){
        $Productos = Producto::all();
        return view('Producto.show',['Productos'=>$Productos]);
    }

    public function store(Request $request){
        $NuevoProducto = new Producto;
        $NuevoProducto->Nombre =$request->Nombre;
        $NuevoProducto->ValorUnitario =$request->ValorUnitario;
        $NuevoProducto->Codigo =$request->Codigo;
        $NuevoProducto->save();
        return redirect ('Productos');
    }

    public function create(){
        $Productos = Producto::all();
        return ('');
    }

    public function destroy(){
        $Productos = Producto::all();
        return ('');
    }

    public function update(){
        $Productos = Producto::all();
        return ('');
    }

    public function edit(){
        $Productos = Producto::all();
        return ('');
    }

    public function show(){
        $Productos = Producto::all();
        return ('');
    }
}
 