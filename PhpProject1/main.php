<!DOCTYPE html>
<?php
session_start();
?> 
<h3 class="hed">  <?php if(!empty($_SESSION['name'])) 
echo "Welcome"." " .$_SESSION['name'];
else
echo"You are not logged in"; ?> </h3>
<html>
<head>
    <link rel="stylesheet" href="main.css">
    <script type="text/javascript" src="validflight.js"></script>
    <script type="text/javascript" src="main.js"></script>
    <script type="text/javascript" src='aircraft.js'></script>
    <script type="text/javascript" src="java.js"></script>

</head>

<body id="background">
    <div id="navbar" align="center">
        <button onclick="addaircraft()"> Add an aircraft </button>
        <button onclick="updateaircraft()"> Update an aircraft</button>
        <button onclick="add()"> Add a flight</button>
        <button onclick="update()"> Update a flight</button>
        <button onclick="updateuser()">update user details</button>
        <button onclick="logout()"> logout</button>
        

    </div>
<div id="details">
<p  class="s"> <?php  if(!empty($_GET['msg']))
                    echo $_GET['msg'];?>
</div>   

</body>

</html>