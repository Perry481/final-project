<?php
  include_once 'dbh.inc.php';
 ?>

<!DOCTYPE html>
<html>
<head>
 <title>Lost and Found</title>
 <style type="text/css">
 .head{
  background-color:#00AEAE;color:white;font-weight:bold;font-size:90px;text-align:center
 }
 .content{
  font-size:60px;text-align:center;
 }
 .choice{
  width:320px;margin-left:auto;margin-right:auto; align:center
 }
 .box{
  width:300px;padding:15px;margin:15px;background-color:white; display:inline-block; vertical-align:top;
 }
 .pic{
    width: 150px;
    height: 150px;
    max-width: 100%;
    display: block;
    text-align: center;
    background-color: #eb9700;
    font-size: 0;
    }
    .ex2-demo:before{
    width:0;
    height:100%;
    display:inline-block;
    position:relative;
    vertical-align:middle;
    }
    .ex2-demo:after{
    width:0;
    height:100%;
    display:inline-block;
    position:relative;
    vertical-align:middle;
    }

 </style>
</head>
<body bgcolor="#eeeeee">


 <div class="head">Lost and Found</div>
 <br>
 <br>
 <br>
 <br>
 <div class="content">Choose your identity</div>
 <div class="choice">

  <div class="box">
   <div><a href="currentfound.php">current found stuff</a></div>
  </div>
  <div class="box">
   <div><a href="pickupload.php">upload the stuff you picked up</a></div>
  </div>
  <div class="box">
   <div><a href="lostupload.php">upload the stuff you lossed</a></div>
  </div>
  <div class="box">
   <div><a href="currentlost.php">lost stuff </a></div>
  </div>

 </div>
 <p>
 <p>
 <p>
 <div class="pic">
        <div  class="ex-demo-img">
            <img src="https://cdn2.vectorstock.com/i/1000x1000/77/66/lost-and-found-grunge-rubber-stamp-vector-20397766.jpg">
        </div>
    </div>




</body>
</html>
