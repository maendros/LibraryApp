<?php 

require_once ('..\conndb\connection.php');
$db = new DB_CONNECT();


$data=mysql_query("SELECT * FROM students inner join lending on students.stud_id=lending.lend_studid inner join books on lending.lend_bookid=books.id ");



if (mysql_num_rows($data)>0) {
   
    while($row = mysql_fetch_assoc($data)) {
        echo "<tr><td>" . $row["lend_id"]. "</td><td>" . $row["stud_flname"]. "</td><td>" . $row["booktitle"]. "</td><td>" . $row["lend_dateout"]. "</td></tr>";
    }
} else {
    echo "0 results";
}

echo "</table></center>";
echo "</br><a href='..\index.html'>Επιστροφη στην αρχικη</a>";

 ?>