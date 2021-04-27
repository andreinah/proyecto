<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MAESTRA CLIENTES</title>
</head>
<body>
    <form action="{{route('mclientes.store')}}" method="post">
        <table>
            <tr>
               <td>FECHA CREACION</td>
               <td><input type="date" name="fecha" ></td>
            </tr>
            <tr>
                <td>LOGO DE EMPRESA</td>
                <td><button>Agregar archivo<button></td>
            </tr>
            <tr>
                <td>NIT</td>
                <td><input type="text" placeholder="Ingrese NIT" name="nit"></td>
            </tr>
            <tr>
                <td>RAZON SOCIAL</td>
                <td><input type="text" placeholder="Ingrese razon social" name="rsocial"></td>
            </tr>
            <tr>
                <td>NOMBRE DE LA EMPRESA</td>
                <td><input type="text" placeholder="Ingrese nombre empresa" name="empresa"></td>
            </tr>
            <tr>
                <td>ACTIVIDAD COMERCIAL</td>
                <td><input type="text" placeholder="Describa actividad comercial" name="actividad"></td>
            </tr>
            <tr>
                <td>DIRECCION</td>
                <td><input type="text" placeholder="Ingrese direccion" name="direccion"></td>
            </tr>
            <tr>
                <td>PAGINA WEB</td>
                <td><input type="url" name="url" placeholder="www.ejemplo.com"></td>
            </tr>
            <tr>
                <td>TEL&Eacute;FONO</td>
                <td><input type="number" name="tlf"></td>
            </tr>
            <tr>
                <td>SECTOR</td>
                <td>
                    <select name="sector">
                    @foreach ($aplicacion as $app)
                <option value="{{$clientes ->fpago}}">Seleccionar</option>
                
            @endforeach      
                    </select>
                </td>
            </tr>
            <tr>
                <td>SUBSECTOR</td>
                <td>
                    <select name="subsector">
                    @foreach ($aplicacion as $app)
                <option value="{{$clientes ->fpago}}">Seleccionar</option>
                
            @endforeach      
                    </select>
                </td>
            </tr>
            <tr>
                <td>PAIS</td>
                <td>
                    <select name="pais">
                    @foreach ($aplicacion as $app)
                <option value="{{$clientes ->fpago}}">Seleccionar</option>
                
            @endforeach      
                    </select>
                </td>
            </tr>
            <tr>
                <td>DEPARTAMENTO</td>
                <td>
                    <select name="departamento">
                    @foreach ($aplicacion as $app)
                <option value="{{$clientes ->fpago}}">Seleccionar</option>
                
            @endforeach      
                    </select>
                </td>
            </tr>
            <tr>
                <td>CIUDAD</td>
                <td>
                    <select name="ciudad">
                    @foreach ($aplicacion as $app)
                <option value="{{$clientes ->fpago}}">Seleccionar</option>
                
            @endforeach      
                    </select>
                </td>
            </tr>
            <tr>
                <td>BARRIO</td>
                <td><input type="text" placeholder="Ingrese nombre del barrio" name="barrio"></td>
            </tr>
            <tr>
                <td>NUMERO DE EMPLEADOS</td>
                <td><input type="text" placeholder="Cantidad de empleados" name="empleados"></td>
            </tr>
            <tr>
                <td>PERSONA CONTACTO</td>
                <td><input type="text" placeholder="Ingrese nombre del contacto" name="contacto"></td>
            </tr>
            <tr>
                <td>TELEFONO CONTACTO</td>
                <td><input type="number" name="tlfcontacto"></td>
            </tr>
            <tr>
                <td>CORREO ELECTRONICO</td>
                <td><input type="email" placeholder="123@ejemplo.com" name="email"></td>
            </tr>
            <tr>
                <td>ASESOR COMERCIAL</td>
                <td><input type="text" placeholder="Asesor Comercial" name="asesor"></td>
            </tr>
            <tr>
                <td>PLAZO</td>
                <td>
                    <select name="plazo">
                    @foreach ($aplicacion as $app)
                <option value="{{$clientes ->fpago}}">Seleccionar</option>
                
            @endforeach      
                    </select>
                </td>
            </tr>
            <tr>
                <td>CUPO</td>
                <td><input type="text" placeholder="Cupos disponibles" name="cupo"></td>
            </tr>
            <tr>
                <td>
                    <input type="radio" name="activo">ACTIVO
                    <input type="radio" name="activo">INACTIVO
                </td>
            </tr>
            <tr>
                <td>USUARIO</td>
                <td><input type="text" placeholder="Ingrese nombre de usuario" name="usuario"></td>
            </tr>
            <tr>
                <td>CONTRASEÑA</td>
                <td><input type="password" placeholder="Ingrese contraseña" name="pass"></td>
            </tr>
               <tr><td><button>Registrar</button></td></tr>
        </table>
    </form>



  <div align="center">
        
        
        <table align="center", cellpadding="10", border="1">
            <tr align=center>
                <th>ID: </th>
                <th>Fecha de Creaci&oacute;n: </th>
                <th>Logo: </th>
                <th>NIT: </th>        
                <th>Raz&oacute;n social: </th>
                <th>Empresa: </th>
                <th>Actividad comercial: </th>
                <th>Direcci&oacute;n: </th>
                <th>P&aacute;gina Web</th>
                <th>Nro. de Tel&eacute;fono:</th>
                <th>Sector</th>
                <th>Subsector</th>
                <th>Pa&iacute;s</th>
                <th>Departamento: </th>
                <th>Ciudad: </th>
                <th>Barrio: </th>
                <th>Nro. de Empleados: </th>
                <th>Persona de Contacto: </th>
                <th>Nro. de Telef&oacute;no de Contacto: </th>
                <th>Correo Electr&oacute;nico: </th>
                <th>Asesor Comercial: </th>
                <th>Plazo: </th>
                <th>Cupo: </th>
                <th>Usuario: </th>
                <th>Contraseña: </th>
                <th>Opciones: </th>
            </tr>   

           @foreach ($clientes as $c)

            <tr align="center">
                
                <td>{{$c -> id}}></td> 
                <td>{{$c -> fecha}}></td>
                <td>{{$c -> logo}}></td>
                <td>{{$c -> nit}}> ></td>
                <td>{{$c -> rsocial}}> ></td>
                <td>{{$c -> empresa}}>></td>
                <td>{{$c -> actividad}}></td>
                <td>{{$c -> direccion}}> </td>
                <td>{{$c -> url}}></td>
                <td>{{$c -> tlf}}> </td>
                <td>{{$c -> sector}}> ></td>
                <td>{{$c -> subsector}}></td>
                <td>{{$c -> pais}}> </td>
                <td>{{$c -> departamento}}> </td>
                <td>{{$c -> ciudad}}></td>
                <td>{{$c -> barrio}}> </td>
                <td>{{$c -> empleados}}>"</td>
                <td>{{$c -> contacto}}></td>
                <td>{{$c -> tlfcontacto}}> </td>
                <td>{{$c -> email}}> </td>
                <td>{{$c -> asesor}}></td>
                <td>{{$c -> plazo}}> </td>
                <td>{{$c -> cupo}}></td>
                <td>{{$c -> estado}}></td>
                <td>{{$c -> usuario}}> </td>
                <td>{{$c -> pass}}> ?>"</td>
                <td>
                    <a href="{{ route('maplicaciones.update', $clientes->codigo) }}"><button type="button">Modificar</button></a>
                    <a href="{{ route('maplicaciones.update', $clientes->codigo) }}"><button type="button">Eliminar</button></a></td>


            </tr>   
    
                @endforeach
          
 
        </table>
     <button>Generar reporte</button>
        </div>

   


</body>
</html>