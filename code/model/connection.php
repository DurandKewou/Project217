<?php
    
    function connection(){
        try {
            $connexion =$dbh = new PDO('mysql:host=localhost;dbname=bd217',"root","");
            return $connexion;
        } catch (PDOException $e) {
            print "Erreur !: " . $e->getMessage() . "<br/>";
            die();
        }
    }
