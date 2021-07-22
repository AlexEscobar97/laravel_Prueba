<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
      <title>EDITAR DATOS</title>
</head>
<body>
    <div class="container">
        <h3>Editar</h3>
        <div class="row">
            <div class="col-xl-12">
                <form action="{{route('cliente.update',$cliente->id)}}" method="post">
                   @csrf 
                   @method('PUT')
                <div class="form-group">
                        <label for="nombre">Nombre</label>
                        <input type="text" name="nombre" class="form-control" id="" value="{{$cliente->nombre}}">
                    </div>
                    <div class="form-group">
                        <label for="apellido">Apellido</label>
                        <input type="text" name="apellido" class="form-control" id="" value="{{$cliente->apellido}}">
                    </div>
                    <div class="form-group">
                        <label for="documento">Documento</label>
                        <input type="text" name="documento" class="form-control" id="" value="{{$cliente->documento}}">
                    </div>
                    <div class="form-group">
                        <label for="direccion">Direccion</label>
                        <input type="text" name="direccion" class="form-control" id="" value="{{$cliente->direccion}}">
                    </div>
                    <div class="form-group">
                        <label for="telefon">Telefono</label>
                        <input type="text" name="telefono" class="form-control" id="" value="{{$cliente->telefono}}">
                    </div>
                    <div class="form-group">
                        <label for="gmail">Correo</label>
                        <input type="text" name="gmail" class="form-control" id="" value="{{$cliente->gmail}}">
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Editar" class="btn btn-primary" id="">
                        <input type="submit" value="Cancelar" class="btn btn-default" id="">
                        <a href="javascript:history.back()">Ir al listado</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>