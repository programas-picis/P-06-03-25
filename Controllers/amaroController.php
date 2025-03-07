<?php



class amaroController
{
	public function __construct() {}

	function inicio()
	{
		require_once("Views/header.php");
		require_once("Views/navbar.php");
		require_once("Views/sidebar.php");
		require_once('Views/Dashboard.php');
		require_once('Views/footer.php');
	}


	function error()
	{
		require_once('Views/header.php');
		require_once('Views/navbar.php');
		require_once('Views/sidebar.php');
		require_once('Views/error.php');
		require_once('Views/footer.php');
	}


	function index()
	{
		require_once('Views/header.php');
		require_once('Views/login.php');
		// require_once('Views/footer.php');
	}

// 	function molineriatable()
// 	{
// 		$No_guia = isset($_GET['No_guia']) ? $_GET['No_guia'] : '';
// 		$molineriat = molineria::table_molineria();
// 		$guias = obtenerGuias();


// 		require_once('Views/header.php');
// 		require_once('views/navbar.php');
// 		require_once('views/sidebar.php');
// 		require_once('views/molineriatable.php');
// 		require_once('Views/footer.php');
// 	}

// 	function formatopdf()

// 	{
// 		$No_guia = isset($_GET['No_guia']) ? $_GET['No_guia'] : '';
// 		$guias = obtenerGuiasPorNoGuia($No_guia);
// 		$MolineriaData = molineria::molineria_registro($No_guia);
// 		require_once 'Views/formato.php'; // Carga el contenido del formato	
// 	}


// 	function formatopdfcopia()
// 	{
// 		$No_guia = isset($_GET['No_guia']) ? $_GET['No_guia'] : '';
// 		$guias = obtenerGuiasPorNoGuia($No_guia);
// 		$MolineriaData = molineria::molineria_registro($No_guia);
// 		require_once 'Views/formato copy.php'; // Carga el contenido del formato	
// 	}

// 	function responsable()
// 	{

// 		$responsable = Responsable::getAllresponsable();

// 		require_once('Views/header.php');
// 		require_once('views/navbar.php');
// 		require_once('views/sidebar.php');
// 		require_once('views/Responsables.php');
// 		require_once('Views/footer.php');
// 	}

// 	function Registromolineria()
// 	{

// 		$No_guia = isset($_GET['No_guia']) ? $_GET['No_guia'] : '';
// 		$molineriar = molineria::molineria_registro($No_guia);
// 		$tiposemilla = Variedad_semila::getAlltipo_semilla();
// 		$motivoprueba = Prueba_molinera::getAllPrueba_molinera();
// 		$varsem = Variedad_semila::getAllvariedad_semilla();
// 		$tipocultivo = Variedad_semila::getAlltipo_cultivo();
// 		$responsable = Responsable::getAllresponsable();
// 		$guias = obtenerGuiasPorNoGuia($No_guia);
// 		$secado = secado::mostrarGuia($No_guia);


// 		require_once('Views/header.php');
// 		require_once('views/navbar.php');
// 		require_once('views/sidebar.php');
// 		require_once('views/Registromolineria.php');
// 		require_once('Views/footer.php');
// 	}




// 	function filtrarRegistros()
// {
// 	$No_guia = isset($_GET['No_guia']) ? $_GET['No_guia'] : '';
// 	$guias = obtenerGuias();
//     $startDate = $_GET['startDate'] ?? null;
//     $endDate = $_GET['endDate'] ?? null;
//     $registros = []; // Inicializamos como vacío en caso de no haber datos.

//     // Validación de fechas
//     if ($startDate && $endDate) {
//         if ($startDate > $endDate) {
//             $error = 'La fecha de inicio no puede ser mayor que la fecha de fin.';
//         } else {
//             require_once 'models/molineria.php';
//             $registros = molineria::rango_molineria($startDate, $endDate);
//             if (empty($registros)) {
//                 $error = 'No se encontraron registros para este rango de fechas.';
//             }
//         }
//     } else {
//         $error = 'Faltan parámetros de rango de fechas.';
//     }

//     // Cargar la vista con los datos o errores
//     require_once('Views/header.php');
//     require_once('views/navbar.php');
//     require_once('views/sidebar.php');
//     require_once('views/filtrarRegistros.php'); // Aquí se enviarán las variables necesarias.
//     require_once('Views/footer.php');
// }

	

	


// 	function updateMolino()
// 	{
// 		$No_guia = isset($_GET['No_guia']) ? $_GET['No_guia'] : '';

// 		if (!empty($No_guia) && $_SERVER["REQUEST_METHOD"] === "POST") {
// 			$fecha = !empty($_POST["fecha"]) ? $_POST["fecha"] : NULL;
// 			$h_paddys = !empty($_POST["h_paddys"]) ? $_POST["h_paddys"] : NULL;
// 			$I_paddyv = !empty($_POST["I_paddyv"]) ? $_POST["I_paddyv"] : NULL;
// 			$integral = !empty($_POST["integral"]) ? $_POST["integral"] : NULL;
// 			$blancura_integral = !empty($_POST["blancura_integral"]) ? $_POST["blancura_integral"] : NULL;
// 			$muestra_descascarado = !empty($_POST["muestra_descascarado"]) ? $_POST["muestra_descascarado"] : NULL;
// 			$grano_partido_ant_pulido = !empty($_POST["grano_partido_ant_pulido"]) ? $_POST["grano_partido_ant_pulido"] : NULL;
// 			$masa_blanca = !empty($_POST["masa_blanca"]) ? $_POST["masa_blanca"] : NULL;
// 			$grano_partido_des_pulido = !empty($_POST["grano_partido_des_pulido"]) ? $_POST["grano_partido_des_pulido"] : NULL;
// 			$blancura_des_pulido = !empty($_POST["blancura_des_pulido"]) ? $_POST["blancura_des_pulido"] : NULL;
// 			$grano_yesado = !empty($_POST["grano_yesado"]) ? $_POST["grano_yesado"] : NULL;
// 			$grano_danado = !empty($_POST["grano_danado"]) ? $_POST["grano_danado"] : NULL;
// 			$grano_ambarino = !empty($_POST["grano_ambarino"]) ? $_POST["grano_ambarino"] : NULL;
// 			$grano_rojo = !empty($_POST["grano_rojo"]) ? $_POST["grano_rojo"] : NULL;
// 			$observaciones = !empty($_POST["observaciones"]) ? 	$_POST["observaciones"] : NULL;
// 			$Responsable = !empty($_POST["Responsable"]) ? $_POST["Responsable"] : NULL;
// 			$tipo_semilla = !empty($_POST["tipo_semilla"]) ? $_POST["tipo_semilla"] : NULL;
// 			$tipo_cultivo = !empty($_POST["tipo_cultivo"]) ? $_POST["tipo_cultivo"] : NULL;
// 			$infestacion = isset($_POST["infestacion"]) ? $_POST["infestacion"] : NULL;


// 			$guardarMolino = molineria::updatemolineria_datos($No_guia, $fecha, $h_paddys,$I_paddyv, $integral, $blancura_integral, $muestra_descascarado, $grano_partido_ant_pulido, $masa_blanca, $grano_partido_des_pulido, $blancura_des_pulido, $grano_yesado, $grano_danado, $grano_ambarino,$grano_rojo, $observaciones, $Responsable, $tipo_semilla, $tipo_cultivo, $infestacion);
// 			print_r($guardarMolino);
// 			if ($guardarMolino) {
// 				header("Location:?controller=molineriaController&action=Registromolineria&No_guia=$No_guia");
// 				exit;
// 			} else {
// 				echo "<script>
// 						alert('Error al insertar los datos en el registro de molinería...');
// 						//window.location.href = '?controller=molineriaController&action=updateMolino&No_guia=$No_guia';
// 					</script>";
// 			}
// 		}
// 	}


// 	function estadosmolino(){
// 		$No_guia = isset($_GET['No_guia']) ? $_GET['No_guia'] : '';

// 		try {
// 			$completadoimolino = molineria::estadosmolino($No_guia);
// 			if ($completadoimolino) {
// 				header("Location:?controller=molineriaController&action=Registromolineria&No_guia=$No_guia");
// 				header("Cache-Control: no-cache, must-revalidate");
// 				header("Pragma: no-cache");
// 				header("Expires: 0");

// 				exit();
// 			} else {
// 				echo "Error al actualizar el estado.";
// 			}
// 		} catch (Exception $e) {
// 			echo "Error: " . $e->getMessage();
// 		}

// 	}



// 	function login()
// 	{
// 		if ($_SERVER['REQUEST_METHOD'] === 'POST') {
// 			if (isset($_SESSION['usuario']) && isset($_SESSION['rol'])) {
// 				header('Location: ?controller=molineriaController&action=inicio');
// 				exit();
// 			} else {
// 				$usuario = isset($_POST['usuario']) ? $_POST['usuario'] : '';
// 				$contraseña = isset($_POST['contraseña']) ? $_POST['contraseña'] : '';

// 				// Validar credenciales solo si hay datos de usuario y contraseña
// 				if (!empty($usuario) && !empty($contraseña)) {
// 					$rol = usuarios::validarRoles($usuario, $contraseña);

// 					if ($rol) {
// 						// Redirigir a la página adecuada según el rol
// 						header('Location: ?controller=molineriaController&action=inicio');
// 						exit();
// 					} else {
// 						// Mostrar la vista de login con el mensaje de error almacenado en la sesión
// 						header('Location: index.php');
// 						exit();
// 					}
// 				} else {
// 					$_SESSION['alert'] = [
// 						'type' => 'error',
// 						'message' => 'Por favor ingrese usuario y contraseña.'
// 					];
// 					header('Location: index.php');
// 					exit();
// 				}
// 			}
// 		} else {
// 			// Si no se envió el formulario, mostrar la vista de login
// 			require_once('views/header.php');
// 			require_once('views/login.php');
// 			require_once('views/footer.php');
// 		}
// 	}


// 	function cerrarSesion()
// 	{
// 		header("Location:cerrar_sesion.php");
// 	}



 }
