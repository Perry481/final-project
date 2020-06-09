<?php


 include('dbh.inc.php');
  $brief = $_POST['brief'];
  $detail = $_POST['detail'];
  $contact = $_POST['contact'];

  $sql = "INSERT INTO pickedupstuff (brief, detail, contact)
    VALUES('$brief', '$detail', '$contact');";
mysqli_query($conn, $sql);
if(!$sql)
{
  echo('Error:'.nysqli_error($conn));
}
else{
  echo "OK";

}
mysqli_close($conn);
 ?>
