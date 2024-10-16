<?php

if(isset($_POST['btn3'])){

	$btn3=$_POST['btn3'];
	if($btn3=="MODIFICAR")
	{

$ci=$_POST['id_usuario'];
$nombre=$_POST['nombre'];
//
//echo "el ci es: ".$ci."y el nombre es: ".$nombre;
$apellido=$_POST['apellido'];
$password=$_POST['nom_usuario'];
$email=$_POST['email'];
$nro_celular=$_POST['password'];
$direccion=$_POST['id_perfil'];
//$id_sesion=$_POST['id_sesion'];

//primer paso
$consulta="UPDATE usuario SET nombre = '$nombre', apellido = '$apellido', password ='$password', email = '$email', nro_celular='$nro_celular', direccion ='$direccion' WHERE usuario.ci = '$ci'";

//segundo paso
mysqli_query($conexion,$consulta);

echo "<script>alert('usuario modificado de manera correcta')</script>";
   echo '<script>window.location="../administracion.php"</script>';

	}
}

?>