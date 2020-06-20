<?php
$conn = mysqli_connect('localhost','root','','flight');
$name=$_POST['name'];
$chairs=$_POST["chairs"];
$type=$_POST["type"];
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }
  echo "Connected successfully";
  $sql="select name from aircraft where name='$name'";
  $result = mysqli_query($conn, $sql);
  $row = mysqli_num_rows($result); 
if($row==0)
  {
  $sqql="insert into aircraft (name,chairs,type) values('$name','$chairs','$type')";
  if (mysqli_query($conn, $sqql)) 
  {
    header('location:main.php?msg=You have add aircraft successfully');
  } 
        
  
  else {
    
    echo "Error: " . $sqql . "<br>" . mysqli_error($conn);
  }
}
else
{
  header('location:main.php?msg=This name aircraft is already exist ');
}
  mysqli_close($conn);

?>