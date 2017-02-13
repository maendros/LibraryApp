<?php 
if (isset($_POST['lendid'])){

	require_once ('..\conndb\connection.php');
	$db = new DB_CONNECT();
	$lendid=$_POST['lendid'];

	$deletekin=mysql_query("DELETE  FROM lending  WHERE lend_id='$lendid';");

	if(!$deletekin){
	echo "Δεν Διαγράφηκε" . mysql_error();
	echo "<a href='insertkin.html'> Επιστροφη στην φορμα</a>";

}else{
	$sum=mysql_query("UPDATE books SET booktotal =booktotal+1  ;");
	if(!$sum){

	echo "Δεν Διαγράφηκε" . mysql_error();
	echo "<a href='insertkin.html'> Επιστροφη στην φορμα</a>";

}else{
	echo "Διαγράφηκε η κίνηση  ";
	echo "<a href='insertkin.html'> Επιστροφη στην φορμα</a>";
	}
}

	}
echo "</br><a href='..\index.html'>Επιστροφη στην αρχικη</a>";

 ?>