@extends('layouts.plantilla')

@section('content')

<h1>Crear Cuerpo</h1>
<form action="{{route('cuerpo.store')}}" method="POST">

    @csrf
    <label>
        Nombre:
        <br>
        <input type="text" name="name">
        <br><br>
    <button type="submit">Enviar Formulario:</button>


        </form>

@endsection