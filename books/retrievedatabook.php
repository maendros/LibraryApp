<?php 
error_reporting(E_ALL ^ E_DEPRECATED);
	require_once ('..\conndb\connection.php');
$db = new DB_CONNECT();

	$data=mysql_query("SELECT * FROM books");


if (mysql_num_rows($data)>0) {
    
    while($row = mysql_fetch_assoc($data)) {
        echo "<tr><td>" . $row["id"]. "</td><td>" . $row["booktitle"]. "</td><td>" . $row["bookauthor"]. "</td><td>" . $row["bookpublisher"]. "</td><td>" . $row["bookdateissue"]. "</td><td>" . $row["bookcategory"]. "</td><td>" . $row["booktotal"]. "</td><td>" . $row["ISBN"]. "</td></tr>";
    }
} else {
    echo "0 results";
}
echo "</br><a href='..\index.html'>Επιστροφη στην αρχικη</a>";
?>