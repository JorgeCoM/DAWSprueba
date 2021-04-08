<?php
// establece los parametros de la conexion con el localhost y el perfil de la base de datos
$servername =   "localhost";
$username   =   "elcoca";
$password   =   'jklqwer123321';
$dbname     =   "cliente_c";

// recibe los parametros para la conexion 
$conexion=mysqli_connect($servername,$username,$password,"$dbname");
if($conexion === false)
{
  // en caso de algun error en la conexion lo recojera y lo mostrara
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

/*se declara una variable que recogera los datos del formulario */ 

// variables para pedidos
$PROPIETARIO = $_POST['NombreTx'];
$NOMBRE_WEB = $_POST['sitioTx'];
$TEMA_WEB = $_POST['temaTx'];
$CORREO = $_POST['correoTx'];
$COMENTARIO = $_POST['comentarioTx'];

/*se declara una variable a la cual se le pase el query observacion si el ID de la tabla se auto genera se le devera pasar
la la informacion en el orden que esta la tabla*/ 

// inserta los datos proporcionado por el registro de Encargos
$insertar = "INSERT into pedidos (PROPIETARIO,NOMBRE_WEB,TEMA_WEB,CORREO,COMENTARIO)
 values('$PROPIETARIO','$NOMBRE_WEB','$TEMA_WEB ','$CORREO','$COMENTARIO')";

//--------------------------------------------------------------------------------------------------------------//

// variables para trabajo
$NOMBRE_T = $_POST['NombreTJx'];
$APELLIDO_T = $_POST['ApllidoTJx'];
$CORREO_T = $_POST['CorreoTJx'];
$TELEFONO_T = $_POST['TelefonoTJx'];
$EDAD_T = $_POST['EdadTJx'];
$HABLILIDAD_T = $_POST['habilTJx'];

// inserta los datos proporcionado por el registro de Treabajos
$insertar = "INSERT into trabajos (NOMBRE,APELLIDO,CORREO_ELECTRONICO,TELEFONO_C,EDAD,HABILIDAD)
 values('$NOMBRE_T','$APELLIDO_T','$CORREO_T','$TELEFONO_T','$EDAD_T','$HABILIDAD_T')";

 //--------------------------------------------------------------------------------------------------------------//

// variables para Problemas
$NOMBRE_P = $_POST['Nombre_P'];
$APELLIDO_P = $_POST['Apellido_P'];
$CORREO_P = $_POST['Correo_P'];
$TeLEFONO_P = $_POST['Telefono_P'];
$COMENTARIO_P = $_POST['Comentario_P'];

// inserta los datos proporcionado por el registro de problemas
$insertar = "INSERT into problemas (NOMBRE,APELLIDO,CORREO_ELECTRONICO,COMENTARIO,Telefono_2)
 values('$NOMBRE_P','$APELLIDO_P','$CORREO_P','$COMENTARIO_P','$TeLEFONO_P')";

//--------------------------------------------------------------------------------------------------------------//

$name = $_POST['Nombre_P'];
$mail = $_POST['Correo_P'];
$phone = $_POST['Telefono_P'];
$message = $_POST['Comentario_P'];

$header = 'From: ' . $mail . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$message = "Este mensaje fue enviado por: " . $name . " \r\n";
$message .= "Su e-mail es: " . $mail . " \r\n";
$message .= "Teléfono de contacto: " . $phone . " \r\n";
$message .= "Mensaje: " . $_POST['message'] . " \r\n";
$message .= "Enviado el: " . date('d/m/Y', time());

$para = 'rox.lenox@gmail.com';
$asunto = 'Duda o problema';

mail($para, $asunto, utf8_decode($message), $header);

header("Location:index.html");

//--------------------------------------------------------------------------------------------------------------//
// confirma si la conexion esta abierta y manda los datos
if ($conexion->query($insertar) === TRUE) {
      echo ''; 
}   
else {
  echo 'Error: '. $conexion->error;
}

// cierra la conexion
mysqli_close($conexion);
echo "Datos guardados correctamente";
?>