<?php
// require_once('db_Connection.php');

date_default_timezone_set('America/Bogota');
session_start();

if (isset($_GET['controller']) && isset($_GET['action'])) {
	if (
		isset($_SESSION['usuario']) or ($_GET['controller'] == 'amaroController' and $_GET['action'] == 'login')
		or ($_GET['controller'] == 'amaroController' and $_GET['action'] == 'index')
		or ($_GET['controller'] == 'amaroController' and $_GET['action'] == 'cerrarSesion')
	) {
		$controller = $_GET['controller'];
		$action = $_GET['action'];
	} //else {
	// 	echo "<script>
	// 		alert('PRIMERO DEBE INICIAR SESION');
	// 		window.location='?controller=amaroController&&action=cerrarSesion';
	// 		</script>";
	// }
} else {
	$controller = 'amaroController';
	$action = 'index';
}
require_once('routing.php');
