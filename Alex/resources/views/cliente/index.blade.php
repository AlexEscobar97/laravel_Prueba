<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Cliente</title>
</head>
<body>
    <div class="container">
        <h1>GESTION DE CLIENTES</h1>
        <div class="row">
            <div class="col-xl-12">
                <from action="{{route('cliente.index')}}" method="get">
                    <div class="form-row">
                        <div class="col-sm-5 ">
                           <input type="text" class="form-control" name="texto" value="{{$texto}}"> 
                        </div>
                        <div class="col-auto">
                            <input type="submit" class="btn btn-primary" value="Buscar">
                        </div>
                        <div class="col-auto">
                            <a href="{{route('cliente.create')}}" class="btn btn-success">Nuevo</a>
                        </div>
                    </div>
                   
                </from>
            </div>
        
            <div class="col-xl-12">
                <div class="table-responsive">
                    <table class="table table-stripod">
                        <thead>
                            <tr>
                                <th>Opciones</th>
                                <th>ID</th>
                                <th>Nombre</th>
                                <th>Apellido</th>
                                <th>Documento</th>
                                <th>Direccion</th>
                                <th>Telefono</th>
                                <th>Email</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                        @if(count($clientes)<=0)
                            <tr>
                                <td colspan="8">No hay resultados</td>
                            </tr>
                        @else
                            @foreach ($clientes as $cliente)
                            <tr>
                                <td><a href="{{route('cliente.edit',$cliente->id)}}" class="btn btn-warning">Editar</a> / 
                                    <form action="{{route('cliente.destroy',$cliente->id)}}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <input type="submit" class="btn btn-danger" value="eliminar">
                                    </form>
                                </td>
                                <td>{{$cliente->id}}</td>
                                <td>{{$cliente->nombre}}</td>
                                <td>{{$cliente->apellido}}</td>
                                <td>{{$cliente->documento}}</td>
                                <td>{{$cliente->direccion}}</td>
                                <td>{{$cliente->telefono}}</td>
                                <td>{{$cliente->gmail}}</td>
                            </tr>
                            @endforeach
                           @endif
                        </tbody>
                    </table>
                </div>
            </div> 
        </div> 
    </div>  
</body>
</html>