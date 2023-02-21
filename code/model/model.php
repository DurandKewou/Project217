<?php 
    @require_once('connection.php');

    function saveForm() {
        
        $connexion = connection();
        $requete = $connexion->prepare("INSERT INTO `template`(`id_template`, `nom_template`, `telephone`, `email`, `position_label`, `couleur_text`,`bg_couleur`) VALUES (null,'".$_SESSION['nom_template']."','".$_SESSION['telephone']."','".$_SESSION['email']."','".$_SESSION['positionlabel']."','".$_SESSION['couleur_text']."','".$_SESSION['bg_couleur']."')");
        $requete->execute();

        $resultat = $connexion->prepare("select max(id_template) from template");
        $resultat->execute();
        $rep = $resultat->fetchAll();
        $var = $rep[0][0];
        
        foreach($_SESSION['champ'] as  $value) {
            $requete = $connexion->prepare("INSERT INTO `champ`(`id_champ`, `valeur`, `taille`,`indication`, `id_template`) VALUES (NULL,'$value[1]','$value[2]','$value[3]','$var')");
            $requete->execute();
        }
        
    } 


    function getModels(){

        $connexion = connection();
        $resultat = $connexion->prepare("SELECT `id_template`, `nom_template`, `telephone`, `email`, `position_label`, `couleur_text`,`bg_couleur` FROM `template` WHERE 1");
        $resultat->execute();
        $rep = $resultat->fetchAll();
     
        return $rep;
    }

    function getModel($id){
        $connexion = connection();
        $resultat = $connexion->prepare("SELECT `id_template`, `nom_template`, `telephone`, `email`, `position_label`, `couleur_text`,`bg_couleur` FROM `template` WHERE  `id_template` = $id");
        $resultat->execute();
        $rep = $resultat->fetchAll();

        return $rep;
    }


    function getChamp($id){
        $connexion = connection();
        $resultat = $connexion->prepare("SELECT `id_champ`, `valeur`, `taille`, `indication`, `id_template` FROM `champ` WHERE `id_template` = $id");
        $resultat->execute();
        $rep = $resultat->fetchAll();

        return $rep;
    }

    // function sup_champ($id){
    //     $connexion = connection();
    //     $resultat->execute();
    // }

    function sup_template($id){
        $connexion = connection();
        $resultat2 = $connexion->prepare("DELETE  FROM `champ` WHERE  id_template = $id");
        $resultat = $connexion->prepare("DELETE  FROM `template` WHERE  id_template = $id");
        $resultat2->execute();
        $resultat->execute();

    }

    function new_idfacture(){
        $connexion = connection();
        $resultat = $connexion->prepare("SELECT MAX(`id_facture`) FROM `facture` WHERE 1 ;");
        $resultat->execute();
        $rep = $resultat->fetchAll();
        return $rep[0][0] + 1;
    }

    function create_facture($id_template,$id_facture,$vals){
        $connexion = connection();
        $resultat = $connexion->prepare("INSERT INTO `facture`(`id_facture`, `date_creation`, `id_template`) VALUES (null,NOW(),$id_template)");
        $resultat->execute();

        foreach($vals as $val){
            $resultat = $connexion->prepare("INSERT INTO `donnee`(`id_donnee`, `id_champ`, `id_facture`, `valeur`) VALUES (NULL,'$val[0]',$id_facture,'$val[1]')");
            $resultat->execute();
        }
    }