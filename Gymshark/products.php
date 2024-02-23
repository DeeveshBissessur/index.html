<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "product";

// Create connection
$conn = new mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

?>





<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Shop</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <link rel="stylesheet" href="./categories.css">
        <script src="./categories.js"></script>
    </head>
    <body>

        <h3>Merch</h3>

            <?php

            $sql_categories = "SELECT distinct category FROM product";
            $result_categories = $conn->query($sql_categories);
 


            while($row_categories = mysqli_fetch_assoc($result_categories)) {
                
                $category = $row_categories['category'];
                
                ?> <h5> <?php echo $category; ?></h5> 
                
                <?php
                $sql_product = "SELECT Product_Name, Product_Details, Price, FROM product where category = '" . $category . "'";
                $result_product = $conn->query($sql_staff);

                if ($result_product->num_rows > 0) {
                // output data of each row
                while($row_product = $result_product->fetch_assoc()) {
                    
                ?>   
                    
            
                <?php
                }
                } else {
                echo "0 results";
                }
            
            }
            


            ?>
    </body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</html>

<?php
$conn->close();
?>