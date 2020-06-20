<html>
<head>
<title>Contact Form Design</title>
<link rel="stylesheet" href="addaircraft.css">

<script type="text/javascript" src='aircraft.js'></script>

</head>
<body class="background">
    
    
<div class="contact-box">
    <form action="aircraft.php" onsubmit="return validate()" method="Post" >
        <h1>Add aircraft</h1>
    <input type="text" class="input-field" placeholder="plane's name" id="name" name="name"  >
    <input type="text" class="input-field" placeholder="plane's type" id="type" name="type"> 
    <input type="text" class="input-field" placeholder="plane's chairs" id="chairs" name="chairs"> 
    <button  class="btn">Add aircraft</button> 
    <p id="x" class="n"></p>   
    
    
    
</div>   
</body>    
</html>