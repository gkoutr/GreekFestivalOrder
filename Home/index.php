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


</head>
<body>
<div id="container">
    <?php include '../shared/header.php' ?>
    <h1 id="welcome">Welcome to the Greek Festival!</h1>
    <div id="pg">

        <p>Here you can place orders for pickup! </p>
        <p>Create an account for easy checkouts in the future!</p>
    </div>

    <?php include '../shared/signin.php' ?>

    <footer id="footer">
        <p>
            <em>Created By George Koutroumpis</em>
        </p>
    </footer>

</body>
</html>