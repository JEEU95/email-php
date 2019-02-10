<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Email</title>
    <link rel="stylesheet" href="main.css">
</head>
<body>

<form action="email.php" method="POST">
    
    <textarea name="comment" id="" cols="30" rows="10" required>
        <h3>Solicitud de Servicio</h3>
            <p>Estimado Usuario:
Se le informa que el servicio NombreServicio proporcionado por usted ha sido solicitado
por el usuario NombreCliente.</p>
        <div id="firma">
        <p>Gracias por preferirnos</p>
        <h4>Equipo de Fast Service</h4></div>
        <div id="copy">
        Todos los derechos reservados 2018-2019</div>
    </textarea></p>
    <p class="center"><input type="submit" value="Enviar correo"></p>
</form>  
</body>
</html>