@extends('layouts.app')
@section('content')
<h1>Crear una empresa</h1>
<form action="{{ route('empresas.store') }}" method="post">
    @csrf
    <div class="form-row">
        <label>Nombre</label>
    <input class="form-control" type="text" name="Nombre" value="{{ old('Nombre') }}" required>
    </div>
    <div class="form-row">
        <label>Direccion</label>
    <input class="form-control" type="text" name="Direccion" value="{{ old('Direccion') }}" required>
    </div>
    <div class="form-row">
        <label>Nombre Representante</label>
    <input class="form-control" type="text" name="NombreRepresentante"  value="{{ old('NombreRepresentante') }}" required>
    </div>
    <div class="form-row">
        <label>NIT</label>
    <input class="form-control" type="text" name="NIT" value="{{ old('NIT') }}" required>
    </div>
    <div class="form-row">
        <label>Celular</label>
    <input class="form-control" type="text" name="Celular" value="{{ old('Celular') }}" required>
    </div>
    <div class="form-row">
        <button type="submit" class="btn btn-primary btn-lg mt-3">CREAR EMPRESA</button>
    </div>
    </form>
    @endsection