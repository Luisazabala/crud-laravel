@extends('layouts.app')
@section('content')
<style>
    .form-signin {
    width: 100%;
    max-width: 430px;
    padding: 15px;
    margin: auto;
    }
    </style>

<form action="{{ route('empresas.update',['empresa'=> $empresa->id])}}"class="form-signin" method="post">
<div class="card-header">
<h1 align="center"><b>EDITAR EMPRESA<b></h1></div>
    @csrf
    @method('PUT')
    <div class="card text-white bg-secondary mb-3" style="align:center">
    <div class="col-md-12 mb-12" align="center" >
        <label>Nombre</label>
    <input class="form-control" type="text" name="Nombre" value="{{ $empresa->Nombre }}" required>
   
        <label>Direccion</label>
    <input class="form-control" type="text" name="Direccion" value="{{ $empresa->Direccion }}" required>

        <label>Nombre Representante</label>
    <input class="form-control" type="text" name="NombreRepresentante"  value="{{$empresa->NombreRepresentante}}" required>
    
        <label>NIT</label>
    <input class="form-control" type="text" name="NIT" value="{{ $empresa->NIT}}" required>
   
        <label>Celular</label>
    <input class="form-control" type="text" name="Celular" value="{{ $empresa->Celular}}" required>
    <br>
    </div>
    </div>
    <div class="form-row">
        <button type="submit" class="btn btn-danger btn-lg btn-block">ACTUALIZAR EMPRESA</button>
        <a class="btn btn-secondary btn-lg btn-block" href="{{route('empresas.index')}}">VOLVER</a>
    </div>
    </form>
    @endsection
    