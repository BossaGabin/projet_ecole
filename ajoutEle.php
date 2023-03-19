<?php
  require_once 'Models/model.class.php';
  $nom = htmlspecialchars($_POST['nom']);
  $prenom = htmlspecialchars($_POST['prenom']);
  $classe = htmlspecialchars($_POST['classe']);
  $model = new Model();
  $model->ajouterEleve($nom,$prenom,$classe);
// header("Location:add_eleve.php");
?>