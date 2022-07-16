<!DOCTYPE html>
<html lang="en">
<?php
session_start();
require_once '../config/conexion.php';

include 'head.php';
?>
<body>
        <!-- Navigation-->
        <?php
        include 'nav.php';
    ?>
    <section class="h-100 bg-gradient-primary-to-secondary">

        <div class="container py-5 h-100" style="background-color: white; border-radius: .5rem;">
              <div class="header">
                <h1>Bets</h1>
              </div>
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="row row-cols-1 row-cols-md-4 g-4" id="betcards">
                  <div class="col">
                    <div class="card h-100">
                      <img src="../public/assets/img/1.webp" class="card-img-top" alt="...">
                      <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                      </div>
                      <div class="card-footer">
                        <small class="text-muted">Last updated 3 mins ago</small>
                      </div>
                    </div>
                  </div>
                  <div class="col">
                    <div class="card h-100">
                      <img src="../public/assets/img/1.webp" class="card-img-top" alt="...">
                      <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                      </div>
                      <div class="card-footer">
                        <small class="text-muted">Last updated 3 mins ago</small>
                      </div>
                    </div>
                  </div>
                  <div class="col">
                    <div class="card h-100">
                      <img src="../public/assets/img/1.webp" class="card-img-top" alt="...">
                      <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                      </div>
                      <div class="card-footer">
                        <small class="text-muted">Last updated 3 mins ago</small>
                      </div>
                    </div>
                  </div>
                </div>
            </div>
        </div>
    </section>



    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <!-- * *                               SB Forms JS                               * *-->
    <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>

        <!-- Footer-->
    <?php
        include 'footer.php';
    ?>
</body>
</html>