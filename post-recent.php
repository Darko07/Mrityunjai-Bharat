<?php

	ini_set('display_startup_errors',1);
	ini_set('display_errors',1);
	error_reporting(-1);

    //session_start();
    
    include 'dbconn.php';

    if(isset($_POST["recentText"])) {

        $text = $_POST["recentText"];

        $query = "INSERT INTO `recent_updates` (`text`) VALUES ('$text');";

        mysqli_query($conn, $query) or die("Error executing query!!");

        header("Location: admin.php");
    }

?>

<!DOCTYPE html>
<html>
    <head>
        <style>
        * {
            padding: 0px;
            margin: 0px;
        }
        #loader {
            position: fixed;
            width: 100%;
            height: 100%;
            background: rgba(255, 255, 255, 0.7);
            z-index: 99;
        }

        #circle {
            position: absolute;
            top: 50%;
            left: 50%;
            width: 15vw;
            height: 15vw;
            border-radius: 1000px;
            border-top: 4px solid #ed1a46;
            border-right: 4px solid #ed1a46;
            transform: translateX(-50%) translateY(-50%) rotate(0deg);
            animation: c 2s linear infinite;
        }

        #circle1 {
            position: absolute;
            top: 50%;
            left: 50%;
            width: 12vw;
            height: 12vw;
            border-radius: 1000px;
            border-bottom: 4px solid #ed1a46;
            border-left: 4px solid #ed1a46;
            transform: translateX(-50%) translateY(-50%) rotate(0deg);
            animation: c1 2s linear infinite;
        }

        @keyframes c {
            0%{
                transform: translateX(-50%) translateY(-50%) rotate(0deg);
            }

            100%{
                transform: translateX(-50%) translateY(-50%) rotate(360deg);
            }
        }

        @keyframes c1 {
            0%{
                transform: translateX(-50%) translateY(-50%) rotate(0deg);
            }

            100%{
                transform: translateX(-50%) translateY(-50%) rotate(-360deg);
            }
        }

        </style>
    </head>
    <body>
    <div id="loader">
        <div id="circle">
            
        </div>
        <div id="circle1">
            
        </div>
    </div>
    </body>
</html>