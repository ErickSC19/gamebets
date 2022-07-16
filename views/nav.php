
    <script src="../public/js/jquery.js"></script>
        <nav class="navbar navbar-expand-lg navbar-light fixed-top shadow-sm" id="mainNav">
            <div class="container px-5">
                <a class="navbar-brand fw-bold" href="index.php#page-top">Gamebets</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="bi-list"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto me-4 my-3 my-lg-0">
                        <li class="nav-item"><a class="nav-link me-lg-3" href="#features">Features</a></li>
                        <li class="nav-item"><a class="nav-link me-lg-3" href="#download">Download</a></li>
                        <?php
                        if(isset($_SESSION['user_name'])){
                            printf(
                                '<li class="nav-item"><a class="nav-link me-lg-3" href="betpage.php">Bets</a></li>'
                            );
                        }
                        ?>
                    </ul>

                    <?php
                        if(isset($_SESSION['user_name'])){
                            printf(
                                '<div class="dropdown">
                                <button class="btn btn-primary rounded-pill px-3 mb-2 mb-lg-0 dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                  <span class="small">
                                      <?php echo $_SESSION[\'user_name\'];?>
                                  </span>
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                  <li><a class="dropdown-item" href="profile.php">Profile</a></li>
                                  <form method="post" id="logoutbtn">
                                  <li><button class="dropdown-item" name="logout" type="submit">Log Out</button></li>
                                  </form>
                                </ul>
                              </div>'
                            );
                        } else {
                            printf('
                        <button class="btn btn-primary rounded-pill px-3 mb-2 mb-lg-0" data-bs-toggle="modal" data-bs-target="#feedbackModal">
                            <span class="d-flex align-items-center">
                                <i class="bi-chat-text-fill me-2"></i>
                                <span class="small">Login</span>
                            </span>
                        </button>
                            ');
                        }
                    ?>

                </div>
            </div>
        </nav>