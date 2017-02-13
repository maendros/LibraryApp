<?php 

	if(isset($_POST['idcode'])&&isset($_POST['total'])&&isset($_POST['choice'])){

	require_once ('..\conndb\connection.php');
		$db = new DB_CONNECT();

$idcode=$_POST['idcode'];
$total=$_POST['total'];
$choice=$_POST['choice'];


switch ($choice) {
	case 'buy':
		$data=mysql_query("UPDATE books SET booktotal =booktotal+'$total'  WHERE id = '$idcode';");


		break;
		case 'return':

		$data=mysql_query("UPDATE books SET booktotal =booktotal-'$total'  WHERE id = '$idcode';");
		break;

	default:
		echo "No action taken";
		break;
}


		if(!$data){
			echo "error".mysql_error();	
		}else{
			echo "succeed ";
			
		}


	}
echo "</br><a href='..\index.html'>Επιστροφη στην αρχικη</a>";

 ?>