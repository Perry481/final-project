<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
  include_once 'dbh.inc.php';
 ?>

<html>
    <head>

        <title>stuff thst someone lost</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

    </head>
    <body>
        <h1>Stuff that hasn't been picked up.</h1>
        <div style="font-size:20px">This are the stuff that other people lost in their recent day.</div><br>

        <?php
          $sql = "SELECT * FROM loststuff;";
          $result = mysqli_query($conn, $sql);
          $resultcheck = mysqli_num_rows($result);

          if ($resultcheck > 0 ) {
              while($row = mysqli_fetch_assoc($result)){
                echo $row['brief'] ."<P ALIGN=LEFT>";
                echo $row['detail'] ."<P ALIGN=LEFT>";
                echo $row['contact'] ."<P ALIGN=LEFT><br>";
            }
            // code...
          }
         ?>

    </body>
</html>
