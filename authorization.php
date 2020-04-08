<?php
session_start();
require "array.php";
$LOGIN = $_POST["login"];
$PASSWORD = $_POST["password"];
$SUBMIT = $_POST["submit"];


$counter = 0;



//   if (!isset($_SESSION)){
    if(!empty($LOGIN)){
        for($i = 0; $i<count($arr); $i++){ 

            if($LOGIN == $arr[$i]["login"] and $PASSWORD == $arr[$i]["password"]) {
                
                $_SESSION["user"] = ["role"=> $arr[$i]["role"], "name"=> $arr[$i]["name"],"surname"=> $arr[$i]["surname"], "lang"=> $arr[$i]["lang"] ]; 
                

                switch($arr[$i]["role"]) {
                    case "Admin": {
                        
                        if ($arr[$i]["lang"] == "en"){  
                            $counter++;
                            header("Location: roles/en/admin.php");
                        }
                        else if ($arr[$i]["lang"] == "ua"){  
                            $counter++;
                            header("Location: roles/ua/admin.php");
                        }
                        else if ($arr[$i]["lang"] == "it"){
                            $counter++;
                            header("Location: roles/it/admin.php");
                        }
                        else if ($arr[$i]["lang"] == "ru"){
                            $counter++;
                            header("Location: roles/ru/admin.php");
                        }
                        else {
                            header ("Location: change_lang.php");
                        }
                    break;
                }
                    case "Manager": {
                        
                        if ($arr[$i]["lang"] == "en"){
                            $counter++;
                            header("Location: roles/en/manager.php");
                        }
                        else if ($arr[$i]["lang"] == "ua"){
                            $counter++;
                            header("Location: roles/ua/manager.php");
                        }
                        else if ($arr[$i]["lang"] == "it"){
                            $counter++;
                            header("Location: roles/it/manager.php");
                        }
                        else if ($arr[$i]["lang"] == "ru"){
                            $counter++;
                            header("Location: roles/ru/manager.php");
                        }
                        else {
                            header ("Location: change_lang.php");
                        }
                    break;
                }
                    case "Client": {
                        
                        if ($arr[$i]["lang"] == "en"){
                            $counter++;
                            header("Location: roles/en/client.php");
                        }
                        else if ($arr[$i]["lang"] == "ua"){
                            $counter++;
                            header("Location: roles/ua/client.php");
                        }
                        else if ($arr[$i]["lang"] == "it"){
                            $counter++;
                            header("Location: roles/it/client.php");
                        }
                        else if ($arr[$i]["lang"] == "ru"){
                            $counter++;
                            header("Location: roles/ru/client.php");
                        }
                        else {
                            header ("Location: change_lang.php");
                        }
                    break;
                }
                }
                    
                
            }
            
        }
        if($counter == 0){
        echo "Вы ввели неверные данные!";
        }
    }

require "index.php";
?>