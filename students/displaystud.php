<?php 



if (isset($_POST['namestudent'])){
require_once ('..\conndb\connection.php');
$db = new DB_CONNECT();
$namestudent=$_POST['namestudent'];

$data=mysql_query("SELECT * FROM students  WHERE stud_flname like '%$namestudent%';");



if (mysql_num_rows($data)>0) {
    echo "<table border='1'>";
    while($row = mysql_fetch_assoc($data)) {
        echo "<tr><td>" . $row["stud_id"]. "</td><td>" . $row["stud_flname"]. "</td><td>" . $row["lend_regdate"]. "</td></tr>";
    }
} else {
    echo "0 results";
}

echo "</table>";

}

echo "</br><a href='..\index.html'>Επιστροφη στην αρχικη</a>";

 ?>