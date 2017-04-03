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
    <Script src="ChangeModaltext.js"/>
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
    <?php include '../shared/header.php' ?>

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
            <input type="text" style = "width: 24px" name="fries" id="fries">
            Fries
            <br>
            <input type="text" style = "width: 24px" name="calimari" id="calimari">
            Calimari
            <br>
        </p>
    </div>
    <input type="submit" class="rounded" value="Add to Cart"/>
    <input type="reset"/>
    </fieldset>

    </form>
</div>


<?php include '../shared/signin.php' ?>

<footer id="footer">
    <p>
        <em>Created By George Koutroumpis</em>
    </p>
</footer>

</div>

</body>
</html>