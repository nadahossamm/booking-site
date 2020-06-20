<?php
    session_start();

    if($_SERVER['REQUEST_METHOD']=='POST')
    {
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbName="flight";
        $id=$_POST['id'];
        // Create connection
        $conn = mysqli_connect($servername, $username, $password, $dbName);
        
        // Check connection
        if(!$conn)
        {
            die("connection failed").mysqli_connect_error();
        }
        $sql1="SELECT email FROM booking WHERE id=$id";
        $result=mysqli_query($conn, $sql1);
        if (mysqli_num_rows($result)>0)
        {
            $row=mysqli_fetch_assoc($result);
            if($row['email']==$_SESSION['email'])
            {
                $sql = "DELETE FROM booking WHERE id= $id";
                if (mysqli_query($conn, $sql))
                {
                    header("location:UserOptions.php?idd=NULL");
                }
                
            }
            else
            {
                header("location:UserOptions.php?idd=error1");
               // echo "this number is not connected with your mail";
            }
                
        }
        else
        {
            header("location:UserOptions.php?idd=error2");
            // echo "this number is not found";
        }
           
        
        
        

   /*   if ()
        {
           // echo "TABLE created successfuly".$_SESSION['from'];
           //$last_id = mysqli_insert_id($conn);
          
          
        }
        else
        {
            echo "error creating table". mysqli_error($conn);
        }
        */
        
        
         
            }
           
        else
            echo "you're not allowed to view this page";