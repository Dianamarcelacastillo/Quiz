@extends('layouts.plantilla')

@section('content')

<h1>Crear company</h1>
<form action="{{route('company.store')}}" method="POST">

    @csrf
    <label>
        Nombre:
        <br>
        <input type="text" name="name">
        <br><br>
    <button type="submit">Enviar Formulario:</button>


        </form>

@endsection