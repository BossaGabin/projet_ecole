<?php
   require_once 'Models/model.class.php';  
   $model = new Model();
   $req = $model->listCinqMeuilleurEleve(); 
   $req1= $model->listCinqMeuilleureNote ();

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
  <!-- ======= Header ======= -->
<header id="header" class="fixed-top bg-dark ">
    <div class="container d-flex align-items-center justify-content-lg-between">

    <div style="margin-right:60%;">
       <h1 class="logo me-auto me-lg-0"><a href="../index.php" >GEST-ECOLE<span>.</span></a></h1>
    </div>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto me-lg-0"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar order-last bg-dark">
        <ul>
          <li style="margin-top: 5%; color:black;"><a class="nav-link scrollto " href="vues/list_eleve.php">ELEVES</a></li>
          <li style="margin-top: 5%;"><a class="nav-link scrollto" href="vues/list_matiere.php">MATIERES</a></li>
          <li style="margin-top: 5%;"><a class="nav-link scrollto" href="vues/list_note.php"> NOTES</a></li>         
          <!-- <li><a class="nav-link scrollto" href="#team">LISTES DES NOTES</a></li> -->
        
          <!-- <li><a class="nav-link scrollto" href="#contact">Contact</a></li> -->
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <!-- <a href="#about" class="get-started-btn scrollto">Get Started</a> -->

    </div>
  </header><!-- End Header -->  
  <!-- ======= Hero Section ======= -->
  <section id="" class="d-flex align-items-center justify-content-center">
    <div class="container" data-aos="fade-up">

      <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="150" >
               
      </div>
        <div class="container">  
         <div class="row">
           <div class="col-md-6" style="margin-top: 20%;">
            <div class="col-xl-6 col-lg-8">
                <h3>LISTES DES CINQ MEILLEURS ELEVES<span>.</span></h3>
                <!-- <h2>We are team of talented digital marketers</h2> -->
            </div> 
              <table  class="table table-striped table-bordered">
                <thead>
                <tr>                    
                    <th style="color:black">NOM ET PRENOM</th>
                    <th style="color:black">MOYENNE</th>                   
                </tr>
                </thead>
                <tbody>
                    <?php
                        
                        foreach($req as $row){   ?>            
                            <tr>                                
                                <td style="color:black"><?= $row['nom'].' '.$row['Leleve'] ?></td>                                                                           
                                <td style="color:black"><?= $row['moyenne'] ?></td>                                                                           
                            </tr>

                        <?php  }
                    ?>
                </tbody>
              </table>          
            </div>  
            
            <div class="col-md-6" style="margin-top: 20%;">
              <div class="col-xl-6 col-lg-8">
                <h3>LISTES DES CINQ MEILLEURS ELEVES<span>.</span></h3>
                <!-- <h2>We are team of talented digital marketers</h2> -->
            </div> 
            <table  class="table table-striped table-bordered">
              <thead>
              <tr>                    
                  <th style="color:black">NOM ET PRENOM</th>
                  <th style="color:black">MATIERES</th>
                  <th style="color:black">NOTES</th>                 
              </tr>
              </thead>
              <tbody>
                  <?php
                      
                      foreach($req1 as $row){   ?>            
                          <tr>                                
                              <td style="color:black"><?= $row['nom'].' '.$row['Leleve'] ?></td>                                                                           
                              <td style="color:black"><?= $row['LaMatiere'] ?></td>                                                                           
                              <td style="color:black"><?= $row['note'] ?></td>                                                                           
                          </tr>

                      <?php  }
                  ?>
              </tbody>
            </table>                    
        </div>
          </div>       
       </div>
    </div>   
      
  

    
  </section><!-- End Hero --><br><br><br><br><br><br><br><br><br><br><br><br>

  <?php
    include 'footer.php';
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