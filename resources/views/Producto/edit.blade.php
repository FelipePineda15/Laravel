@extends('layouts.app')

@section('content')
<form action="{{url('Productos/'.$Dato_Producto['id'])}}" method="post">
<input type="hidden" name="_method" value="PUT">
{{csrf_field()}}
    <label>Nombre del Producto</label>
    <input type="text"  value="{{$Dato_Producto['Nombre']}}" required="" placeholder="Nombre" name="Nombre"  tittle="Nombre">
    <br>
    <label>Valor Unitario del Producto</label>
    <input type="text" value="{{$Dato_Producto['ValorUnitario']}}" required="" placeholder="ValorUnitario" name="ValorUnitario"  tittle="ValorUnitario">
    <br>
    <label>Codigo del Producto</label>
    <input type="text" value="{{$Dato_Producto['Codigo']}}" required="" placeholder="Codigo" name="Codigo"  tittle="Codigo">
    <br><br>
    <input type="submit" value="Guardar" title="Guardar">
</form>
@endsection