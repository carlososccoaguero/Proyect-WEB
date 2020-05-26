<!DOCTYPE html>
<!--
PREGUNTA 3: (4 puntos)
API Rest: https://jsonplaceholder.typicode.com/photos
•	Requisitos: Deberá de crear un página donde solo se liste  un elemento con todos los datos del archivo JSON, 
las imágenes también deberán ser mostradas a través de las urls que se encuentran en el archivo JSON. 
•	Nota : El usuario del sistema tendrá que ingresar el id;

-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link href="css/style.css" rel="stylesheet" type="text/css"/>
   </head>
    <body>
        <input type="number" placeholder="ingresar código" id="codigo3" class="codigo">
        <div class="boton" onclick="consulta3()">Consultar</div>
        <div id="espera" class="enunciado" style="display:none">Procesando tu consulta</div>
        <div id="Muestra-Consulta3" class="contenedor"> 
            
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="js/js.js" type="text/javascript"></script>
    </body>
</html>
