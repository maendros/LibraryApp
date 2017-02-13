<?php 
if(isset($_POST['codebook'])&&isset($_POST['returndate'])){



	$codebook=$_POST['codebook'];
	$returndate=$_POST['returndate'];
	


require_once ('..\conndb\connection.php');
$db = new DB_CONNECT();

$querystud = mysql_query("UPDATE lending set lend_datein='$returndate' WHERE lend_bookid = '$codebook'");

if(!$querystud){
		echo "Δεν δημιουργηθηκε ημερομηνία επιστροφής" . mysql_error();
	
}else{
		echo "Δημιουργηθηκε Ημηρεομηνια επιστροφής ";
	
	}
echo "</br><a href='insertkin.html'> Επιστροφη στην φορμα</a>";
}
echo "</br><a href='..\index.html'>Επιστροφη στην αρχικη</a>";
 ?>