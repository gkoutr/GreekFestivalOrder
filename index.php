<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Greek Festival Menu</title>

    <link rel = "stylesheet" href = "style.css"/>
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="http://code.jquery.com/ui/1.9.2/jquery-ui.js"></script>
    <script type="text/javascript" src="toppings.js"></script>

</head>
<body>

<div id = "container">
    <a href="/">
        <img src = "img/header.jpg" alt="Greek Festival Banner" id="banner">
    </a>




    <div id ="form">
    <h2>Order Form</h2>
        <form method = "post" name="Form" action=" " id="mainForm" onsubmit="return validate();">
            <fieldset>
                <div id = "sandwich"
                    <p>
                        <label>Choose a sandwich: </label>
                        <br>
                        <input type = "radio" onclick= "" name = "sandwich" id="gyro" value="yes">
                        Gyro
                        <br>
                        <input type = "radio" name = "sandwich" id="souvlaki" value="yes">
                        Souvlaki
                        <br>
                        <input type = "radio" name = "sandwich" id="athenian" value="yes">
                        Athenian
                        <br>
                        <input type = "radio" name = "sandwich" id="vegetarian" value="yes">
                        Vegetarian
                        <br>
                    </p>
                </div>
                <div id = "toppings">
                    <p>
                        <label>Choose Toppings:</label>
                        <br>
                        <input type = "checkbox" name = "lettuce" id="lettuce" >
                        Lettuce
                        <br>
                        <input type = "checkbox" name = "tomato" id="tomato" >
                        Tomato
                        <br>
                        <input type = "checkbox" name = "cucumber" id="cucumber" >
                        Cucumber
                        <br>
                        <input type = "checkbox" name = "feta" id="feta" >
                        Feta
                        <br>
                        <input type = "checkbox" name = "onion" id="onion" >
                        Onions
                        <br>
                        <input type = "checkbox" name = "tzatziki" id="tzatziki" >
                        Tzatziki Sauce
                        <br>
                        <input type = "checkbox" name = "nopita" id="nopita" >
                        No Pita Bread
                        <br>
                    </p>
                </div>
                <div id = "sides">
                    <p>
                        <label>Sides:</label>
                        <br>
                        <input type = "checkbox" name = "fries" id = "fries">
                        Fries
                        <br>
                        <input type = "checkbox" name = "calimari" id = "calimari">
                        Calimari
                        <br>
                    </p>
                </div>
                <input type = "submit" class = "rounded" value = "Add to Cart"/>
                <input type = "reset" />
            </fieldset>

        </form>
    </div>


    <div id="login">
        <h2>Log In/Register</h2>
        <form action = "login.php" method = "post">
            <fieldset>

                <p>
                    <label>Log in</label>
                    <br>
                    Username:
                    <input type = "text" name = "username">
                    <br>
                    Password:
                    <input type = "text" name="password">
                    <br>
                    <a href="register.php">Click here to Register</a>
                </p>

            </fieldset>

        </form>

    </div>


    <form action="ex.html">
          <input type = "submit" value="testing"/>
    </form>
</div>
</body>
</html>