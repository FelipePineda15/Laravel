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
        
    }

    public function destroy(){
        
    }

    public function update($Producto, Request $request){
        $ObjProducto = Producto::findOrFail($Producto);
        $ObjProducto->Nombre=$request->Nombre;
        $ObjProducto->ValorUnitario =$request->ValorUnitario;
        $ObjProducto->Codigo =$request->Codigo;
        $ObjProducto->save();
        return redirect('Productos');
    }

    public function edit($Producto){
        $Dato_Producto = Producto::findOrFail($Producto);
        return view('Producto.edit',['Dato_Producto'=>$Dato_Producto]) ;
    }

    public function show(){
        
    }
}
 