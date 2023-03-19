<?php
   require_once '../Models/model.class.php';  
   $model = new Model();
   $req = $model->listMatiere();  

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
    session_start();
    include '../header.php';
  ?>  
  <!-- ======= Hero Section ======= -->
  <section id="" class="d-flex align-items-center justify-content-center">
    <div class="container" data-aos="fade-up">

      <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="150">
        <div class="col-xl-6 col-lg-8" style="margin-top:15%; margin-right:30%">
        <?php 
            if(isset($_SESSION['success']))
            {
               ?>
                 <div class="alert alert-success" role="alert">
                   <div>
                     <div style="margin-bottom: -20px;;">
                       <?php echo $_SESSION['success']; ?>
                      </div>                    
                     <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close" style="margin-left:97%;"></button>
                   </div>
                </div>
               <?php
               
              unset($_SESSION['success']);
            }
         ?>
         <?php
        //  session_start();
            if(isset($_SESSION['remove']))
            {
                ?>
                   <div class="alert alert-danger" role="alert">
                    <div >
                      <div style="margin-bottom: -20px;;">
                         <?php echo $_SESSION['remove']; ?>
                      </div>
                      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close" style="margin-left:97%;"></button>
                    </div>
                  </div>
                <?php
                unset($_SESSION['remove']);
            }
          ?>
          <h3>LISTES DES MATIERES<span>.</span></h3>
          <!-- <h2>We are team of talented digital marketers</h2> -->
        </div>
        <div>
           <a style="margin-left: 90%; margin-top:-7%;" class=" btn btn-primary" href="add_matiere.php" ><span class="glyphicon glyphicon-plus"></span> Nouveau</a>
        </div>
      </div>
      <div class="container">
  
            <!-- <p>The .table-condensed class makes a table more compact by cutting cell padding in half:</p>                                     -->
            <table  class="table table-striped table-bordered">
                <thead>
                <tr>
                    <th style="color:black">#</th>
                    <th style="color:black">NOM</th>
                    <th style="color:black">PROFESSEUR</th>
                    <th style="color:black">COEFFICIENT</th>
                    <th style="color:black">ACTIONS</th>
                </tr>
                </thead>
                <tbody>
                    <?php
                        
                        foreach($req as $row){   ?>
            
                            <tr>
                                <td style="color:black"><?= $row['id'] ?></td>
                                <td style="color:black"><?= $row['nom'] ?></td>
                                <td style="color:black"><?= $row['professeur'] ?></td>  
                                <td  style="color:black"><?= $row['coefficient'] ?></td>                              
                                <td>
                                <a class="btn btn-info" href="list_note_matiere.php?id_matiere=<?= $row['id'] ?>"> <span class="glyphicon glyphicon-eye-open"></span> Voir</a>
                                <a class="btn btn-warning" href=""> <span class="glyphicon glyphicon-pencil"></span> Modifier</a>
                                <a class="btn btn-danger" href="delete_matiere.php?id_matiere=<?= $row['id'] ?>"> <span class="glyphicon glyphicon-remove"></span> Supprimer</a>                                                                           
                                </td>                
                                        
                            </tr>

                        <?php  }
                    ?>

                
                
                </tbody>
            </table>
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