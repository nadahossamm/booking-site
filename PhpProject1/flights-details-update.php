<!DOCTYPE html>
<html>
<header>
<link rel="stylesheet" href="flightsdetails.css"/>
<script type="text/javascript" src="validflight.js"></script>
</header>

<body id="background" >
    <h2 align="center">Flight Details</h2> 
    
    <div id="box" > 
        <form align="center" id="form" method="POST" action="updateflight.php" onsubmit=" return validation2()">

          <input type ="text" placeholder="ID of the flight you want to update" name="id" id="in0">
          
          <input type="text" placeholder=" From (City)" id="in1" name="from" > 
          <input type="text" placeholder=" To (City)" id="in2" name="to"> 

          <input type="date" id="in3" min="2020-6-1" name="date" required> <br>

          <input type="time" id="in4" name="time" required><br>

          <input type="number" placeholder=" price" id="in5" name="price"> 
          <select name="plane">
          <?php
          $conn = mysqli_connect('localhost','root','','flight');
          if(!$conn)
          {
              echo 'connection error : '. mysqli_connect_error();
              
          }

          $sql2="select name from aircraft";
          $quer=mysqli_query($conn,$sql2);
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