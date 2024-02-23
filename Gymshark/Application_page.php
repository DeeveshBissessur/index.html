<?php
?>

<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Application Corner </title>

        <link rel="stylesheet" href="stylehome.css">

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    </head>

    <body>
        <div class="container">
            <form id="form" action="/">
                <h1>Registration</h1>
                <div class="input-control">
                    <label for="username">Username</label>
                    <input id="username" name="username" type="text">
                    <div class="error"></div>
                </div>
                <div class="input-control">
                    <label for="email">Email</label>
                    <input id="email" name="email" type="text">
                    <div class="error"></div>
                </div>
                <div class="input-control">
                    <label for="password">Password</label>
                    <input id="password"name="password" type="password">
                    <div class="error"></div>
                </div>
                <div class="input-control">
                    <label for="password2">Password again</label>
                    <input id="password2"name="password2" type="password">
                    <div class="error"></div>
                </div>
                <button type="submit">Sign Up</button>
            </form>
        </div>

        <br>

        <a href="gymshark 3.html">Back</a>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
        
    </body>

</html>