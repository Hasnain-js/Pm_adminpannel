<?php
include 'conn.php';
if ($_SERVER["REQUEST_METHOD"] == "POST" and isset($_POST['delete'])){
if(!empty($_POST['check'])) {
// Counting number of checked checkboxes.
$checked_count = count($_POST['check']);
// echo "You have selected following ".$checked_count." option(s): <br/>";
// Loop to store and display values of individual checked checkbox.
foreach($_POST['check'] as $selected) {
// echo "<p>".$selected ."</p>";
}
// echo "<br/><b>Note :</b> <span>Similarily, You Can Also Perform CRUD Operations using These Selected Values.</span>";
$sql = "DELETE FROM contact WHERE id=$selected";

if ($conection->query($sql) === TRUE) {
  // Redirect the browser
    echo "<script>alert('Succesfully ".$checked_count." email deleted!')</script>";
} else {
  echo "Error deleting record: " . $conn->error;
    }

$conection->close();
}
}
?>