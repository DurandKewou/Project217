<?php
    @require_once("../model/model.php");
    session_start();
    $_SESSION['bg_couleur'] = $_POST['select'];

    
    if(isset($_SESSION['bg_couleur'])){
        save();
    }elseif(isset($_POST['delete'])) {
        
        sup_template($_POST['id']);
    }elseif(isset($_POST['create'])){
        $_SESSION['id'] = $_POST['id'];
        header("Location:../controller/facture.php");
        die();
    }
    $models = affichage();
    
    @require_once("../vue/creation.php");

    function save(){
        if(isset($_SESSION['nom_template']) && isset( $_SESSION['champ']) && isset($_SESSION['telephone']) && isset($_SESSION['email']) && isset($_SESSION['positionlabel']) && isset($_SESSION['couleur_text']) && isset($_SESSION['bg_couleur'])){
            saveForm();
        }   
        session_destroy();
    }

    function affichage(){
        $models = getmodels();
        return $models;
    }
