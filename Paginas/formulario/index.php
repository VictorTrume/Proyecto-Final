<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Formulario de Contacto</title>
        <link href="colores.css" rel="stylesheet" /> 
    </head>
    <body>
        <!--FRONT END-->
        <h2>Formulario de Contacto</h2>

        <form class="clientes" action="guardar.php" method="POST" id="contact_form" runat="server" enctype="multipart/form-data">

            <label for="Nombre">Nombre:</label><br>
            <input type="text" id="Nombre" name="Nombre" maxlenght="30"required  pattern="pattern=".{3,}" ><br>

            <label for="Apellido">Apellido:</label><br>
            <input type="text" id="Apellido" name="Apellido" maxlenght="60"required  pattern="[a-z]{4,25}" ><br><br>

            <label for="Calle">Calle:</label><br>
            <input type="text" id="Calle" name="Calle" maxlenght="60"required pattern="[a-z]{3,30}" ><br><br>

           <button class="submit" type="submit">Enviar Registro</button>
        </form>
        
    </body>
</html>