<?php
    session_start();
   
    @require_once("../vue/start4.php");

    for ($i=1; $i < (int)((count($_POST))/3)+1 ; $i++) {
        $_SESSION['champ'][$i][1] = $_POST['lab' . $i];
        $_SESSION['champ'][$i][2] = $_POST['tail' . $i];
        $_SESSION['champ'][$i][3] = $_POST['ind' . $i];
    }

    

    