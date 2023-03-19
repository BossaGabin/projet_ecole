<?php
session_start();
   require_once '../Models/model.class.php';   
  if (!empty($_POST)) {    
    extract($_POST);
    $valid = true;
    if(isset($_POST['btnAjouter'])){
      $nom = @htmlspecialchars($_POST['nom']);
      $prenom = @htmlspecialchars($_POST['prenom']);
      $classe = @htmlspecialchars($_POST['classe']);
      $model = new Model();
      $model->ajouterEleve($nom,$prenom,$classe);
      // header("Location:add_eleve.php");
      if (empty($nom)) {
            $valid = false;
            $error = "veuillez inscrire dans ce champ !";
            
        }
       if(empty($prenom)) {
            $valid = false;
            $error = "veuillez inscrire dans ce champ !";
        }
        
       if(empty($classe)) {
            $valid = false;
            $error = "veuillez inscrire dans ce champ !";
        }
    }
    $_SESSION['success']= "Enregistrement réussi";
    header('Location:list_eleve.php');
    
  }
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>GESTION ECOLE</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

  <!-- =======================================================
  * Template Name: Gp - v4.9.1
  * Template URL: https://bootstrapmade.com/gp-free-multipurpose-html-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
  <?php
    include '../header.php';
  ?>  
  <!-- ======= Hero Section ======= -->
  <section id="" class="d-flex align-items-center justify-content-center">
    <div class="container" data-aos="fade-up">

      <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="150">
        <div class="col-xl-6 col-lg-8">
          <h3 style="color:black;margin-top:25%;">FORMULAIRE D'AJOUT DES ELEVES<span>.</span></h3>
          <!-- <h2>We are team of talented digital marketers</h2> -->
        </div>
      </div>

      <div class="row gy-4 mt-5 justify-content-center" data-aos="zoom-in" data-aos-delay="250">
        <form action="add_eleve.php" method="post">   
            <div class="boite_form" style="margin-left:35%;">
                <label class="lab" for="">Nom:</label><br>
                <input style="color: black;width: 50%;" type="text" class="form-control mb-2 mr-sm-2" name="nom" id="nom" maxLength="25" size="25" required><br>
                <label class="lab" for="">Prénom:</label><br>
                <input style="color: black;width: 50%;" type="text" class="form-control mb-2 mr-sm-2" name="prenom" id="prenom" maxLength="25" size="25" required><br>
                <!-- <label class="lab" for="">Age:</label><br>
                <input type="number" class="form-control mb-2 mr-sm-2" name="age" id="age" min="1"  value=" "><br> -->
                <label class="lab" for="">Classe:</label>
                <select style="width: 50%;" name="classe" id="classe" class="form-control mb-2 mr-sm-2" required>
                    <option value="classe">Choisissez la classe</option>
                    <option value="6ème">6 eme</option>
                    <option value="5ème">5 eme</option>  
                    <option value="4ème">4 eme</option>  
                    <option value="3ème">3 eme</option>  
                    <option value="Seconde">Seconde(2nd)</option>  
                    <option value="Première">Premiere(1ere)</option>  
                    <option value="Terminal">Terminal(Tle)</option>  
                </select><br>                
            </div>
            <div style="margin-left:35%;">
              <button  type="submit" class=" btn btn-success" name="btnAjouter"><span class="glyphicon glyphicon-plus"></span> AJOUTER</button>
              <button type="submit" class=" btn btn-primary" name="btnModifier"><span class="glyphicon glyphicon-pencil"></span> MODIFIER</button>
              <button type="submit" class="btn btn-danger" name="btnSupprimer"><span class="glyphicon glyphicon-remove"></span> SUPPRIMER</button>
            </div><br><br><br>
        </form>
      </div>

    </div>
  </section><!-- End Hero -->

  <main id="main">

   

  </main><!-- End #main -->
  <?php
    include '../footer.php';
  ?>

  

  <!-- <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a> -->

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>