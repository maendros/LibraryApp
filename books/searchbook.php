<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>


<h1>Αναζήτηση βιβλίου</h1>

<?php 

	


if (isset($_POST['book'])){
require_once ('..\conndb\connection.php');
$db = new DB_CONNECT();
$result=$_POST['book'];

$data=mysql_query("SELECT * FROM books  WHERE booktitle like '%$result%';");



if (mysql_num_rows($data)>0) {
    echo "<table border='1'>";
    while($row = mysql_fetch_assoc($data)) {
        echo "<tr><td>" . $row["id"]. "</td><td>" . $row["booktitle"]. "</td><td>" . $row["bookauthor"]. "</td><td>" . $row["bookpublisher"]. "</td><td>" . $row["bookdateissue"]. "</td><td>" . $row["bookcategory"]. "</td><td>" . $row["booktotal"]. "</td><td>" . $row["ISBN"]. "</td></tr>";
    }
} else {
    echo "0 results";
}

echo "</table>";


}
echo "</br><a href='..\index.html'>Επιστροφη στην αρχικη</a>";



 ?>

<form method="Post" action="deleteidbook.php">

	
Διαγραφή βασει κωδικού<input type="text" name="deleteid" />
<input type="submit"/>

</form>



 </body>
</html>
