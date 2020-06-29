@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                </div>
               <h1 align="center">BIENVENIDO</h1>
               <br>
               <div align="center">
               <img src="/images/kreemo.png" style="width:230px; height:230px">
               </div>
               <br>
                <a class="btn btn-danger btn-lg btn-block" href="{{route('empresas.index')}}">LISTADO DE EMPRESAS</a>
                <a class="btn btn-secondary btn-lg btn-block" href="{{route('empresas.create')}}">CREAR EMPRESA</a>
           
           
        </div>
    </div>
</div>
@endsection
