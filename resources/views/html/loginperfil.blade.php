

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PERFIL</title>
</head>
<body>

 <div align="center">
        <H3>PERFIL DE USUARIO</H3>
        
        <table align="center", cellpadding="10", border="1">
            <tr align=center>
                <th>Nombre: </th>
                <th>Nombre de Usuario: </th>
                <th>Contraseña</th>
                <th>Cambiar contraseña</th>
            </tr>   
           
           <?php 
session_start();

?>

   @foreach ($users as $u)



            <tr align="center">           
                <td>{{$u -> nombre}}</td>
                <td>{{$u -> usuario}}</td>
                <td>{{$u -> pass}}</td>
                <td><input type="text" name="inputpass">        
            </tr>  

        </table>
       <a href="{{ route('html.loginperfil.update', $users->codigo) }}"><button type="button">Modificar</button></a>
       <a href="{{ route('html.loginperfil.discon', $users->codigo) }}"><button>Desconectar</button></a>
        </div>

        @endforeach

</body>
</html>
