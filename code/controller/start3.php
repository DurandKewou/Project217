<?php
    session_start();
    require_once('../vue/start3.php');

    $_SESSION['telephone'] = $_POST['telephone'];
    $_SESSION['email'] =$_POST['email'] ;
    $_SESSION['positionlabel'] = $_POST['positionlabel'];
    $_SESSION['couleur_text'] = $_POST['select'];
    
