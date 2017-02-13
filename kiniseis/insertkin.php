<?php 

	


if(isset($_POST['studid'])&&isset($_POST['bookname'])){



	$studid=$_POST['studid'];
	$bookname=$_POST['bookname'];
	


require_once ('..\conndb\connection.php');
$db = new DB_CONNECT();
$querystud = mysql_query("SELECT stud_id FROM students WHERE stud_id = '$studid'");
$querybook = mysql_query("SELECT id FROM books WHERE booktitle Like '%$bookname%';");
$thestud=mysql_fetch_assoc($querystud);
$thebook=mysql_fetch_assoc($querybook);
$st=$thestud['stud_id'];
$bk=$thebook['id'];
/*
/*
if($querystud&&$querybook){
	$nextquerybook = "SELECT booktitle FROM books WHERE booktitle Like '%$bookname%'";*/

	$result=mysql_query("INSERT INTO lending(lend_studid,lend_bookid)VALUES('$st','$bk')");

	


if(!$result){

	echo "Δεν δημιουργηθηκε" . mysql_error();
	echo "<a href='insertkin.html'> Επιστροφη στην φορμα</a>";

}else{
	$sum=mysql_query("UPDATE books SET booktotal =booktotal-1  ;");
	if(!$sum){

	echo "Δεν δημιουργηθηκε" . mysql_error();
	echo "<a href='insertkin.html'> Επιστροφη στην φορμα</a>";

}else{
	echo "Δημιουργηθηκε Κίνηση ";
	echo "<a href='insertkin.html'> Επιστροφη στην φορμα</a>";
	}
}



}

echo "</br><a href='..\index.html'>Επιστροφη στην αρχικη</a>";


 ?>