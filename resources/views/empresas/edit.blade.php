@extends('layouts.app')
@section('content')
<h1>Editar una empresa</h1>
<form action="{{ route('empresas.update',['empresa'=> $empresa->id])}}" method="post">
    @csrf
    @method('PUT')
    <div class="form-row">
        <label>Nombre</label>
    <input class="form-control" type="text" name="Nombre" value="{{ $empresa->Nombre }}" required>
    </div>
    <div class="form-row">
        <label>Direccion</label>
    <input class="form-control" type="text" name="Direccion" value="{{ $empresa->Direccion }}" required>
    </div>
    <div class="form-row">
        <label>Nombre Representante</label>
    <input class="form-control" type="text" name="NombreRepresentante"  value="{{$empresa->NombreRepresentante}}" required>
    </div>
    <div class="form-row">
        <label>NIT</label>
    <input class="form-control" type="text" name="NIT" value="{{ $empresa->NIT}}" required>
    </div>
    <div class="form-row">
        <label>Celular</label>
    <input class="form-control" type="text" name="Celular" value="{{ $empresa->Celular}}" required>
    </div>
    <div class="form-row">
        <button type="submit" class="btn btn-primary btn-lg mt-3">ACTUALIZAR EMPRESA</button>
    </div>
    </form>
    @endsection