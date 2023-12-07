<?php
// Database Connection
include "connection.php";

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    mysqli_select_db($db, "agro");

    // Check which button was clicked
    if (isset($_POST['sub_bitter_gourd'])) {
        $name = "Bitter Gourd";
        $price = 100.00;
    } elseif (isset($_POST['sub_orange'])) {
        $name = "Orange";
        $price = 150.00;
    } elseif (isset($_POST['sub_pumpkin_seeds'])) {
        $name = "Pumpkin Seeds";
        $price = 450.00;
    } elseif (isset($_POST['sub_tomato'])) {
        $name = "Tomato";
        $price = 400.00;
    } elseif (isset($_POST['sub_chilli'])) {
        $name = "Chilli";
        $price = 250.00;
    } elseif (isset($_POST['sub_pappaya'])) {
        $name = "Pappaya";
        $price = 350.00;
    }

    // Insert into the database
    $quantity = 1;
    $sql = "INSERT INTO product (name, price, quantity) VALUES ('$name', '$price', '$quantity')";
    $req = mysqli_query($db, $sql);

    if ($req) {
        echo '<script language="javascript">';
        echo 'alert("Your product information is successfully added!")';
        echo '</script>';
    } else {
        echo '<script language="javascript">';
        echo 'alert("Sorry. Some kind of error in the data entry!")';
        echo '</script>' . mysqli_error($db);
    }
}

mysqli_close($db);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seeds Page</title>
    <style><?php include "Css/Categorry.css" ?></style>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

</head>

<body>

    <header>
              <a href="CustomerHome.php" class="back-button"><i class="fas fa-arrow-left"></i></a>
        <h1>Seeds Page</h1>
        <a href="card.php"><img src="Images/add1.png" width="40px" style= "margin-right:20px;"></a> 
    </header>
    <form method="post" id="register" action="Seeds.php">
        <div class="container">
            <!-- Product 1 -->
            <div class="product">
                <img src="Images/21.png" alt="Product Image">
                <div class="product-info">
                    <h2 name="name">Bitter Gourd</h2>
                    <p name="price">Price: 100.00</p>
                    <input type="hidden" name="name" value="Bitter Gourd">
                    <input type="hidden" name="price" value="100.00">
                    <input type="submit" name="sub_bitter_gourd" value="Add to Cart">
                </div>
            </div>

            <!-- Product 2 -->
            <div class="product">
                <img src="Images/22.png" alt="Product Image">
                <div class="product-info">
                    <h2 name="name">Orange</h2>
                    <p name="price">Price: 150.00</p>
                    <input type="hidden" name="name" value="Orange">
                    <input type="hidden" name="price" value="150.00">
        <input type="submit" name="sub_orange" value="Add to Cart">
                </div>
            </div>

            <div class="product">
                <img src="Images/23.png" alt="Product Image">
                <div class="product-info">
                    <h2 name="name">Pumpkin Seeds</h2>
                    <p name="price">Price: 450.00</p>
                    <input type="hidden" name="name" value="Pumpkin Seeds">
                    <input type="hidden" name="price" value="450.00">
        <input type="submit" name="sub_pumpkin_seeds" value="Add to Cart">
                </div>
            </div>

            <div class="product">
                <img src="Images/24.png" alt="Product Image">
                <div class="product-info">
                    <h2 name="name">Tomato</h2>
                    <p name="price">Price: 400.00</p>
                    <input type="hidden" name="name" value="Tomato">
                    <input type="hidden" name="price" value="400.00">
        <input type="submit" name="sub_tomato" value="Add to Cart">
                </div>
            </div>
         
            <div class="product">
                <img src="Images/25.png" alt="Product Image">
                <div class="product-info">
                    <h2 name="name">Chilli</h2>
                    <p name="price">Price: 250.00</p>
                    <input type="hidden" name="name" value="Chilli">
                    <input type="hidden" name="price" value="250.00">
        <input type="submit" name="sub_chilli" value="Add to Cart">
                </div>
            </div>
            <!-- Product 2 -->
            <div class="product">
                <img src="Images/26.png" alt="Product Image">
                <div class="product-info">
                    <h2 name="name">Pappaya</h2>
                    <p name="price">Price: 350.00</p>
                    <input type="hidden" name="name" value="Pappaya">
                    <input type="hidden" name="price" value="350.00">
        <input type="submit" name="sub_pappaya" value="Add to Cart">
                </div>
            </div>
        </div>
    </form>
</body>

</html>