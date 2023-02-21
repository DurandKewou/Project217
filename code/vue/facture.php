<?php $title = "facture"; ?>
<?php ob_start(); ?>
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />

<svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
  
  <symbol id="check2-circle" viewBox="0 0 16 16">
    <path d="M2.5 8a5.5 5.5 0 0 1 8.25-4.764.5.5 0 0 0 .5-.866A6.5 6.5 0 1 0 14.5 8a.5.5 0 0 0-1 0 5.5 5.5 0 1 1-11 0z"/>
    <path d="M15.354 3.354a.5.5 0 0 0-.708-.708L8 9.293 5.354 6.646a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0l7-7z"/>
  </symbol>

  <symbol id="bookmark-star" viewBox="0 0 16 16">
    <path d="M7.84 4.1a.178.178 0 0 1 .32 0l.634 1.285a.178.178 0 0 0 .134.098l1.42.206c.145.021.204.2.098.303L9.42 6.993a.178.178 0 0 0-.051.158l.242 1.414a.178.178 0 0 1-.258.187l-1.27-.668a.178.178 0 0 0-.165 0l-1.27.668a.178.178 0 0 1-.257-.187l.242-1.414a.178.178 0 0 0-.05-.158l-1.03-1.001a.178.178 0 0 1 .098-.303l1.42-.206a.178.178 0 0 0 .134-.098L7.84 4.1z"/>
    <path d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v13.5a.5.5 0 0 1-.777.416L8 13.101l-5.223 2.815A.5.5 0 0 1 2 15.5V2zm2-1a1 1 0 0 0-1 1v12.566l4.723-2.482a.5.5 0 0 1 .554 0L13 14.566V2a1 1 0 0 0-1-1H4z"/>
  </symbol>

  <symbol id="grid-fill" viewBox="0 0 16 16">
    <path d="M1 2.5A1.5 1.5 0 0 1 2.5 1h3A1.5 1.5 0 0 1 7 2.5v3A1.5 1.5 0 0 1 5.5 7h-3A1.5 1.5 0 0 1 1 5.5v-3zm8 0A1.5 1.5 0 0 1 10.5 1h3A1.5 1.5 0 0 1 15 2.5v3A1.5 1.5 0 0 1 13.5 7h-3A1.5 1.5 0 0 1 9 5.5v-3zm-8 8A1.5 1.5 0 0 1 2.5 9h3A1.5 1.5 0 0 1 7 10.5v3A1.5 1.5 0 0 1 5.5 15h-3A1.5 1.5 0 0 1 1 13.5v-3zm8 0A1.5 1.5 0 0 1 10.5 9h3a1.5 1.5 0 0 1 1.5 1.5v3a1.5 1.5 0 0 1-1.5 1.5h-3A1.5 1.5 0 0 1 9 13.5v-3z"/>
  </symbol>
</svg>


<main id="main">
  

  <!-- ======= About Section ======= -->
  <section id="about" class="about">
    <div class="container" data-aos="fade-up">
      <div class="row g-5 justify-content-center shadow-lg p-3 mb-5 bg-body rounded " style="color:<?=$color?> ; background-color:<?=$bg?>">
          <div class="col-md-7 col-lg-8">
            <form class="needs-validation"  action="../controller/index.php" methode="get" >
              <div class="row g-4 d-flex justify-content-around" id="my-section">
                <div class="d-flex  justify-content-around text-center mb-5" style="gap: 1em;">
                  <h1 class="page-title text-secondary-d1">
                    Facture de : <?= $name?>
                  </h1>
                  <hr class="d-sm-none" />
                </div>
                
                <hr class="row">
              </div>


                <div class="row g-3" id="list" style="margin-bottom: 5%;">
                <input type="hidden" value="<?=$id_facture?>" name="id_facture" />
                <input type="hidden" value="<?=$id_template?>" name="id_template" />
                <?php
                if (strcmp($position_label, "left") == 0) {
                    $i = 0;
                    foreach($champs as $champ){
                        $id = $champ['id_champ'];
                        $valeur = $champ['valeur'];
                        $taille = $champ['taille'];
                        $indication = $champ['indication'];
                ?>

                        <div class="input-group mb-3 col-md-<?= $taille ?>">
                          <span class="input-group-text"><?=$valeur ." : "?></span>
                          <input type="text" class="form-control" id="firstName"  placeholder="<?= $indication ?>" style="background-color:#fff; margin-left : 20px;" name="donnee<?=$i?>"value="" required>
                          <input type="hidden" value="<?=$id?>" name="champ<?=$i?>"/>
                        </div>


                <?php
                        $i++;
                    }
                } else {
                    $i = 0;
                    foreach ($champs as $champ) {
                        $id = $champ['id_champ'];
                        $valeur = $champ['valeur'];
                        $indication = $champ['indication'];
                        ?>
                          <div class="mb-3 mt-3">
                            <label for="email" class="form-label"><?= $valeur ." : " ?></label>
                            <input type="text" class="form-control" placeholder="<?=$indication?>" name="donnee<?=$i?>" aria-label="Username" aria-describedby="basic-addon1"  required>
                            <input type="hidden" value="<?=$id?>" name="champ<?=$i?>"/>
                          </div>     
                        <?php
                    $i++;
                    }
                }
                ?>
                </div>   
                
               <div class="text-grey-m2 text-center d-flex align-items-center justify-content-center">
                  <!-- <div class="my-2"><span class="text-600 text-90">ID Facture:</span> <?=$id_facture?></div> -->
                  <div class="my-2"><span class="text-600 text-90">Date:</span><?=$date?></div>
              </div>
          <hr class="row">

                <footer id="footer" class="mb-4">
                  <div class="container d-flex justify-content-between">
                      <h6><?= $telephone?></h6>
                      <h6><?= $_SESSION['email'] ;?></h6>
                  </div>
                </footer>

              </div>
              
              <hr class="my-2">
                <div class="action-buttons d-flex justify-content-center align-items-center">
                  <a class="btn bg-white btn-light mx-1px text-95"  name="print" onclick="window.print();" href="#" data-title="Print">
                      <i class="mr-1 fa fa-print text-primary-m1 text-120 w-2"></i>
                      Print
                  </a>
              </div>
            </form>
          </div>
        </div>
    </div>
  </section>

</main>



<!-- Vendor JS Files -->
<script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
<script src="assets/vendor/aos/aos.js"></script>
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
<script src="assets/vendor/php-email-form/validate.js"></script>

<!-- Template Main JS File -->
<script src="assets/js/main.js"></script>
<?php $content = ob_get_clean(); ?>
<?php require('layout.php') ?>