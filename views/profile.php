<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <?php
        require_once '../config/conexion.php';
        include 'head.php';
    ?>

<body>
    <?php
        include 'nav.php';
    ?>
    <section class="h-100 bg-gradient-primary-to-secondary">
      <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
          <div class="col col-lg-9 col-xl-7">
            <div class="card">
              <div class="rounded-top text-white d-flex flex-row" style="background-color: #000; height:200px;">
                <div class="ms-4 mt-5 d-flex flex-column" style="width: 150px;">
                  <img src="../public/assets/img/prof-logo.png"
                    alt="Generic placeholder image" class="img-fluid img-thumbnail mt-4 mb-2"
                    style="width: 150px; z-index: 1">
                  <button type="button" class="btn btn-outline-dark" data-mdb-ripple-color="dark"
                    style="z-index: 1;" data-bs-target="#editProfile" data-bs-toggle="modal">
                    Edit profile
                  </button>
                </div>
                <div class="ms-3" style="margin-top: 130px;">
                  <h5><?php echo $_SESSION['user_name']?></h5>
                  <p><?php echo $_SESSION['user_email']?></p>
                </div>
              </div>
              <div class="p-4 text-black" style="background-color: #f8f9fa;">
                <div class="d-flex justify-content-end text-center py-1">
                  <div>
                    <p class="mb-1 h5"><?php echo $_SESSION['user_coins']?></p>
                    <p class="small text-muted mb-0">Coins</p>
                  </div>
                  <div class="px-3">
                    <p class="mb-1 h5">0</p>
                    <p class="small text-muted mb-0">Bets</p>
                  </div>
                </div>
              </div>
              <div class="card-body p-4 text-black">
                <div class="mb-5">
                  <p class="lead fw-normal mb-1">Finished bets</p>
                  <div class="p-4" style="background-color: #f8f9fa;">
                    <p class="font-italic mb-1">Web Developer</p>
                    <p class="font-italic mb-1">Lives in New York</p>
                    <p class="font-italic mb-0">Photographer</p>
                  </div>
                </div>
                <div class="d-flex justify-content-between align-items-center mb-4">
                  <p class="lead fw-normal mb-0">Your current bets</p>
                  <p class="mb-0"><a href="#!" class="text-muted">Show all</a></p>
                </div>
                <div class="row g-2">
                  <div class="col mb-2">
                    <img src="https://mdbcdn.b-cdn.net/img/Photos/Lightbox/Original/img%20(112).webp"
                      alt="image 1" class="w-100 rounded-3">
                  </div>
                  <div class="col mb-2">
                    <img src="https://mdbcdn.b-cdn.net/img/Photos/Lightbox/Original/img%20(107).webp"
                      alt="image 1" class="w-100 rounded-3">
                  </div>
                </div>
                <div class="row g-2">
                  <div class="col">
                    <img src="https://mdbcdn.b-cdn.net/img/Photos/Lightbox/Original/img%20(108).webp"
                      alt="image 1" class="w-100 rounded-3">
                  </div>
                  <div class="col">
                    <img src="https://mdbcdn.b-cdn.net/img/Photos/Lightbox/Original/img%20(114).webp"
                      alt="image 1" class="w-100 rounded-3">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Modal -->
    <div class="modal fade" id="editProfile" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
      <div class="modal-dialog modal-dialog-centered" style="max-width: 40%;">
        <div class="modal-content" style="border-radius: .5rem; padding : 0px;">
        <div class="modal-header bg-black p-4">
          <h5 class="modal-title font-alt text-white" id="feedbackModalLabel">Edit Profile</h5>
          <button class="btn-close btn-close-white" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col mb-4 mb-lg-0">
              <div class="card mb-3" style="border-radius: .5rem;">
              <form id="editUserForm">
                <div class="row g-0">
                  <div class="col-md-4 bg-gradient-primary-to-secondary text-center text-white"
                    style="border-bottom-left-radius: .5rem;">
                    <img src="../public/assets/img/prof-logo.png"
                      alt="Avatar" class="img-fluid my-5" style="width: 80px;" />
                    <h5><?php echo $_SESSION['user_name']?></h5>
                    <p>Web Designer</p>
                    <i class="far fa-edit mb-5"></i>
                  </div>
                    <div class="col-md-8">
                      <div class="card-body p-4">
                        <h6>Information</h6>
                        <hr class="mt-0 mb-4">
                        <div class="row pt-1">
                          <div class="col-6 mb-3">
                            <h6>Email</h6>
                              <div class="form-floating mb-3">
                                  <input class="form-control" id="email" type="email" placeholder="name@example.com" data-sb-validations="required,email" required/>
                                  <label for="email"><?php echo $_SESSION['user_email']  ?></label>
                                  <div class="invalid-feedback" data-sb-feedback="email:required">An email is required.</div>
                                  <div class="invalid-feedback" data-sb-feedback="email:email">Email is not valid.</div>
                              </div>
                          </div>
                          <div class="col-6 mb-3">
                            <h6>Username</h6>
                              <div class="form-floating mb-3">
                                  <input class="form-control" id="name" type="text" placeholder="name@example.com" data-sb-validations="required" required/>
                                  <label for="name"><?php echo $_SESSION['user_name']?></label>
                                  <div class="invalid-feedback" data-sb-feedback="name:required">New username is required</div>
                              </div>
                          </div>
                        </div>
                        <h6>Password</h6>
                        <hr class="mt-0 mb-4">
                        <div class="row pt-1">
                          <div class="col-6 mb-3">
                            <h6>Current Password</h6>
                              <div class="form-floating mb-3">
                                  <input class="form-control" id="cpassword" type="password" placeholder="Enter your password..." required/>
                                  <label for="name">Password</label>
                                  <div class="invalid-feedback" data-sb-feedback="password:required">Password required.</div>
                              </div>
                          </div>
                        </div>
                        <div class="row pt-1">
                          <div class="col-6 mb-3">
                            <h6>New Password</h6>
                              <div class="form-floating mb-3">
                                  <input class="form-control" id="epassword" type="password" placeholder="Enter your password..." required/>
                                  <label for="name">Password</label>
                                  <div class="invalid-feedback" data-sb-feedback="password:required">Password required.</div>
                              </div>
                          </div>
                          <div class="col-6 mb-3">
                            <h6>Confirm Password</h6>
                              <div class="form-floating mb-3">
                                  <input class="form-control" id="epasswordc" type="password" placeholder="Enter your password..." required/>
                                  <label for="name">Password</label>
                                  <div class="invalid-feedback" data-sb-feedback="password:required">Password required.</div>
                              </div>
                          </div>
                        </div>
                        <div class="d-flex justify-content-start">
                          <button class="btn btn-secondary rounded-pill btn-lg" id="editButton" type="button">Save</button>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>            
        </div>
      </div>
    </div>

    <?php
            include 'footer.php';
            include 'scriptlink.php'
    ?>

</body>
</html>