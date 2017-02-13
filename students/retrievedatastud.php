<?php 




require_once ('..\conndb\connection.php');
$db = new DB_CONNECT();


$data=mysql_query("SELECT * FROM students ");



if (mysql_num_rows($data)>0) {
   
    while($row = mysql_fetch_assoc($data)) {
        echo "<tr><td>" . $row["stud_id"]. "</td><td>" . $row["stud_flname"]. "</td><td>" . $row["lend_regdate"]. "</td></tr>";
    }
} else {
    echo "0 results";
}

echo "</table></center>";



echo "</br><a href='..\index.html'>Επιστροφη στην αρχικη</a>";

 ?>