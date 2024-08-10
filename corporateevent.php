<?php
session_start();

if (!isset($_SESSION['Login']) || $_SESSION['Login'] != true) {
header("location:login.php");
exit;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Corporate Event</title>
    <link rel="stylesheet" type="text/css" href="cart.css">
    <link rel="stylesheet" type="text/css" href="footer.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>
    <header class="p-3 navbg">
        <div class="container">
            <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                    <li><a href="home.php" class="nav-link px-2 text-white">Home</a></li>
                    <li><a href="aboutus.php" class="nav-link px-2 text-white">About Us</a></li>
                    <li><a href="services.php" class="nav-link px-2 text-white">Services</a></li>
                    <li><a href="gallery.php" class="nav-link px-2 text-white">Gallery</a></li>
                    <li><a href="contactus.php" class="nav-link px-2 text-white">Contact Us</a></li>
                </ul>


                <div class="text-end px-4">
                    <?php
                    $count = 0;
                    if (isset($_SESSION['Cart'])) {
                        $count = count($_SESSION['Cart']);
                    }
                    ?>
                    <a href="cart.php" class="position-relative">
                        <img src="Photos/cart.png" alt="cart" width="38" height="38">
                        <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                            <?php
                            echo $count;
                            ?>
                        </span>
                    </a>
                </div>
                <div class="dropdown text-end">
                    <a href="#" class="d-block link-light text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="Photos/profile.png" alt="profile" width="38" height="38" class="rounded-circle">
                    </a>
                    <ul class="dropdown-menu text-small">
                        <li><a class="dropdown-item" href="signup.php">Sign in</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="logout.php">Log out</a></li>
                    </ul>
                </div>

            </div>
    </header>
    <div class="container mt-3">
        <div class="row mt-3">
            <div class="col-lg-3">
                <form action="manage_cart.php" method="POST">
                    <div class="card">
                        <img src="Cart/Corporate Event 1.jpg" class="card-img-top" alt="Corporate Event 1">
                        <div class="card-body text-center">
                            <h5 class="card-title">Corporate Event 1</h5>
                            <p class="card-text">₹ 14,999.00</p>
                            <button type="submit" name="Add_to_Cart" class="btn btn-success">Add to Cart </button>
                            <input type="hidden" name="Item_Name" value="Corporate Event 1">
                            <input type="hidden" name="Price" value="14999">
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-3">
                <form action="manage_cart.php" method="POST">
                    <div class="card">
                        <img src="Cart/Corporate Event 2.jpg" class="card-img-top" alt="Corporate Event 2">
                        <div class="card-body text-center">
                            <h5 class="card-title">Corporate Event 2</h5>
                            <p class="card-text">₹ 14,999.00</p>
                            <button type="submit" name="Add_to_Cart" class="btn btn-success">Add to Cart </button>
                            <input type="hidden" name="Item_Name" value="Corporate Event 2">
                            <input type="hidden" name="Price" value="14999">
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-3">
                <form action="manage_cart.php" method="POST">
                    <div class="card">
                        <img src="Cart/Corporate Event 3.jpg" class="card-img-top" alt="Corporate Event 3">
                        <div class="card-body text-center">
                            <h5 class="card-title">Corporate Event 3</h5>
                            <p class="card-text">₹ 15,999.00</p>
                            <button type="submit" name="Add_to_Cart" class="btn btn-success">Add to Cart </button>
                            <input type="hidden" name="Item_Name" value="Corporate Event 3">
                            <input type="hidden" name="Price" value="15999">
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-3">
                <form action="manage_cart.php" method="POST">
                    <div class="card">
                        <img src="Cart/Corporate Event 4.jpg" class="card-img-top" alt="Corporate Event 4">
                        <div class="card-body text-center">
                            <h5 class="card-title">Corporate Event 4</h5>
                            <p class="card-text">₹ 14,999.00</p>
                            <button type="submit" name="Add_to_Cart" class="btn btn-success">Add to Cart </button>
                            <input type="hidden" name="Item_Name" value="Corporate Event 4">
                            <input type="hidden" name="Price" value="14999">
                        </div>
                    </div>
                </form>
            </div>
        </div>

        
        <div class="row mt-5">
            <div class="col-lg-3">
                <form action="manage_cart.php" method="POST">
                    <div class="card">
                        <img src="Cart/Corporate Event 5.jpg" class="card-img-top" alt="Corporate Event 5">
                        <div class="card-body text-center">
                            <h5 class="card-title">Corporate Event 5</h5>
                            <p class="card-text">₹ 15,999.00</p>
                            <button type="submit" name="Add_to_Cart" class="btn btn-success">Add to Cart </button>
                            <input type="hidden" name="Item_Name" value="Corporate Event 5">
                            <input type="hidden" name="Price" value="15999">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <footer class="pt-5">
            <div class="container-fluid footerbg">
                  <div class="container">
                        <footer class="py-5">
                              <div class="row">

                                    <div class="col-6 col-md-2 mb-3">
                                          <h5>Menu</h5>
                                          <ul class="nav flex-column">
                                                <li class="nav-item mb-2"><a href="home.php" class="nav-link p-0 link">Home</a>
                                                </li>
                                                <li class="nav-item mb-2"><a href="aboutus.php" class="nav-link p-0 link">About
                                                            Us</a>
                                                </li>
                                                <li class="nav-item mb-2"><a href="services.php" class="nav-link p-0 link">Services</a>
                                                </li>
                                                <li class="nav-item mb-2"><a href="gallery.php" class="nav-link p-0 link">Gallery</a>
                                                </li>
                                                <li class="nav-item mb-2"><a href="contactus.php" class="nav-link p-0 link">Contact
                                                            Us</a>
                                                </li>
                                          </ul>
                                    </div>

                                    <div class="col-6 col-md-2 mb-3">
                                          <h5>Services</h5>
                                          <ul class="nav flex-column">
                                                <li class="nav-item mb-2"><a href="wedding.php" class="nav-link p-0 link">Wedding</a>
                                                </li>
                                                <li class="nav-item mb-2"><a href="birthday.php" class="nav-link p-0 link">Birthday</a>
                                                </li>
                                                <li class="nav-item mb-2"><a href="concert.php" class="nav-link p-0 link">Concert</a>
                                                </li>
                                                <li class="nav-item mb-2"><a href="babyshower.php" class="nav-link p-0 link">Baby
                                                            Shower</a>
                                                </li>
                                                <li class="nav-item mb-2"><a href="corporateevent.php" class="nav-link p-0 link">Corporate
                                                            Event</a>
                                                </li>
                                                <li class="nav-item mb-2"><a href="engagement.php" class="nav-link p-0 link">Engagement</a>
                                                </li>
                                                <li class="nav-item mb-2"><a href="housewarming.php" class="nav-link p-0 link">Housewarming</a>
                                                </li>
                                                <li class="nav-item mb-2"><a href="anniversary.php" class="nav-link p-0 link">Anniversary</a>
                                                </li>
                                          </ul>
                                    </div>
                                    <div class="col-md-5 offset-md-1 mb-3">
                                          <h4>Contact Us</h4>
                                          <li class="list-unstyled nav-item mb-2">
                                                <img src="Photos/location.png" class="bi" width="30" height="30">
                                                4, Krishna Vihar, Veera Desai Road, Galaxy Towers, Pune-400601,
                                                Maharashtra, India.
                                          </li>
                                          <li class="list-unstyled nav-item mb-2">
                                                <img src="Photos/telephone.png" class="bi" width="30" height="30">
                                                +91 81204 99140
                                          </li>
                                          <li class="list-unstyled nav-item mb-2">
                                                <img src="Photos/email.png" class="bi" width="30" height="30">
                                                silverstageevents@gmail.com
                                          </li>
                                    </div>
                              </div>
                              <div class="d-flex flex-column flex-sm-row justify-content-between py-1 my-1 border-top">
                                    <p>© 2023 Silver Stage Events | All rights reserved.</p>
                                    <ul class="list-unstyled d-flex">
                                          <li class="ms-3"><a class="link-dark" href="https://www.instagram.com/"><img src="Photos/instagram.png" class="bi" width="35" height="35"></a>
                                          </li>
                                          <li class="ms-3"><a class="link-dark" href="https://www.facebook.com/"><img src="Photos/facebook.png" class="bi" width="35" height="35"></a>
                                          </li>
                                          <li class="ms-3"><a class="link-dark" href="#"><img src="Photos/whatsapp.png" class="bi" width="35" height="35"></a>
                                          </li>
                                          <li class="ms-3"><a class="link-dark" href="https://www.youtube.com/"><img src="Photos/youtube.png" class="bi" width="35" height="35"></a>
                                          </li>
                                    </ul>
                              </div>
                        </footer>
                  </div>
            </div>
    </footer>

      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
      </script>

</body>

</html>