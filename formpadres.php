<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Fomulario Prueba</title>
    </head>

    <body>

        <form action="addPadre.php" method="post" name="Padre">

            <label>DPI</label>
            <input name="DPI" type="text" size="15" maxlength="50">
            
            <label>Primer Nombre</label>
            <input name="primerNombre" type="text" size="15" maxlength="50">

            <label>Segundo Nombre</label>
            <input name="segundoNombre" type="text" size="15" maxlength="50">

            <label>Primer Apellido</label>
            <input name="primerApellido" type="text" size="15" maxlength="50">

            <label>Segundo Apellido</label>
            <input name="segundoApellido" type="text" size="15" maxlength="50">

            <label>Direccion</label>
            <input name="direccion" type="text" size="15" maxlength="50">

            <label>Telefono</label>
            <input name="telefono" type="text" size="15" maxlength="50">

            <label>Profesion</label>
            <input name="profesion" type="text" size="15" maxlength="50">

            <label>Direccion de Trabajo</label>
            <input name="direccionTrabajo" type="text" size="15" maxlength="50">

            <label>Telefono Trabajo</label>
            <input name="telefonoTrabajo" type="text" size="15" maxlength="50">

            <label>Correo</label>
            <input name="correoElectronico" type="text" size="15" maxlength="50">


            <input name="Enviar" type="submit" value="Enviar">
            <input name="Cancelar" type="reset" value="Cancelar">

        </form>


<form action="file-upload.php" method="post" enctype="multipart/form-data">
    <input type="file" name="uploads[]" multiple>
    <input type="submit" name="submit" value="Submit" />
</form> 

    </body>
</html>
