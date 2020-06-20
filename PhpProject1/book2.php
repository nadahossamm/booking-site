<?php
    session_start();

    if($_SERVER['REQUEST_METHOD']=='POST')
    {
        $conn = mysqli_connect('localhost','root','','flight');
        $ID=$_POST['id'];
        
        if(!$conn)
        {
            echo 'connection error : '. mysqli_connect_error();

        }
        $sql="SELECT * FROM addflights WHERE ID='$ID'";
        $result=mysqli_query($conn,$sql);
        if(mysqli_num_rows($result) > 0)
        {
     
         while($row = mysqli_fetch_assoc($result)) {
            $from= $row["fromcity"];
            $to =$row["tocity"];
            $depart=$row["date"]; 
            $aircraft=$row['aircraft'];
            
            }
        $sql1="SELECT chairs FROM aircraft WHERE name='$aircraft'";
        
        $pass=$_POST['pass'];
        $class=$_POST['class'];
        $email=$_SESSION['email'];
        
        $result=mysqli_query($conn,$sql1);
        if(mysqli_num_rows($result) > 0)
        {
     
         while($row = mysqli_fetch_assoc($result)) {
            
             $seats=$row['chairs'];
            
            }
        }
        if($pass <= $seats)
        {
            $seats -= $pass;
            $sql = "INSERT INTO booking(payment,email,from_city,to_city,depart_date,class_type,passengers) VALUES ('no','$email','$from','$to','$depart','$class','$pass')";
            $sql3 = "UPDATE aircraft SET chairs=$seats WHERE name='$aircraft'";
            mysqli_query($conn, $sql3);
            if (mysqli_query($conn, $sql))
            {
               // echo "TABLE created successfuly".$_SESSION['from'];
               $last_id = mysqli_insert_id($conn);
              header("location:UserOptions.php?idd=$last_id");

            }
        }
        
        
        else
        {
            header("location:UserOptions.php?idd=number of seats");
        }
        
     
        }
        else
        {
           
            header("location:UserOptions.php?idd=this ID is invalid");
        }
        
        
        
        
         
            }
           
        else
            echo "you're not allowed to view this page";