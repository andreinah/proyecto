<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MAESTRA APLICACIONES</title>
</head>
<body>
    <div align="center">

   <form action="{{route('html.maplicaciones.store')}}" method="post">
      <h3>MAESTRA APLICACIONES</h1>
      
       <table>
        <tr>
            <td>NOMBRE APLICACI&Oacute;N</td>
            <td><input type="text" name="nombre" placeholder="Ingrese el nombre"></td>
        </tr>
        <tr>
            <td>FORMA DE PAGO</td>
            <td>
                <select name="pago" >
            @foreach ($aplicacion as $app)
                <option value="{{$apps ->fpago}}">Seleccionar</option>
                
            @endforeach                 
                </select>
            </td>
        </tr>
        <tr>
            <td>N&Uacute;MERO DE DOCUMENTOS</td>
            <td><input type="number" name="documentos" placeholder="Cantidad de documentos" ></td>
        </tr>
        <tr>
            <td>ESPACIOS ALMACENADOS</td>
            <td><input type="number" name="almacenamiento" placeholder="Espacio almacenado"></td>
        </tr>
        <tr>
            <td>N&Uacute;MERO DE EMPLEADOS</td>
            <td><input type="number" name="empleados" placeholder="Cantidad de empleados" ></td>
        </tr>
        <tr>
            <td>
            <button type="submit">Registrar nueva aplicaci&oacute;n</button>
            </td>
        </tr>
         </table>

         <br><br>
   </form> 
    </div>

        <div align="center">
        
        
        <table align="center", cellpadding="10", border="1">
            <tr align=center>
                <th>Código: </th>
                <th>Nombre de Aplicaci&oacute;n: </th>
                <th>Forma de pago: </th>
                <th>Nro. Documentos: </th>        
                <th>Espacio de Almacenamiento: </th>
                <th>Nro. Empleados: </th>
                <th>Opciones: </th>
            </tr>   


@foreach ($aplicacion as $apps)
            <tr align="center">
                
                <td>{{$apps -> codigo}} </td>
                <td>{{$apps -> nombre}}></td>
                <td>{{$apps -> fpago}}></td>
                <td>{{$apps -> ndocumentos}}></td>
                <td>{{$apps -> nalmacenamiento}}></td>
                <td>{{$apps -> nempleados}}></td>
                <td>
                    <a href="{{ route('maplicaciones.update', $apps->codigo) }}"><button type="button">Modificar</button></a>
                    <a href="{{ route('maplicaciones.destroy', $apps->codigo) }}" ><button type="button">Eliminar</button></a></td>
            </tr>   
        
        @endforeach
        </table>
      
        </div>


</body>
</html>