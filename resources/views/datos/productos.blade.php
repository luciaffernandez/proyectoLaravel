@extends ("layout.plantilla")

@section("productos")
{{$hora}}
<h1>Esta es la seccion de productos</h1>

@isset ($producto_comprado)
<p>Comprado: {{$producto_comprado}}</p>
<br/>
@endisset

@foreach($listadoProductos as $producto)
<form action="productos" method="POST">
    @csrf
    <input type="submit" value="Añadir">
    <input type="hidden" name="producto_comprado" value="{{$producto->cod}}">
    <p>{{$producto->nombre_corto}} {{$producto->PVP}}</p>
</form>
@endforeach

@stop