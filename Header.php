<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="Images/LOGO.png">
    <title>AGRO</title>
    <!-- <link rel="stylesheet" href="farmer.css"> -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Uchen&display=swap" rel="stylesheet">
    <style>
        * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Rubik Vinyl', cursive;
    font-family: 'Uchen', serif;
    background: none;
}

body {
    font-family: Arial, sans-serif;
}

.content {
    background: whitesmoke;
}

#logo {
    font-size: 33px;
    color: green;
}

#logo img {
    width: 80px;
    height: 50px;
}

.navbar-brand img {
    height: 40px;
    padding-left: 30px;
}

.navbar-nav li {
    padding: 0 15px;
}

.navbar-nav li a {
    float: right;
    text-align: right;
    font-size: medium;
}

.navbar ul li a:hover {
    color: green !important;
    font-weight: bold;
    text-shadow: 1px 1px 1px lime;
    transition: 0.5s ease;
    font-size: large;
}

.navbar-nav {
    margin-left: 5px;
}

.nav-link {
    color: white;
    font-weight: bold;
    text-shadow: 1px 1px 1px lime;
    margin-left: 15px;
    transition: 0.5s ease;
}

.nav-link:hover {
    background-color: whitesmoke;
    color: green;
    border-radius: 5px;
    transform: translateY(-5px);
}

.icons {
    margin-right: 15px;
}

/* Set a fixed width and height for all icon images */
.icons img {
    width: 20px; /* Adjust the size as needed */
    height: 20px; /* Adjust the size as needed */
    margin-right: 10px;
    transition: 0.5s ease;
    cursor: pointer;
}

.icons img:hover {
    transform: translateY(-5px);
}

@media screen and (max-width: 330px) {
    #logo {
        font-size: 15px;
    }
}

.container {
    text-align: center;
    margin: 50px;
}

/* Adjust the spacing for the search container */
.search-container {
    margin-right: 0; /* Adjust the margin as needed */
}

input[type="text"] {
    padding: 8px;
    font-size: 16px;
    margin-right: 5px; /* Adjust the margin as needed */
}

button {
    padding: 8px 16px;
    font-size: 16px;
    cursor: pointer;
}

#searchResults {
    margin-top: 20px;
}

</style>
</head>
<body>
    <div class="content">
        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="navbar-brand" href="#" id="logo">
                <img src="Images/LOGO.png" width="50px">
                <span style="color:black">AG</span><span style="color:rgb(11, 212, 11)">RO</span>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="CustomerHome.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="About us.php">About us</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" id="navbardrop" data-toggle="dropdown">Categories</a>
                        <div class="dropdown-menu">
                            <a href="Seeds.php" class="dropdown-item">Seeds</a>
                            <a href="Vegetables.php" class="dropdown-item">Vegetables</a>
                            <a href="Fruits.php" class="dropdown-item">Fruits</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Shop.php">Shop</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.php">Contact us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Blog.php">Blog</a>
                    </li>
                </ul>
            </div>
            <div class="icons">
            <a href="card.php"><img src="Images/add to.svg" alt="Add To" width="20px"></a>
            <a href="User.php"><img src="Images/userf.svg" alt="User" width="24px"></a>

            </div>
        </nav>
    </div>

</body>
</html>
