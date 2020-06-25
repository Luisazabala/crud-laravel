<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar</title>
</head>
<body>
    <h1 align="center">Listado de empresas</h1>
    <a class="btn btn-success mb-3" href="{{route('empresas.create')}}">CREAR EMPRESA</a>
    @if(empty($empresas))
    <div class="alert alert-warning">
        La lista de empresas esta vacìa
    </div>
    @else 
        <div class="class-responsive">
         <table class="table table-striped">
            <thead class="thead-light">
            <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Dirección</th>
            <th>Nombre Representante</th>
            <th>NIT</th>
            <th>Celular</th>
            <th>Accion</th> 
            </tr>
            </thead>
            <tbody>
            @foreach($empresas as $empresa)
                    <tr>
                    <td>{{$empresa->id}}</td>
                    <td>{{$empresa->Nombre}}</td>
                    <td>{{$empresa->Direccion}}</td>
                    <td>{{$empresa->NombreRepresentante}}</td>
                    <td>{{$empresa->NIT}}</td>
                    <td>{{$empresa->Celular}}</td>
                    <td><a class ="btn btn-link" href="{{route('empresas.edit', ['empresa' => $empresa->id])}}">Editar</a>
                    <form action="{{route('empresas.delete', ['empresa' => $empresa->id])}}" class="d-inline" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-link">Eliminar</button>
                    </form>
                    </td>
                    </tr>
             @endforeach       
            </tbody>
         </table>
        </div>
    @endif
</body>
</html>