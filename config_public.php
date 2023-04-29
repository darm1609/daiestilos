<?php	
	global $servidor;
	global $puerto;
	global $usuario;
	global $pass;
	global $basedatos;
	$servidor='localhost';
	$puerto='3306';
	$usuario='vinkasof_daiestilos_user';
	$pass='#Zxoj2J?PCl6';
	$basedatos='vinkasof_daiestilos';
	ini_set("display_errors","Off");
	date_default_timezone_set("America/Bogota");
	setlocale(LC_MONETARY, 'es_CO');
	global $mensajeRecordatorio;
	global $mensajeCreacionCita;
	global $mensajeRecordatorioUnaHora;
	$mensajeRecordatorioUnaHora = "DAI ESTILOS le recuerda que tiene una cita con [empleado] que comienza en aproximadamente 1 hora";
	$mensajeRecordatorio = "DAI ESTILOS le recuerda que tiene una cita con [empleado] el día [dia] a la(s) [hora] [tipo]";
	$mensajeCreacionCita = "DAI ESTILOS le informa que se agendo una cita para el [dia] [hora] con [empleado] [tipo]";
	require("librerias/httpPHPAltiria.php");
	$altiriaSMS = new AltiriaSMS();
	$altiriaSMS->setLogin('darm1609@gmail.com');
	$altiriaSMS->setPassword('ALtR_reac_ok');
	$altiriaSMS->setDebug(false);
?>