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

      <h1 class="logo me-auto me-lg-0"><a href="index.php">Form</a></h1>
      
      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a href="../controller/index.php">Home</a></li>
          <li><a class="active" href="../controller/start.php">Start</a></li>
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
        <header id="header2" class="d-flex justify-content-center">

            <nav class="nav-menu">
              <ul>
                <li><a href="./start.php" class="nav-link scrollto act"><i class="bi bi-1-circle"></i></a></li>
                <li class="active"></li>
                <li><a href="./start2.php" class="nav-link scrollto act"><i class="bi bi-2-circle"></i></a></li>
                <li class="active"></li>
                <li><a href="#" class="nav-link scrollto act"><i class="bi bi-3-circle"></i></a></li>
                <li></li>
                <li><a href="#" class="nav-link scrollto"><i class="bi bi-4-circle"></i></a></li>
              </ul>
            </nav>
        
          </header>
      </div>
    </section>
    <h1 class="text-center">Facture de : <?= $_SESSION['nom_template'] ?><span></span></h1>
    <section class="justify-content-center container">
      <div  class="col-md-7 col-lg-8" style="margin:auto;">
        <form class="needs-validation" novalidate action="../controller/start4.php" method="post">
            <div class="row g-3" id="list" style="margin-bottom: 5%;">
            </div>
            <div class="row g-3">
    
                <div class="col-md-4">
                  <label for="country" class="form-label" >Valeur<span style="color: red;">*</span></label>
                  <input type="text" class="form-control" id="lab"  required >
                  <div class="invalid-feedback">
                  </div>
                </div>

                <div class="col-md-2">
                    <label for="state" class="form-label">Taille<span style="color: red;">*</span></label>
                    <input type="number" class="form-control" id="pos" max="12" min="3" required>
                  </div>

                  <div class="col-md-4">
                    <label for="state" class="form-label">Indication</label>
                    <input type="text" class="form-control" id="lib" required>
                    <div class="invalid-feedback">
                    </div>
                  </div>
    
                <div class="col-md-3">
                        <label for="zip" class="form-label" style="visibility: hidden;">valider</label>
                        <button class="w-100 btn btn-secondary" type="button" id="btn">Ajouter</button>
                </div>
              </div>
          
          <hr class="my-4">
          <button class="w-100 btn" type="submit" style="background-color: #34b7a7;color: white;border: #34b7a7 1px solid;">Suivant</button>
        </form>
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
  <script>
    let btn=document.getElementById('btn');

    const list=document.getElementById('list');
    let del=document.getElementById('del');
    var i=1,k=1,j=1;

    btn.addEventListener("click", (e) => {
    e.preventDefault();
    let tache=document.getElementById('lab').value;
    let pos=document.getElementById('pos').value;
    let lib=document.getElementById('lib').value;
    if(tache.length && pos.length){
        const generateTemplate = (todo,to,t) => {
            const html = `
            <div class="col-sm-${to}">
              <label for="firstName" class="form-label">${todo}</label>
              <div class="d-flex">
                <input type="text" class="form-control yo" id="firstName" placeholder="${t}" value=" " required>
                <i class="bi bi-x-square-fill del"></i>
              </div> 

              <input type="hidden" class="lab" value="${todo}" name="lab${i}"/>
              <input type="hidden" class="tail" value="${to}" name="tail${j}"/>
              <input type="hidden" class="ind" value="${t}" name="ind${k}"/>
            </div>
              `;
            i=i+1;
            j=j+1;
            k=k+1;
            list.innerHTML += html;
        };
        list.appendChild(generateTemplate(tache,pos,lib))
    }
    
 });

list.addEventListener("click", (e) => {
  i=1;j=1;k=1;
    if (e.target.classList.contains("del")) {
        e.target.parentElement.parentElement.remove();
        let q=document.getElementsByTagName('input');
        for (let index = 0; index < q.length; index++) {
          if (q[index].classList.contains('lab')) {
            q[index].setAttribute("name",i.toString());
            i=i+1;
          }
          if (q[index].classList.contains('tail')) {
            q[index].setAttribute("name",j.toString());
            j=j+1;
          }
          if (q[index].classList.contains('ind')) {
            q[index].setAttribute("name",""+k.toString());
            k=k+1;
          }
        }
    }
});
  </script>

<?php $content = ob_get_clean(); ?>
<?php require('layout.php') ?>