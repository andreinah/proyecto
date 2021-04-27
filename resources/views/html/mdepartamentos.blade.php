<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MAESTRA DEPARTAMENTOS Y CIUDADES</title>
</head>
<body>
   <form action="{{route('html.mdepartamentos.store')}}">
       <table>
                <tr>
            <td>CIUDAD</td>
            <td>
                <input type="text" name="subsector" placeholder="Añadir ciudad">
            </td>
        </tr>
        <tr>
            <td>DEPARTAMENTO</td>
            <td>
                <input type="text" name="sector" placeholder="Añadir departamento">
            </td>
        </tr>
        <tr>
            <td><input type="button" value="CONSULTAR DIAN"></td>
        </tr>
        <tr>
            <td><input type="submit" value="GUARDAR"></td>
        </tr>
        <tr>
            <td><input type="button" value="MODIFICAR"></td>
        </tr>
        <tr>
            <td><input type="button" value="ELIMINAR"></td>
        </tr>
        <tr>
            <td><input type="button" value="GENERAR REPORTE"></td>
        </tr>
       </table>


       <div align="center">
        <table align="center", cellpadding="10", border="1">
            <tr align=center>
                <th>ID: </th>
                <th>Nombre: </th>
                <th>Ciudad: </th>

            </tr>   
            @foreach ($departamento as $d)


            <tr align="center">
                
                <td>{{$d -> id }}</td>
                <td>{{$d -> nombre }}</td>
                <td>{{$d -> idproceso }}</td>

                <td>
                    <a href="{{ route('html.mdepartamentos.update', $d->codigo) }}"><button type="button">Modificar</button></a>
                    <a href="{{ route('html.mdepartamentos.destroy', $d->codigo) }}"><button type="button">Eliminar</button></a></td>
            </tr>   
        


   </form> 
</body>
</html>