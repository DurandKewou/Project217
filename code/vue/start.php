<?php $title = "start"; ?>
  <?php ob_start(); ?>
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
  
  <header id="header" class="fixed-top">
    <div class="container-fluid d-flex justify-content-between align-items-center">

      <h1 class="logo me-auto me-lg-0"><a href="index.php">Bill Builder</a></h1>
      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a href="../controller/index.php">Home</a></li>
          <li><a class="active" href="#">Start</a></li>
          <li><a href="#">Creations</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>

    </div>
 
  </header>

  <main id="main">

    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Create</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="modal modal-tour position-static d-block py-5" tabindex="-1" role="dialog" id="modalTour">
          <div class="modal-dialog" role="document">
            <div class="modal-content rounded-6 shadow">
              <div class="modal-body p-5">
                <h2 class="fw-bold mb-0">What's new</h2>
        
                <ul class="d-grid gap-4 my-5 list-unstyled">
                  <li class="d-flex gap-4">
                    <svg class="bi text-muted flex-shrink-0" width="48" height="48"><use xlink:href="#grid-fill"/></svg>
                    <div>
                      <h5 class="mb-0">Grid view</h5>
                      Not into lists? Try the new grid view.
                    </div>
                  </li>
                  <li class="d-flex gap-4">
                    <svg class="bi text-warning flex-shrink-0" width="48" height="48"><use xlink:href="#bookmark-star"/></svg>
                    <div>
                      <h5 class="mb-0">Bookmarks</h5>
                      Save items you love for easy access later.
                    </div>
                  </li>
                  <li class="d-flex gap-4">
                    <svg class="bi text-primary flex-shrink-0" width="48" height="48"><use xlink:href="#check2-circle"/></svg>
                    <div>
                      <h5 class="mb-0">Video embeds</h5>
                      Share videos wherever you go.
                    </div>
                  </li>
                </ul>
                <form action="../controller/start2.php" method="post">
                  <div class="form-floating">
                    <input type="text" class="form-control" id="floatingInput" name="nom" required placeholder="Name form">
                    <label for="floatingInput">Name form</label>
                  </div>
                  <button type="submit" class="btn btn-lg mt-5 w-100" style="background-color: #34b7a7;">Great, thanks!</button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

  </main>

  <footer id="footer">
    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>ICT4D 2022</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        Designed by <a href="#">ICT4D 2022</a>
      </div>
    </div>
  </footer>

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

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