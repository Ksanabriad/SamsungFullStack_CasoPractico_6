<?php
if(isset($_POST['submit'])){
    $nombre=$_POST['nombre'];
    $apellidos=$_POST['apellidos'];
    $email=$_POST['email'];
    /*
  if(empty($nombre) || empty($apellidos)||empty($email)){
        echo"<p>Todos los campos del formulario deben esta rellenos";
        exit();
    }else{
    echo"<h1>Formulario enviado correctamte</h1>";
        echo"<br>";
        echo"<h3>Los datos del usuario son: </h3>";
        echo"<br>";
        echo"<p>Nombre: $nombre </p>";
        echo"<p>Apellidos: $apellidos </p>";
        echo"<p>Correo electrónico: $email </p>";}}
        
        
        */

//Datos de la conexion
$servername="localhost:3308";
$username="root";
$password="";
$dbname="cursosql";

//Crear conexion
$connection = mysqli_connect($servername, $username, $password, $dbname);
//Validar conexion
if($connection->connect_error){
    echo "No conectado";
    die("Conexion fallida en codigo de Kathe: ".$connection->connect_error);
}else{
    echo "Conectado";
    echo "<br>";
}
$sql="INSERT INTO usuario (nombre, apellido, email) VALUES ('$nombre', '$apellidos', '$email')";
if($connection->query($sql)===TRUE){
    echo "Nuevo registro creado satisfactoriamente";
}else{
            echo "Error: ".sql."<br>".$connection->error;
        }
$connection->close();

}
?>