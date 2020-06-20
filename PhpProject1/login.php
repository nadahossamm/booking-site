<?php
session_start();
?>
<!DOCTYPE html>
<html>

<style>
    body
    {
        background-image:url(image2.jpeg) ; 
            background-repeat: no-repeat;
            background-size: 1550px;
            background-position-y: center;
            color: white;
    }
    
    
.login
{
    border: 4px double black;
    padding: 40px;;
    width: 300px;
    font-size: 25px;
    margin-left: 50px;
    margin-top: 90px;
    height: 400px;
    border-style: double;
    border-width: 7px;

}
.log
{
   margin-top: unset;
   text-align: center;
}
button
{
    margin: 5px;
    border-radius: 5px;
    padding: 7px;
    background-color: unset;
    border-color: unset;
    font-weight: bold;
    font-size: 15px;
    color: white;    
}
button:hover
{
    background-color: whitesmoke;
    color: black;
}
.d
{
    color: white;
    font-size: 60px;
text-align: center;
position: absolute;
top: 280px;
left: 950px;
font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
font-style: italic;




}
a
{
    color: black;
}
.s
{
    color:  red;
    font-size:20px;
}


</style>



    <body>
        <h2 class="d">Welcome <br> to our <br>flight reservation</h2>

        <div class="login">
        <h2 class="log">Log In</h2>
        <form action="login2.php" method="post" onsubmit="return validation()" >
        <label>E-Mail</label>
        <input type= "text" name="email" placeholder="E-Mail" id="email" > 
        <p id='e' class="s"></p>
        <label>Password</label>
        <input type= "Password" name="pass" placeholder="Password" id="pass" >  
         <br>
         <p id='p' class="s"></p>
        <br>
    <button  > Log In </button>
    <p  class="s"><?php  if(!empty($_GET['error']))
                    echo $_GET['error'];?>
        <p>New ? <a href="signup2.php">Sign up</a> now.</p>

    </div>
    <script src="login.js"></script>   
</form>
    
    </body>

</html>