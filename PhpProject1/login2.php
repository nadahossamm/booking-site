<?php
$servername = "localhost";
$username = "root";
$password = "";
$databasename="flight";
$conn = mysqli_connect($servername, $username, $password,$databasename);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }
  echo "Connected successfully";

if(isset($_POST['email'] ))
{
    
    $password=$_POST["pass"];
    $email=$_POST["email"];
    $sql = "SELECT * FROM signup where email='$email'";
    $result = mysqli_query($conn, $sql);
    $row= mysqli_fetch_array($result);

    if($row['password']==$password)
    {
      session_start();
           // echo $row['password'];
           $_SESSION['email']=$row['email'];
           $_SESSION['name']=$row['firstname'];
           $_SESSION['pass']=$row['password'];
           $_SESSION['role']=$row['role'];

        if($row['role']=='Admin')
           {
           header("location:main.php");
           }
        else
        header("location:UserOptions.php");

   }
   else
        {
         // echo '$password';

          
         header("location:login.php?error=Wrong email or password");
        }

    

        
}

    

mysqli_close($conn);
?>