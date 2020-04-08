<?php
session_start();

$_SESSION["user"]["lang"] = $_POST["lang"];

// print_r($_SESSION);

// if(!empty($_SESSION["user"]["lang"])){

switch($_SESSION["user"]["role"]) {

    case "Admin": {
        
        if ($_SESSION["user"]["lang"] == "en"){  
            $counter++;
             header("Location: roles/en/admin.php");
        }
        else if ($_SESSION["user"]["lang"] == "ua"){  
            $counter++;
            header("Location: roles/ua/admin.php");
        }
        else if ($_SESSION["user"]["lang"] == "it"){
            $counter++;
            header("Location: roles/it/admin.php");
        }
        else if ($_SESSION["user"]["lang"] == "ru"){
            $counter++;
            header("Location: roles/ru/admin.php");
        }
       
    break;
}
    case "Manager": {
        
        if ($_SESSION["user"]["lang"] == "en"){
            $counter++;
            header("Location: roles/en/manager.php");
        }
        else if ($_SESSION["user"]["lang"] == "ua"){
            $counter++;
            header("Location: roles/ua/manager.php");
        }
        else if ($_SESSION["user"]["lang"] == "it"){
            $counter++;
            header("Location: roles/it/manager.php");
        }
        else if ($_SESSION["user"]["lang"] == "ru"){
            $counter++;
            header("Location: roles/ru/manager.php");
        }
        
    break;
}
    case "Client": {
        
        if ($_SESSION["user"]["lang"] == "en"){
            $counter++;
            header("Location: roles/en/client.php");
        }
        else if ($_SESSION["user"]["lang"] == "ua"){
            $counter++;
            header("Location: roles/ua/client.php");
        }
        else if ($_SESSION["user"]["lang"] == "it"){
            $counter++;
            header("Location: roles/it/client.php");
        }
        else if ($_SESSION["user"]["lang"] == "ru"){
            $counter++;
            header("Location: roles/ru/client.php");
        }
        
    break;
}
}
// }

?>
<html>
<body>
    
<form method="POST">
<select name="lang" >
    <option value="ru">Русский</option>
    <option value="ua">Українська</option>
    <option value="en">English</option>
    <option value="it">Italiano</option>
</select>
    <input type="submit" value="Select">
</form>


</body>
</html>