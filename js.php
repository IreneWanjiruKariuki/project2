<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body onload="DynamicTimer();">
    <p id="groupa"></p>
    <script>
        document.getElementById('groupa').innerHTML="This is my first JS code";
    </script><br><br>

    <button type="button" onclick="document.getElementById('MyImg').src='images/buld_on.png'">Turn On</button>

    <img src="images/bulb_on.png" alt="" id="MyImg" style="width: 500px;">

    <button type="button" onclick="document.getElementById('MyImg').src='images/bulb_off.png'">Turn Off</button> <br> <br>

    <?php date_default_timezone_set("Africa/Nairobi"); ?>

    Static timer: <?php print date("H:i:s");?> <br>
    Dynamic timer: <span id="dtmer"></span> 
    <br> <br>

    <script>
        document.write(5+3);
    </script>

    <br> <br>

    <script>
        console.log("Add information here");
    </script>

    <br> <br>

    <script>
        //window.alert("Your database is ready");
    </script>
    <br> <br>

    <br> <br>

    <a href=""onclick="return confirm('Are you sure?');">Delete</a>
    <br> <br>
    <br> <br>
    <button type="button" onclick="window.print();">Print Page</button>
    <br> <br>

    <script>
        let streetname = prompt ('What is your street namme?');
        var firstname="Alex";
        const MyAge=40;
        document.write(firstname + " A.K.A " + streetname + " is " + MyAge + " years old ");
    </script>


    <script src="script.js"></script>
</body>
</html>