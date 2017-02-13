<?php 

	if(isset($_POST['studn'])&&isset($_POST['studpassprev'])&&isset($_POST['studpassnext'])){

	require_once ('..\conndb\connection.php');
		$db = new DB_CONNECT();

			$options = [
    'cost' => 12,
];

$studn=$_POST['studn'];
$studpassprev=$_POST['studpassprev'];
$hashprev=password_hash($studpassprev, PASSWORD_BCRYPT, $options);
$studpassnext=$_POST['studpassnext'];
$hashpassnext=password_hash($studpassnext, PASSWORD_BCRYPT, $options);



$passw=mysql_query("SELECT stud_pass FROM students   WHERE stud_flname = '$hashprev';");



if($passw){

$data=mysql_query("UPDATE students SET stud_pass ='$studpassnext'  WHERE stud_flname = '$studn';");








		if(!$data){
			echo "error".mysql_error();	
		}else{
			echo "succeed ";
			echo "</br><a href='..\index.html'>Επιστροφη στην αρχικη</a>";
		}
}
else{
		echo "wrong password ".mysql_error();
			echo "</br><a href='..\index.html'>Επιστροφη στην αρχικη</a>";
}

	}


 ?>