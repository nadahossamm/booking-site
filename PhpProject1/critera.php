<!DOCTYPE html>
<html>
    <head>
        <style>
            .first
            {
                margin-left: 50px;
            }
            .headd
            {
                color: white;
                font-family: cursive;
                font-size: 30px;
            }
            .options input
            {
                margin-left: 50px;
                
                min-width: 70px;
                min-height: 50px;
                border-radius: 15px;
                border-color: black;
                background-color: black;
                color: white;
                font-size: 20px;
                border-style: solid;
                display: inline;
                cursor: pointer;
                margin-top: 20px;
            }
            h1
            {
                color: white;
            }
            
        </style>
    </head>
    <body>
        <div class="first">
        
            <label class="headd">choose certain critera to display flights related with </label>
        
            <form >
            <div class="options">
                <input type="button"value="source (city)" onclick="loadDoc5()">
                <input type="button" value="destination (city)"  onclick="loadDoc6()">
                <input type="button"value="depart date"  onclick="loadDoc7()">
                <input type="button" value="number of passengers" onclick="loadDoc8()">
                
            </div>
            
            </form>
            </div>
        <div class="second" id="completion2">
        </div>
        
    </body>
    <script src="java3.js">
        
    </script>
</html>
