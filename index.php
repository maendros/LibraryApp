<?php 
	include("public/header.php");


?>

<div class="row">
        <div class="col-lg-4">
          <h2>Σπουδαστές</h2>
          
          <p><a class="btn btn-primary" href="students/insertstud.html" role="button">ΕΙΣΑΓΩΓΗ &raquo;</a></p>
          <p><a class="btn btn-warning" href="students/updatestud.html" role="button">ΔΙΟΡΘΩΣΗ &raquo;</a></p>
          <p><a class="btn btn-warning" href="students/deletestud.html" role="button">ΔΙΑΓΡΑΦΗ &raquo;</a></p>
          <p><a class="btn btn-info" href="students/displaystud.html" role="button">ΕΜΦΑΝΙΣΗ &raquo;</a></p>
          <p><a class="btn btn-info" href="students/viewdatastud.php" role="button">ΕΜΦΑΝΙΣΗ ΟΛΩΝ &raquo;</a></p>
        </div>
        <div class="col-lg-4">
          <h2>Βιβλία</h2>
            <p><a class="btn btn-primary" href="books/insertbook.html" role="button">ΕΙΣΑΓΩΓΗ &raquo;</a></p>
          <p><a class="btn btn-warning" href="books/updatebook.html" role="button">ΔΙΟΡΘΩΣΗ &raquo;</a></p>
            <p><a class="btn btn-warning" href="books/searchbook.html" role="button">ΔΙΑΓΡΑΦΗ &raquo;</a></p>
              <p><a class="btn btn-info" href="books/displaybook.html" role="button">ΕΜΦΑΝΙΣΗ &raquo;</a></p>
                <p><a class="btn btn-info" href="books/viewdatabook.php" role="button">ΕΜΦΑΝΙΣΗ ΟΛΩΝ &raquo;</a></p>
       </div>
        <div class="col-lg-4">
          <h2>Κινήσεις</h2>
           <p><a class="btn btn-primary" href="kiniseis/insertkin.html" role="button">ΔΑΝΕΙΣΜΟΣ ΒΙΒΛΙΟΥ &raquo;</a></p>
          <p><a class="btn btn-info" href="kiniseis/showlenddate.html" role="button">ΗΜΕΡΟΜΗΝΙΑΣ ΕΠΙΣΤΡΟΦΗΣ &raquo;</a></p>
           <p><a class="btn btn-warning" href="kiniseis/deletekin.html" role="button">ΔΙΑΓΡΑΦΗ ΚΙΝΗΣΗΣ &raquo;</a></p>
            <p><a class="btn btn-primary" href="kiniseis/displaykin.html" role="button">ΕΠΙΣΤΡΟΦΉ ΒΙΒΛΊΟΥ &raquo;</a></p>
             <p><a class="btn btn-info" href="kiniseis/returnbookkin.php" role="button">ΕΜΦΑΝΙΣΗ ΟΛΩΝ &raquo;</a></p>
        </div>
      </div>

<?php

	include("public/footer.php");




 ?>