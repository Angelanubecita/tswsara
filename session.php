<?php
    session_start();

    if(isset($_SESSION['userid']) && $_SESSION["userid"] == true){
        

        if ($_SESSION['user']['rol'] !== 'admin') {
            header("Location: cliente.php");
            exit;
        }


        //header("Location: home.php");
        //exit;
    }
?>