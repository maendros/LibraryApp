<?php 

	


if(isset($_POST['title'])){

	$title=$_POST['title'];
	$author=$_POST['author'];
	$publisher=$_POST['publisher'];
	$dateissue=$_POST['dateissue'];
	$category=$_POST['category'];
	$total=$_POST['total'];
	$isbn=$_POST['isbn'];

require_once ('..\conndb\connection.php');
$db = new DB_CONNECT();

	$result=mysql_query("INSERT INTO books(booktitle,bookauthor,bookpublisher,bookdateissue,bookcategory,booktotal,ISBN)VALUES('$title','$author','$publisher','$dateissue','$category','$total','$isbn')");








		


if(!$result){

	echo "Δεν δημιουργηθηκε" . mysql_error();

}else{
	echo "Δημιουργηθηκε επιτυχως";
	
}

	echo "</br><a href='..\index.html'>Επιστροφη στην αρχικη</a>";

}




 ?>