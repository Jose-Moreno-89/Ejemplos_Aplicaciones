<?php
require_once("class/class.php");
//print_r($_POST);
$tra=new Trabajo();
$tra->ins_visitas($_POST['nom_txt'],$_POST['texto_ta']);
?> 