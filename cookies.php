<!doctype HTML>
<html>
<head>
    <title>Inlogscherm</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="../../inlog/stylesheet.css">
    <link rel="stylesheet" type="text/css" href="../../inlog/font-awesome.css">
</head>
<body>
<div class="container">
    <img src="../../inlog/image/foto.png">
    <form name="login" action="" method="POST">

        <div class="form-input">
            <input type="text" name="username" id="username" placeholder="Gebruikersnaam" onblur="validateEmail(this)">
        </div>

        <div class="form-input">
            <input type="password" name="password" id="password" placeholder="Wachtwoord">
        </div>
        <button name="sumbit" class="btn-login" value="SEND">LOGIN</button>
    </form><br>

    <input type="checkbox" name="remember"  title="2" id="remember">remember me<br><br>
</div>
<footer>
    <p>Login Form powered by <a class="footer-text" href="../index.html">Groep 6</a></p>
</footer>

<script>

    function validateEmail(emailField){
        var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;

        if (reg.test(emailField.value) == false)
        {
            alert('Ongeldige gebruikersnaam');
            return false;
        }

        return true;

    }
</script>
</body>
</html>


<?php
error_reporting('off');
$users = array(
    "dozturk01@student.rocvantwente.nl"     => "Welkom12345");

if (array_key_exists($_POST['username'], $users)) {
    if ($_POST['password'] == $users[strtolower($_POST['username'])]) {
        if ($_POST['remember'] == 0) {
            setcookie("username", "");
        } else {
            setcookie("username", $_POST['username']);
        }
        if ($_COOKIE["usecookies"] == 0) {
            echo "  <script>
                    if (confirm('accepteert u cookies op deze website?')){
                        document.cookie = 'usecookies=1';
                        window.location.href = 'https://rapoo.000webhostapp.com';
                    } else {
                        document.cookie = 'usecookies=0';
                        document.cookie = 'username=';
                        window.location.href = 'https://www.bolletje.com';
                    }
             </script>";
        } else {
            echo "<script> window.location.href = 'https://rapoo.000webhostapp.com'</script>";
        }
    } else {
        echo "<div style='color: #ff0000'><script>alert('onjuist gebruikers naam of wachtwoord')</script></div>";
    }
}
?>