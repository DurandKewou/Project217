<?php
    session_start();
    @require_once("../model/model.php");

    
    $template = affiche_template($_SESSION['id'] );
    $champs = affiche_champ($_SESSION['id'] );    

    $id_template = $template[0]['id_template'];
    $name = $template[0]['nom_template'];
    $telephone = $template[0]['telephone'];
    $mail = $template[0]['email'];
    $bg = $template[0]['bg_couleur'];
    $color = $template[0]['couleur_text'];
    $position_label = $template[0]['position_label'];
    $date = date('d-m-y');
    $id_facture = new_idfacture();


    function affiche_template($id){
        $rep = getModel($id);
        return $rep;
    }

    function affiche_champ($id){
        $rep = getChamp($id);
        return $rep;
    }
    
    @require_once("../vue/facture.php");