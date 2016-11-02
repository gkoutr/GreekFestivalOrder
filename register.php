
<html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Greek Festival Menu</title>

    <link rel = "stylesheet" href = "style/style.css"/>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>

<div id = "container">
    <a href="/">
        <img src = "img/header.jpg" alt="Greek Festival Banner" id="banner">
    </a>

    <div id="register" class="container center_div">
        <h2>Register</h2>
            <form method="post" name="Form" id="registerForm" action="" onsubmit="return validate();">
                <p>
                    <label>First Name: </label>
                    <br>
                    <input type="text" name="firstname" id="firstname" class="required">
                </p>
                <p>
                    <label>Last Name: </label>
                    <br>
                    <input type="text" name="lastname" id="lastname" class="required">
                </p>
                <p>
                    <label>Enter a Password: </label>
                    <br>
                    <input type="text" name="password" id="password" class="required">
                </p>
                <p>
                    <label>Confirm password: </label>
                    <br>
                    <input type="text" name="confirmpass" id="confirmpass" class="required">
                </p>
                <p>
                    <label>Enter your email: </label>
                    <br>
                    <input type="email" name="email" id="email" class="required">
                </p>


            </form>

    </div>
</body>
</html>
