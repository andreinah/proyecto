<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INPUTS CLIENTES</title>
</head>
<body>

    <div align="center">
    <form action="{{route('html.inputclientes.store')}}" method="post">
      <table>
      
          <tr>
              <td>PROCESOS</td>
              <td>
                <select name="procesos">
                    <option value="">opcion 1</option>
                    <option value="">opcion 2</option>
                    <option value="">opcion 3</option>
                </select>
              </td>
          </tr>
          <tr>
            <td>SUBPROCESOS</td>
            <td>
                <select name="subprocesos">
                    <option value="">opcion 1</option>
                    <option value="">opcion 2</option>
                    <option value="">opcion 3</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>ACTIVIDAD</td>
            <td><input type="text" placeholder="Ingrese actividad" name="iactividad"></td>
        </tr>
        <tr>
            <td>SEDES</td>
            <td><input type="text" placeholder="Ingrese sede" name="isedes"></td>
        </tr>
        <tr>
            <td>M&Aacute;QUINA</td>
            <td><input type="text" placeholder="Ingrese maquina" name="imaquina"></td>
        </tr>
        <tr>
            <td>BODEGA</td>
            <td><input type="text" placeholder="Ingrese bodega" name="ibodega"></td>
        </tr>
        <tr>
            <td>NOMBRE DE EMPLEADO</td>
            <td><input type="text" placeholder="Ingrese nombre" name="iempleado"></td>
        </tr>
        <tr>
            <td>CARGO</td>
            <td><input type="text" placeholder="Ingrese el cargo" name="icargo"></td>
        </tr>
        <tr>
            <td>&Aacute;REA</td>
            <td><input type="text" placeholder="Ingrese el area" name="iarea"></td>
        </tr>
        <tr>
            <td>PROCESO</td>
            <td><input type="text" placeholder="Ingrese proceso" name="iproceso"></td>
        </tr>
        <tr>
            <td>CORREO ELECTR&Oacute;NICO</td>
            <td><input type="email" placeholder="Ingrese email" name="iemail"></td>
        </tr>
        <tr>
            <td>TEL&Eacute;FONO</td>
            <td><input type="number" name="itlf" placeholder="Ingrese nro. de telefono"></td>
        </tr>
        <tr>
            <td><button type="submit">Registrar</button></td>
        </tr>
      
        </tr>
      </table>  
    </form>
</div>


 <div align="center">
        <table align="center", cellpadding="10", border="1">
            <tr align=center>
                <th>ID: </th>
                <th>Proceso: </th>
                <th>Subproceso: </th>
                <th>Actividad</th>
                <th>Sede:</th>        
                <th>M&aacute;quina:</th>
                <th>Bodega:</th>
                <th>Empleado:</th>
                <th>Cargo:</th>
                <th>&Aacute;rea:</th>
                <th>Proceso:</th>
                <th>Email:</th>
                <th>Nro. Telef&oacute;nico:</th>
                <th>Opciones: </th>
            </tr>   
            @foreach ($clientes as $c)


            <tr align="center">
                
                <td>{{$c -> id }}</td>
                <td>{{$c -> proceso }}</td>
                <td>{{$c -> subproceso }}</td>
                <td>{{$c ->actividad}}</td>
                <td>{{$c -> sedes}}</td>
                <td>{{$c -> maquina}}</td>
                <td>{{$c -> bodega}}</td>
                <td>{{$c -> empleado}}</td>
                <td>{{$c -> cargo}}</td>
                <td>{{$c -> area}}</td>
                <td>{{$c -> procesoempleado}}</td>
                <td>{{$c -> email}}</td>
                <td>{{$c -> telefono}}</td>
                <td>
                    <a href="{{ route('html.inputclientes.update', $c->id) }}"><button type="button">Modificar</button></a>
                    <a href="{{ route('html.inputclientes.destroy', $c->id) }}"><button type="button">Eliminar</button></a></td>
            </tr>   
        @endforeach
        </table>
      
        </div>



</body>
</html>