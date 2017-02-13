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
    <link rel="stylesheet" href="../style/style.css"/>

    <?php include 'ToppingsModal.php' ?>
   <!-- <script src = "../toppings.js"/>-->

    <!--<script src ="JavaScript/PopUpModal.js"</script>

<!--    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <script type="text/javascript">
        $(function () {
            $("input[name='chkPassPort']").click(function () {
                if ($("#chkYes").is(":checked")) {
                    $("#dvPassport").show();
                } else {
                    $("#dvPassport").hide();
                }
            });
        });
    </script>-->



</head>
<body>
<div id="container">
    <header>
        <a href="/">
            <img src="../img/header.jpg" alt="Greek Festival Banner" id="banner">
        </a>
        <nav class="navbar navbar-default">
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="index.php">Home</a>
                    </li>
                    <li>
                        <a href="order.php">Order</a>
                    </li>
                    <li>
                        <a href="about.php">About</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>


    <div id="form">
        <h2>Order Form</h2>
        <form method="post" name="Form" action=" " id="mainForm" onsubmit="return validate();">
            <fieldset>
                <div id="sandwich"
                <p>
                    <label>Choose a sandwich: </label>
                    <br>
                    <button id="myBtnG" class="btn btn-primary btn-lg" data-toggle="modal" onclick="changeText(this.id)" value = "Gyro" type = "button" data-target="#myModal">Gyro
                    </button>
                    <!-- <input type = "radio" onclick= "div_show()" name = "sandwich" id="gyro" value="yes">
                     Gyro-->
                    <button id="myBtnS" class="btn btn-primary btn-lg" data-toggle="modal" onclick="changeText(this.id)" value = "souvlaki" type = "button" data-target="#myModal">Souvlaki
                    </button>
                    <button id="myBtnA" class="btn btn-primary btn-lg" data-toggle="modal" onclick="changeText(this.id)" value = "athenian" type = "button" data-target="#myModal">Athenian
                    </button>
                    <button id="myBtnV" class="btn btn-primary btn-lg" data-toggle="modal" onclick="changeText(this.id)" value = "vegetarian" type = "button" data-target="#myModal">Vegetarian
                    </button>

<!--                    <br>-->
<!--                    <input type="radio" name="sandwich" id="souvlaki" value="yes">-->
<!--                    Souvlaki-->
<!--                    <br>-->
<!--                    <input type="radio" name="sandwich" id="athenian" value="yes">-->
<!--                    Athenian-->
<!--                    <br>-->
<!--                    <input type="radio" name="sandwich" id="vegetarian" value="yes">-->
<!--                    Vegetarian-->
<!--                    <br>-->
                </p>
    </div>


    <div id="sides">
        <p>
            <label>Sides:</label>
            <br>
            <input type="checkbox" name="fries" id="fries">
            Fries
            <br>
            <input type="checkbox" name="calimari" id="calimari">
            Calimari
            <br>
        </p>
    </div>
    <input type="submit" class="rounded" value="Add to Cart"/>
    <input type="reset"/>
    </fieldset>

    </form>
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
                <a href="../register.php" id="register">Click here to Register</a>
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

</div>

</body>
</html>