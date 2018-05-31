@extends('layouts.app')

@section('content')
<table border="1">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>ValorUnitario</th>
            <th>Codigo</th>
        </tr>
    </thead>

    <tbody>
        @foreach($Productos as $Producto)
            <tr>
                <td>{{ $Producto['id'] }}</td>
                <td>{{ $Producto['Nombre'] }}</td>
                <td>{{ $Producto['ValorUnitario'] }}</td>
                <td>{{ $Producto['Codigo'] }}</td>
                <td><a href="{{url('Productos/'.$Producto['id'].'/edit')}}">Editar</a></td>
                <td>
                    <form action="{{url('Productos/'.$Producto['id'])}}" method="post">
                        <input type="hidden" name="_method" value="DELETE">
                        {{csrf_field()}}
                        <button href="{{url('Productos/'.$Producto['id'].'/edit')}}">Eliminar</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
    <br>
</table>
<br><br>
<h1>Ingrese el producto</h1>
<br>
<form action="{{url('Productos')}}" method="post">
{{csrf_field()}}
    <label>Nombre del Producto</label>
    <input type="text" required="" placeholder="Nombre" name="Nombre"  tittle="Nombre">
    <br>
    <label>Valor Unitario del Producto</label>
    <input type="text" required="" placeholder="ValorUnitario" name="ValorUnitario"  tittle="ValorUnitario">
    <br>
    <label>Codigo del Producto</label>
    <input type="text" required="" placeholder="Codigo" name="Codigo"  tittle="Codigo">
    <br><br>
    <input type="submit" value="Guardar" title="Guardar">
</form>
@endsection