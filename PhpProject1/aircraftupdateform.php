<html>
<head>
<title>Contact Form Design</title>
<link rel="stylesheet" href="addaircraft.css">
<script type="text/javascript" src='aircraft.js'></script>


</head>
<body class="background">
    
    
<div class="contact-box">
    <form action="updateaircraft.php" onsubmit="return validate()" method="Post" >
        <h2>Update aircraft</h2>
    <input type="text" class="input-field" placeholder="plane's name you want update" id="name" name="oldname"  >
    <input type="text" class="input-field" placeholder="plane's name" id="name" name="newname"  >
    <input type="text" class="input-field" placeholder="plane's type" id="type" name="type"> 
    <input type="text" class="input-field" placeholder="plane's chairs" id="chairs" name="chairs"> 
    <button  class="btn">update aircraft</button> 
    <p id="x" class="n"></p>   
    <script src='aircraft.js'></script>
    
    
    
</div>   
</body>    
</html>