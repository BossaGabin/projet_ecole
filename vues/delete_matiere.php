<?php
session_start();
   require_once '../Models/model.class.php';  
    $model = new Model();
    $id = (int)htmlspecialchars($_GET['id_matiere']) ;
    $model->supprimerMatiere($id);  
    $_SESSION['remove']="Donnée supprimée"; 
   header("Location:list_matiere.php");     
?>
