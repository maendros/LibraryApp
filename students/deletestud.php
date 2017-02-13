<?php 
if (isset($_POST['namestudent'])){

	require_once ('..\conndb\connection.php');
	$db = new DB_CONNECT();
	$namestudent=$_POST['namestudent'];

	$delstud=mysql_query("DELETE  FROM students  WHERE stud_flname= '$namestudent';");

	if(!$delstud){
		echo "Δεν διαγραφηκε" .mysql_error();
		echo "<a href='deletestud.html'>Επιστροφη στην φόρμα διαγραφής</a>";
	}else{
	echo "Διαγραφηκε επιτυχως";
	}

	}
echo "</br><a href='..\index.html'>Επιστροφη στην αρχικη</a>";
 ?>