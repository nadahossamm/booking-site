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
        <form action="departcritera2.php" method="post">
        <label class="head">Please enter the depart date: </label>
         <input type="date" name ="critera" required>
        <input class="submit" type="submit" value="submit">
        </form>
        </div>
    </body>
</html>
