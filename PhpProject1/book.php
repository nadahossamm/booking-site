<!DOCTYPE html>
<html>
    <head>
        <style>
            .bodyy
            {
                margin-left: 50px;
            }
            .head
            {
                color: white;
                font-family: cursive;
                font-size: 30px;
            }
            input
            {
                max-width:250px;
                min-height: 25px;
                display: block;
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
            select
            {
                display: block;
                min-width: 160px;
                margin-top: 5px;
                margin-bottom: 5px;
                border-radius: 7px;
                border-style: solid;
                border-color: black;
            }
        </style>
    </head>
    <body>
        <div class="bodyy">
        <form action="book2.php" method="post">
        <label class="head">Please enter the flight number you want to book</label>
        <input name="id" type= "text" placeholder="flight number" required>
         <label class="head">Please enter the class you want</label>
        <select name="class">
            <option value="economy">economy class   </option>
            <option value="buisness">buisness class  </option>
        </select>
        <label class="head">Please enter the number of passengers: </label>
        <select name="pass">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                            <option>6</option>
                            <option>7</option>
                            <option>8</option>
                            <option>9</option>
        </select>
        <input  class="submit" type="submit" value="submit">
        </form>
        </div>
    </body>
</html>