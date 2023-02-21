<?php
  session_start();
  $_SESSION['nom_template'] = $_POST['nom'];
  
  require_once('../vue/start2.php');
