<?php
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Gallery</title>

        <style>

            img{
                border: 7px double rgb(215, 151, 32); 
                border-radius: 10px;
            }

            body{
                background-color: rgb(181, 245, 232);
                    
            }
                
            h1{
                background-color: rgb(226, 226, 226);
                text-align: left;
                color: rgb(7, 7, 150);

            }
            
        </style>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">


    </head>

    <body>
        
        <img src="./GYM SHARK Logo.png" width="100" height="100"> 
        <h1>Gallery and Merch</h1>
        <br>

        <div class="full-img" id="fullImgBox">
            <img src="./Images/Womens-Clifton.png" id="fullImg">
            <span onclick="closefullImg()">X</span>
        </div>

        <div class="img-gallery">

            <img src="./trainer2.jpg"width="200" height="200" onclick="openFullImg(this.src)">
            <img src="./whey powder.jpg"width="200" height="200" onclick="openFullImg(this.src)">
            <img src="./gloves.jpg" width="200" height="200" onclick="openFullImg(this.src)">
            <img src="./hoodie man.jpg" width="200" height="200" onclick="openFullImg(this.src)">
            <img src="./bag.jpg" width="200" height="200" onclick="openFullImg(this.src)">
            <img src="./bottle.jpg" width="200" height="200" onclick="openFullImg(this.src)">
            <img src="./bicycle training.jpg" width="200" height="200" onclick="openFullImg(this.src)">
            <img src="./woman wear.png" width="200" height="200" onclick="openFullImg(this.src)">
        
        </div>
        <br>

        <a href="gymshark 3.html">Back</a>

        <script>

            var fullImgBox = document.getElementById("fullImgBox");
            var fullImg = document.getElementById("fullImg");
        
            function openFullImg(pic){
                fullImgBox.style.display = "flex";
                fullImg.src = pic;
            }
        
            function closefullImg(){
                fullImgBox.style.display = "none";
            }
            </script>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
        

    </body>
</html>