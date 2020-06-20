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
        <form action="change_class2.php" method="post">
        <label class="head">Please enter your reservation number to change your class</label>
        <input name="id" type= "text" placeholder="reservation number" required>
        <select name="class">
            <option value="economy">economy class   </option>
            <option value="buisness">buisness class  </option>
        </select>
        <input  class="submit" type="submit" value="submit">
        </form>
        </div>
    </body>
</html>