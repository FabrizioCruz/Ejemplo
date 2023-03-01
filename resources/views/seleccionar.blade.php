@extends('plantillas.principal')
@section('contenido')
<form action="{{ route('procesar') }}" method="POST">
    @csrf
    QUE IDIOMA DESEAS Usuario
    <input type="text" name="idioma">
    <input type="submit" value="enviar">
</form>
@endsection