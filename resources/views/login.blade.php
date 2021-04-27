
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORMULARIO</title>
</head>
<body>

<div align="center">
 

<form action="{{route('login.index')}}"></form>
    <h3> INICIAR SESI&Oacute;N</h3>
        <table>

            <tr>
                <td>NOMBRE DE USUARIO:</td>
                <td><input type="text" placeholder="Ingrese usuario" autocomplete="off" name="logusuario"></td>
            </tr>
            <tr>
                <td>CONTRASEÑA:</td>
                <td><input type="password" placeholder="Contraseña" autocomplete="off" name="logpass"></td>
            </tr>
            <tr>
                <td>
                    <button type="submit">ACCEDER</button>
                </td>
            </tr>
 
            <tr>
                <td>
                    <button type="submit">RECUPERAR CONTRASEÑA</button>
                </td>
            </tr>
        </table>
    </form>
    </div>

<div align="center">
    <form action="{{route('login.store')}}">
        <h3> REGISTRAR USUARIO </h3>
        <table>
            <tr>
                <td>NOMBRE Y APELLIDO:</td>
                <td><input type="text" placeholder="Ingrese su nombre" autocomplete="off" name="regnombre"></td>
            </tr>
            <tr>
                <td>NOMBRE USUARIO:</td>
                <td><input type="text" placeholder="Ingrese nombre de usuario" autocomplete="off" name="regusuario"></td>
            </tr>
            <tr>
                <td>CONTRASEÑA:</td>
                <td><input type="password" placeholder="Contraseña" autocomplete="off" name="regpass"></td>
            </tr>
            <tr>
                <td>
                    <button type="submit">REGISTRAR</button> 
                </td>
            </tr>
        </table>
    </form>
</div>
</body>
</html>