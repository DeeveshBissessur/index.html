<?php
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>BMI Calculator</title>
        
        <link rel="stylesheet" href="stylehome.css">

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">


    </head>
    
    <body>

        <div class="wrapper">
            <p>Height in CM:
                <input type="number" id="height"><br><span id="height_error"></span>
            </p>

            <p>Weight in KG:
                <input type="number" id="weight"><br><span id="weight_error"></span>
            </p>

            <button id="btn">Calculate</button>
            <p id="output"></p>
        </div>
        
        <a href="gymshark 3.html">Back</a>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    </body>
</html>