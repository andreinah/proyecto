<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MAESTRA SUBSECTORES</title>
</head>
<body>
   <form action="{{route('html.msubsectores.store')}}">
       
       <table>
        <tr>
            <td>SUBSECTORES</td>
            <td>
                <input type="text" name="ciudad" placeholder="Añadir ciudad">
            </td>
            <td><button>Agregar</button></td>
        </tr>
        </table>
   
   </form> 

           <tr>
            <td><input type="button" value="CONSULTAR DANE"></td>
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


        <div align="center">
        <table align="center", cellpadding="10", border="1">
            <tr align=center>
                <th>ID: </th>
                <th>Nombre: </th>
            </tr>   
            @foreach ($sector as $s)


            <tr align="center">
                
                <td>{{$s -> id }}</td>
                <td>{{$s -> nombre }}</td>

                <td>
                    <a href="{{ route('html.msubsectores.update', $s->id) }}"><button type="button">Modificar</button></a>
                    <a href="{{ route('html.msubsectores.destroy', $s->id) }}"><button type="button">Eliminar</button></a></td>
            </tr>   
</body>
</html>