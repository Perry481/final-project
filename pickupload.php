<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
  include("dbh.inc.php");
 ?>

<html>
    <head>
        <title>Stuff that you picked up </title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <h1>Stuff that you picked up.</h1>
        <div>Please give us your information and tell us what it is.</div><br>

        <form action="upload.inc.php" method="POST">
          <input type="text" name="brief" placeholder="Brief">
          <br>
          <input type="text" name="detail" placeholder="Detail">
          <br>
          <input type="text" name="contact" placeholder="Contact">
          <br>
          <button type= "submit" name="submit">upload</button>
        </form>




    </body>
</html>
