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
    <title>Engagement</title>
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
                        <img src="Cart/Golden White Theme Engagement Decoration.jpg" class="card-img-top" alt="Golden White Theme Engagement Decoration">
                        <div class="card-body text-center">
                            <h5 class="card-title">Golden White Theme Engagement Decoration</h5>
                            <p class="card-text">₹ 44,999.00</p>
                            <button type="submit" name="Add_to_Cart" class="btn btn-success">Add to Cart </button>
                            <input type="hidden" name="Item_Name" value="Golden White Theme Engagement Decoration">
                            <input type="hidden" name="Price" value="44999">
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-3">
                <form action="manage_cart.php" method="POST">
                    <div class="card">
                        <img src="Cart/Floral Theme Engagement Decoration.jpg" class="card-img-top" alt="Floral Theme Engagement Decoration">
                        <div class="card-body text-center">
                            <h5 class="card-title">Floral Theme Engagement Decoration</h5>
                            <p class="card-text">₹ 54,999.00</p>
                            <button type="submit" name="Add_to_Cart" class="btn btn-success">Add to Cart </button>
                            <input type="hidden" name="Item_Name" value="Floral Theme Engagement Decoration">
                            <input type="hidden" name="Price" value="54999">
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-3">
                <form action="manage_cart.php" method="POST">
                    <div class="card">
                        <img src="Cart/Rose Floral Engagement Decoration.jpg" class="card-img-top" alt="Rose Floral Engagement Decoration">
                        <div class="card-body text-center">
                            <h5 class="card-title">Rose Floral Engagement Decoration</h5>
                            <p class="card-text">₹ 45,999.00</p>
                            <button type="submit" name="Add_to_Cart" class="btn btn-success">Add to Cart </button>
                            <input type="hidden" name="Item_Name" value="Rose Floral Engagement Decoration">
                            <input type="hidden" name="Price" value="45999">
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-3">
                <form action="manage_cart.php" method="POST">
                    <div class="card">
                        <img src="Cart/Bright Colour Engagement Decoration.jpg" class="card-img-top" alt="Bright Colour Engagement Decoration">
                        <div class="card-body text-center">
                            <h5 class="card-title">Bright Colour Engagement Decoration</h5>
                            <p class="card-text">₹ 54,999.00</p>
                            <button type="submit" name="Add_to_Cart" class="btn btn-success">Add to Cart </button>
                            <input type="hidden" name="Item_Name" value="Bright Colour Engagement Decoration">
                            <input type="hidden" name="Price" value="54999">
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <div class="row mt-5">
            <div class="col-lg-3">
                <form action="manage_cart.php" method="POST">
                    <div class="card">
                        <img src="Cart/Pink Floral Theme Engagement Decoration.jpg" class="card-img-top" alt="Pink Floral Theme Engagement Decoration">
                        <div class="card-body text-center">
                            <h5 class="card-title">Pink Floral Theme Engagement Decoration</h5>
                            <p class="card-text">₹ 47,999.00</p>
                            <button type="submit" name="Add_to_Cart" class="btn btn-success">Add to Cart </button>
                            <input type="hidden" name="Item_Name" value="Pink Floral Theme Engagement Decoration">
                            <input type="hidden" name="Price" value="47999">
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-3">
                <form action="manage_cart.php" method="POST">
                    <div class="card">
                        <img src="Cart/Unique Theme Engagement Decoration.jpg" class="card-img-top" alt="Unique Theme Engagement Decoration">
                        <div class="card-body text-center">
                            <h5 class="card-title">Unique Theme Engagement Decoration</h5>
                            <p class="card-text">₹ 47,999.00</p>
                            <button type="submit" name="Add_to_Cart" class="btn btn-success">Add to Cart </button>
                            <input type="hidden" name="Item_Name" value="Unique Theme Engagement Decoration">
                            <input type="hidden" name="Price" value="47999">
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-3">
                <form action="manage_cart.php" method="POST">
                    <div class="card">
                        <img src="Cart/Wings Theme Engagement Decoration.jpg" class="card-img-top" alt="Wings Theme Engagement Decoration">
                        <div class="card-body text-center">
                            <h5 class="card-title">Wings Theme Engagement Decoration</h5>
                            <p class="card-text">₹ 57,999.00</p>
                            <button type="submit" name="Add_to_Cart" class="btn btn-success">Add to Cart </button>
                            <input type="hidden" name="Item_Name" value="Wings Theme Engagement Decoration">
                            <input type="hidden" name="Price" value="57999">
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-3">
                <form action="manage_cart.php" method="POST">
                    <div class="card">
                        <img src="Cart/All White Theme Engagement Decoration.jpg" class="card-img-top" alt="All White Theme Engagement Decoration">
                        <div class="card-body text-center">
                            <h5 class="card-title">All White Theme Engagement Decoration</h5>
                            <p class="card-text">₹ 67,999.00</p>
                            <button type="submit" name="Add_to_Cart" class="btn btn-success">Add to Cart </button>
                            <input type="hidden" name="Item_Name" value="All White Theme Engagement Decoration">
                            <input type="hidden" name="Price" value="67999">
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <div class="row mt-5">
            <div class="col-lg-3">
                <form action="manage_cart.php" method="POST">
                    <div class="card">
                        <img src="Cart/Lotus Theme Engagement Decoration.jpg" class="card-img-top" alt="Lotus Theme Engagement Decoration">
                        <div class="card-body text-center">
                            <h5 class="card-title">Lotus Theme Engagement Decoration</h5>
                            <p class="card-text">₹ 50,999.00</p>
                            <button type="submit" name="Add_to_Cart" class="btn btn-success">Add to Cart </button>
                            <input type="hidden" name="Item_Name" value="Lotus Theme Engagement Decoration">
                            <input type="hidden" name="Price" value="50999">
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-3">
                <form action="manage_cart.php" method="POST">
                    <div class="card">
                        <img src="Cart/Hexagonal Engagement Decoration.jpg" class="card-img-top" alt="Hexagonal Engagement Decoration">
                        <div class="card-body text-center">
                            <h5 class="card-title">Hexagonal Engagement Decoration</h5>
                            <p class="card-text">₹ 58,999.00</p>
                            <button type="submit" name="Add_to_Cart" class="btn btn-success">Add to Cart </button>
                            <input type="hidden" name="Item_Name" value="Hexagonal Engagement Decoration">
                            <input type="hidden" name="Price" value="58999">
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-3">
                <form action="manage_cart.php" method="POST">
                    <div class="card">
                        <img src="Cart/Golden Hues Theme Engagement Decoration.jpg" class="card-img-top" alt="Golden Hues Theme Engagement Decoration">
                        <div class="card-body text-center">
                            <h5 class="card-title">Golden Hues Theme Engagement Decoration</h5>
                            <p class="card-text">₹ 61,999.00</p>
                            <button type="submit" name="Add_to_Cart" class="btn btn-success">Add to Cart </button>
                            <input type="hidden" name="Item_Name" value="Golden Hues Theme Engagement Decoration">
                            <input type="hidden" name="Price" value="61999">
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-3">
                <form action="manage_cart.php" method="POST">
                    <div class="card">
                        <img src="Cart/Grand Royal Engagement Decoration.jpg" class="card-img-top" alt="Grand Royal Engagement Decoration">
                        <div class="card-body text-center">
                            <h5 class="card-title">Grand Royal Engagement Decoration</h5>
                            <p class="card-text">₹ 55,999.00</p>
                            <button type="submit" name="Add_to_Cart" class="btn btn-success">Add to Cart </button>
                            <input type="hidden" name="Item_Name" value="Grand Royal Engagement Decoration">
                            <input type="hidden" name="Price" value="55999">
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <div class="row mt-5">
            <div class="col-lg-3">
                <form action="manage_cart.php" method="POST">
                    <div class="card">
                        <img src="Cart/Candle Litup Engagement Decoration.jpg" class="card-img-top" alt="Candle Litup Engagement Decoration">
                        <div class="card-body text-center">
                            <h5 class="card-title">Candle Litup Engagement Decoration</h5>
                            <p class="card-text">₹ 53,999.00</p>
                            <button type="submit" name="Add_to_Cart" class="btn btn-success">Add to Cart </button>
                            <input type="hidden" name="Item_Name" value="Candle Litup Engagement Decoration">
                            <input type="hidden" name="Price" value="53999">
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-3">
                <form action="manage_cart.php" method="POST">
                    <div class="card">
                        <img src="Cart/Off-Beat Engagement Decoration.jpg" class="card-img-top" alt="Off-Beat Engagement Decoration">
                        <div class="card-body text-center">
                            <h5 class="card-title">Off-Beat Engagement Decoration</h5>
                            <p class="card-text">₹ 57,999.00</p>
                            <button type="submit" name="Add_to_Cart" class="btn btn-success">Add to Cart </button>
                            <input type="hidden" name="Item_Name" value="Off-Beat Engagement Decoration">
                            <input type="hidden" name="Price" value="57999">
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