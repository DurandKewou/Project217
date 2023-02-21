<?php

    if(isset($_GET['id_template'])){
        @require_once("../model/model.php");
        $id_template = $_GET['id_template'];
        $id_facture = $_GET['id_facture'];
        $_vals = [];
        for ($i=0; $i < (int)((count($_GET)-3)/2) ; $i++) {
            $_vals[$i][0] = $_GET['champ' . $i];
            $_vals[$i][1] = $_GET['donnee' . $i];
        }
        create_facture($id_template,$id_facture, $_vals);
        header("Location:../controller/creation.php");
        die();
    }
    
    @require_once("../vue/index.php");