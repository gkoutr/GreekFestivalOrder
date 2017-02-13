<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <title>Greek Festival Menu</title>
    <!-- Latest compiled and minified CSS -->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <!--<script src="http://code.jquery.com/ui/1.9.2/jquery-ui.js"></script>-->
    <link rel="stylesheet" href="style/style.css"/>


</head>
<body>
<div id="container">
    <header>
        <a href="/">
            <img src="img/header.jpg" alt="Greek Festival Banner" id="banner">
        </a>
        <nav class="navbar navbar-default">
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="index.php">Home</a>
                    </li>
                    <li>
                        <a href="Order/Order.php">Order</a>
                    </li>
                    <li>
                        <a href="about.php">About</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <h1 id="welcome">Welcome to the Greek Festival!</h1>
    <div id="pg">

        <p>Here you can place orders for pickup! </p>
        <p>Create an account for easy checkouts in the future!</p>
    </div>

    <div id="sidebar">
        <h2>Log In/Register</h2>
        <form action="login.php" id="login" method="post">
            <fieldset>

                <p>
                    <label>Log in</label>
                    <br>
                    Username:
                    <input type="text" name="username" id="username">
                    <br>
                    Password:
                    <input type="text" name="password" id="password">
                    <br>
                    <a href="register.php" id="register">Click here to Register</a>
                </p>
            </fieldset>

        </form>
        <h2>Cart</h2>
        <form action="cart.php" id="cart" method="post">
            <p>Your cart is empty</p>

        </form>

    </div>

    <footer id="footer">
        <p>
            <em>Created By George Koutroumpis</em>
        </p>
    </footer>

</body>
</html>