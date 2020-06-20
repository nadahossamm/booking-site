<html>
    <head>
        <style>
            body
            {
                background-image: url(ss.jpg);
            }
            .php
            {
                border: 2px solid white;
                border-radius: 50px;
                max-width: 50%;
                margin-left: 300px;
                text-align: center;
                color: black;
                font-size: 20px;
                background-color: white;
                opacity: 50%;
                margin-top: 20px;
            }
            label
            {
                color: white;
                font-family: cursive;
                font-size: 30px;
                margin-right: 20px;
            }
            .submit
            {
                border-color: black;
                background-color: black;
                border-radius: 50px;
                color: white;
                font-size: 20px;
            }
        </style>
    </head>
    <body>
        
        <div class="php">
            <?php
            $conn = mysqli_connect('localhost','root','','flight');
            if(!$conn)
            {
                echo 'connection error : '. mysqli_connect_error();

            }


                    $test1=strtotime($_POST['critera']);
                    $depart = date('Y-m-d', $test1);

             $sql="SELECT * FROM addflights WHERE date='$depart'";
             $result=mysqli_query($conn,$sql);
             if(mysqli_num_rows($result) > 0)
                {

                     while($row = mysqli_fetch_assoc($result)) {
             
        echo "FLIGHT NUMBER:" . $row["ID"]."<br>".
            " SOURCE CITY: " . $row["fromcity"]. "<br>".
            " DESTINATION CITY: " . $row["tocity"]."<br".
            " DATE: ".$row["date"] ."<br>".
            " TIME: ".$row["time"]."<br>".
            " PRICE: ".$row["price"]."<br>".
            
            
           " aircraft name: ".$row["aircraft"]."<br>"
            
            ;
             
             $sql11="SELECT chairs FROM aircraft WHERE name='$row[aircraft]'";
             $result2=mysqli_query($conn,$sql11);
        if(mysqli_num_rows($result2) > 0)
        {
     
         while($row = mysqli_fetch_assoc($result2)) {
            
             $seats=$row['chairs'];
             echo " SEATS: ".$seats."<br>".
            "--------"."<br>";
            }
            
        }
     
    }

                }
                else
                {
                 echo "there is no available flights in this date";
                }



            ?>

        </div>
        <form action="UserOptions.php">
            <label>Press back to return</label>
            <input class="submit" value="back" type="submit" >
        </form>
    </body>
</html>