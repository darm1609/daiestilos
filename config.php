<?php	
	global $servidor;
	global $puerto;
	global $usuario;
	global $pass;
	global $basedatos;
	$servidor='localhost';
	$puerto='3306';
	$usuario='root';
	$pass='123456';
	$basedatos='vinkasof_daiestilos';
	ini_set("display_errors","On");
	date_default_timezone_set("America/Bogota");
	setlocale(LC_MONETARY, 'es_CO');
	global $mensajeRecordatorio;
	global $mensajeCreacionCita;
	global $mensajeRecordatorioUnaHora;
	$mensajeRecordatorioUnaHora = "DAI ESTILOS le recuerda que tiene una cita con [empleado] que comienza en aproximadamente 1 hora";
	$mensajeRecordatorio = "DAI ESTILOS le recuerda que tiene una cita con [empleado] el día [dia] a la(s) [hora]";
	$mensajeCreacionCita = "DAI ESTILOS le informa que se agendo una cita para el [dia] [hora] con [empleado]";
	require("librerias/httpPHPAltiria.php");
	$altiriaSMS = new AltiriaSMS();
	$altiriaSMS->setLogin('darm1609@gmail.com');
	$altiriaSMS->setPassword('ALtR_reac_ok');
	$altiriaSMS->setDebug(false);
?>