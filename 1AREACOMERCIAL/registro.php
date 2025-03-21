<?php
//validamos datos del servidor
$user = "root";
$pass = "";
$host = "127.0.0.1";

//conectamos a la base de datos
$connection = mysqli_connect($host, $user, $pass);

//hacemos llamado a los inputs del formulario
$FECHA = $_POST["FECHA"];
$HORA = $_POST["HORA"];
$CLIENTE = $_POST["CLIENTE"];
$PRIORIDAD = $_POST["PRIORIDAD"];
$NOVEDADES = $_POST["NOVEDADES"];

//verificamos la conexion a base datos
if(!$connection) 
{
    echo "No se ha podido conectar con el servidor: " . mysqli_connect_error();
}
else
{
    echo "<b><h3>Hemos conectado al servidor</h3></b>";
}

//indicamos el nombre de la base datos
$datab = "comercial";
//seleccionamos la base de datos
$db = mysqli_select_db($connection, $datab);

if (!$db)
{
    echo "No se ha podido encontrar la Base de Datos";
}
else
{
    echo "<h3>Base de datos seleccionada</h3>";
}

// Escapamos los datos para prevenir inyección SQL
$FECHA = mysqli_real_escape_string($connection, $FECHA);
$HORA = mysqli_real_escape_string($connection, $HORA);
$CLIENTE = mysqli_real_escape_string($connection, $CLIENTE);
$PRIORIDAD = mysqli_real_escape_string($connection, $PRIORIDAD);
$NOVEDADES = mysqli_real_escape_string($connection, $NOVEDADES);

//insertamos datos de registro en MySQL, indicando nombre de la tabla y sus atributos
$instruccion_SQL = "INSERT INTO tabla_form (FECHA, HORA, CLIENTE, PRIORIDAD, NOVEDADES)
                    VALUES ('$FECHA', '$HORA', '$CLIENTE', '$PRIORIDAD', '$NOVEDADES')";
                    
$resultado = mysqli_query($connection, $instruccion_SQL);

if(!$resultado) {
    echo "Error al registrar los datos: " . mysqli_error($connection);
} else {
    echo "<h3>Registro guardado correctamente</h3>";
}

// Consultamos los registros para mostrarlos
$consulta = "SELECT * FROM tabla_form";
$result = mysqli_query($connection, $consulta);

if(!$result) 
{
    echo "No se ha podido realizar la consulta: " . mysqli_error($connection);
}
else 
{
    echo "<table border='1'>";
    echo "<tr>";
    echo "<th>ID</th>";
    echo "<th>FECHA</th>";
    echo "<th>HORA</th>";
    echo "<th>CLIENTE</th>";
    echo "<th>PRIORIDAD</th>";
    echo "<th>NOVEDADES</th>";
    echo "</tr>";

    while ($colum = mysqli_fetch_array($result))
    {
        echo "<tr>";
        echo "<td>" . $colum['ID'] . "</td>";
        echo "<td>" . $colum['FECHA'] . "</td>";
        echo "<td>" . $colum['HORA'] . "</td>";
        echo "<td>" . $colum['CLIENTE'] . "</td>";
        echo "<td>" . $colum['PRIORIDAD'] . "</td>";
        echo "<td>" . $colum['NOVEDADES'] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
}

mysqli_close($connection);

echo '<br><a href="index.html">Volver Atrás</a>';
?>
