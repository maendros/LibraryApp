<?php 

	if (isset($_POST['deleteid'])){
require_once ('..\conndb\connection.php');
$db = new DB_CONNECT();
$deleteid=$_POST['deleteid'];

$deleteid=mysql_query("DELETE  FROM books  WHERE id= '$deleteid';");

if(!$deleteid){
	echo "Δεν διαγραφηκε" .mysql_error();
}else{
echo "Διαγραφηκε επιτυχως";
}

}
echo "</br><a href='..\index.html'>Επιστροφη στην αρχικη</a>";
 ?>