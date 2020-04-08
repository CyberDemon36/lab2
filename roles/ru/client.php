<?php
session_start();
require "../../classes.php";
require "../../array.php";

if (!isset($_SESSION["user"])){
    header("Location: ../../authorization.php");
}
else if (!($_SESSION["user"]["role"]!="Admin" or "Manager" or "Client")){
    exit(header("Location: /error404/"));
}

if($_POST["exit"]){ 
    session_destroy();
    header("Location: ../../authorization.php");
}
if($_SESSION["user"]["role"] == "Admin" or "Manager" or "Client"){
    $client = new client($_SESSION["user"]["name"], $_SESSION["user"]["surname"], $_SESSION["user"]["role"],$arr[$i]["login"],$arr[$i]["password"]);
    $client->introduce_ru();
}

?><html>
<body>
    <br>
    <a href="../../change_lang.php">Change your language</a>
    <br>
    <form method="POST">
    <input type="submit" name="exit" value="Выйти">
    </form>
</body>
</html>