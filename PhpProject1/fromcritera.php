<!DOCTYPE html>
<html>
    <head>
        <style>
            .bodyy
            {
                margin-top: 50px;
                margin-left:50px;
               
            }
            .head
            {
                color: #00ffff;
                font-family: cursive;
                font-size: 30px;
            }
            input
            {
                min-height: 25px;
                margin-right: 10px;
                margin-left: 10px;
                margin-top: 3px;
                margin-bottom: 3px;
                border-radius: 7px;
                border-style: solid;
                
            }
             
              .submit
            {
                border-color: black;
                background-color: black;
                color: white;
                font-size: 20px;
            }  
        </style>
   
    </head>
    <body>
        <div class="bodyy">
        <form action="fromcritera2.php" onsubmit="return validation()" method="post" >
        <label class="head">Please enter the city name: </label>
        <input name="critera" type="text" placeholder="from city" required>
        <input class="submit" type="submit" value="submit">
        </form>
        <p id="value"></p>
        </div>
    </body>
       
</html>
