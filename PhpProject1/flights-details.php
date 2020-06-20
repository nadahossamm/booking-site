<html>
<head>
<link rel="stylesheet" href="flightsdetails.css"/>
<script type="text/javascript" src="validflight.js"></script>
</head>

<body id="background">
    <h2 align="center">Flight Details</h2> 
    
    <div id="box"> 
        <form align="center" id="form" method="POST" action="Untitled-1.php" onsubmit="return validation2()">
          
          <input type="text" placeholder=" From (City)" id="in1" name="from" required > 
          <input type="text" placeholder=" To (City)" id="in2" name="to" required> 

          <input type="date" id="in3" min="2020-6-1" name="date" required> <br>

          <input type="time" id="in4" name="time" required><br>

          <input type="number" placeholder=" price" id="in5" name="price" required>
          <select name="plane">
          <?php
          $conn = mysqli_connect('localhost','root','','flights');
          if(!$conn)
          {
              echo 'connection error : '. mysqli_connect_error();
              
          }
          $conn2 = mysqli_connect('localhost','root','','flight');
          $sql2="select name from aircraft";
          $quer=mysqli_query($conn2,$sql2);
          $data=mysqli_num_rows($quer);
          
          while($data=mysqli_fetch_array($quer))
          {
            echo "<option value='". $data['name'] ."'>" .$data['name'] ."</option>";
          }
           
          ?>

          </select>
         
          <br>
          <input type="submit" value="DONE" id="finish" >

       </form>
       <br>
        <div align="center" id="message">
            
         
        </div>


    



    </div>
</body>

</html>