<?php 

	


if(isset($_POST['studname'])&&isset($_POST['studpass'])){

	$options = [
    'cost' => 12,
];

	$studname=$_POST['studname'];
	$studpass=$_POST['studpass'];
	$hashpass=password_hash($studpass, PASSWORD_BCRYPT, $options);


require_once ('..\conndb\connection.php');
$db = new DB_CONNECT();

	$result=mysql_query("INSERT INTO students(stud_flname,stud_pass)VALUES('$studname','$hashpass')");








		


if(!$result){

	echo "Δεν δημιουργηθηκε" . mysql_error();

}else{
	echo "Δημιουργηθηκε Φοιτητής επιτυχως";
	
}



}

echo "</br><a href='..\index.html'>Επιστροφη στην αρχικη</a>";


 ?>