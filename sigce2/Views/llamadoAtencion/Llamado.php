<?php
require("../../Model/conexion.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="../../Controllers/llamdoAtencionControllers/Consultarid.php" 
    method="post" enctype="multipart/form-data">
</select>
        <label for="apellido">Programa:</label>
        <select name="program">
            <option value="">SELECCIONE EL PROGRAMA</option>
            <?php
        $sql= "SELECT ide_Pro,nom_Pro FROM programa";
        $query = mysqli_query(conectar(), $sql);
        while($values = mysqli_fetch_array($query)){
        echo '<option value="'.$values['ide_Pro'].'">'.$values['nom_Pro'].'</option>';}
    
?>
        </select><br><br>
        <label for="apellido">Ficha:</label>
        <select name="ficha">
            <option value="">SELECCIONE LA FICHA</option>
            <?php
        $sql= "SELECT ide_Fic FROM ficha";
        $query = mysqli_query(conectar(), $sql);
        while($values = mysqli_fetch_array($query)){
        echo '<option value="'.$values['ide_Fic'].'">'.$values['ide_Fic'].'</option>';}
?>
        </select><br><br>

        <label for="apellido">Tipo de identificación:</label>
        <select name="Tide">
            <option value="0">SELECCIONE EL TIPO DE IDENTIFICACIÓN</option>
            <option value="CEDULA DE CIUDADANIA">CEDULA DE CIUDADANIA</option>
            <option value="TARJETA DE IDENTIDAD">TARJETA DE IDENTIDAD</option>
            <option value="CEDULA DE EXTRANJERIA">CEDULA DE EXTRANJERIA</option>
        </select><br><br>

        <label for="Identificación">Identificación del aprendiz:</label>
        <input name="ideApr" type="text" placeholder="Ingrese la identificacion: " required><br><br>

        
        <label for="Identificación">Identificación del instructor:</label>
        <input name="ideIns" type="text" placeholder="Ingrese la identificacion: " required><br><br>

        <label for="motivo">Motivo:</label>
            <input name="motivo" type="text" placeholder="Ingrese el apellido: " required><br><br>

         <label for="apellido">Gravedad: </label><br>
            <input type="radio" name="gravedad" value="gravisima"><span> Gravisima</span><br>
            <input type="radio" name="gravedad" value="grave"><span> Grave</span><br>
            <input type="radio" name="gravedad" value="leve"><span> Leve</span><br>

        <label for="apellido">Selecciona Evidencias: </label><br>
            <input type="file" name="ARCHIVO"><br><br>

    <button type="submit">Enviar</button>
        
    </form>
</body>
</html>