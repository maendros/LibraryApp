<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<h1>Αναζήτηση Φοιτητης</h1>
<?php 



if (isset($_POST['codestud'])){
require_once ('..\conndb\connection.php');
$db = new DB_CONNECT();
$codestud=$_POST['codestud'];

$data=mysql_query("SELECT * FROM students INNER JOIN lending on students.stud_id=lending.lend_studid  WHERE stud_id='$codestud';");



if (mysql_num_rows($data)>0) {
    echo "<table border='1'>";
    while($row = mysql_fetch_assoc($data)) {
        echo "<tr><td>" . $row["stud_id"]. "</td><td>" . $row["stud_flname"]. "</td><td>" . $row["lend_bookid"]. "</td><td>" . $row["lend_dateout"]. "</td></tr>";
    }
} else {
    echo "0 results";
}

echo "</table>";

}
echo "</br><a href='..\index.html'>Επιστροφη στην αρχικη</a>";
 ?>

<form method="Post" action="endkin.php">

	
ΚΩΔΙΚΟΣ ΒΙΒΛΙΟΥ<input type="text" name="codebook" /></br>
ΗΜΕΡΟΜΗΝΙΑ ΕΠΙΣΤΡΟΦΗΣ<input type="date" name="returndate" /></br>
<input type="submit"  name="submit" value="ΠΡΟΣΘΗΚΗ ΗΜΕΡΟΜΗΝΊΑΣ ΕΠΙΣΤΡΟΦΉΣ"></br>
<input type="reset"  name="reset" value="ΑΠΑΛΟΙΦΗ">

</form>



 </body>
</html>



