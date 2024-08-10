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
      <title>My Cart</title>
      <link rel="stylesheet" type="text/css" href="cart.css">
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
      <div class="container">
            <div class="row">
                  <div class="col-lg-12 text-center border rounded bg-light mt-5">
                        <h1>MY CART</h1>
                  </div>
                  <div class="col-lg-9">
                        <table class="table table-primary table-striped mt-5">
                              <thead class="text-center">
                                    <tr>
                                          <th scope="col">Sr No.</th>
                                          <th scope="col">Item Name</th>
                                          <th scope="col">Price</th>
                                          <th scope="col"></th>
                                    </tr>
                              </thead>
                              <tbody class="text-center">
                                    <?php
                                    $total = 0;
                                    if (isset($_SESSION['Cart'])) {
                                          foreach ($_SESSION['Cart'] as $key => $value) {
                                                $sr = $key + 1;
                                                $total = $total + $value['Price'];
                                                echo "
                                                <tr>
                                                      <td>$sr</td>
                                                      <td>$value[Item_Name]</td>
                                                      <td>$value[Price]</td>
                                                      <td>
                                                            <form action='manage_cart.php' method='POST'>
                                                            <button name='Remove_Item' class='btn btn-sm btn-outline-danger'>
                                                                  Remove
                                                            </button>
                                                            <input type='hidden' name='Item_Name' value='$value[Item_Name]'>
                                                            </form>
                                                      </td>
                                                </tr>
                                                ";
                                          }
                                    }
                                    ?>
                              </tbody>
                        </table>
                  </div>
                  <div class="col-lg-3">
                        <div class="border rounded bg-light p-4 mt-5">
                              <h4>Total:</h4>
                              <h5 class="text-right"><?php echo "₹ " . $total ?></h5>
                              <br>
                              <form>
                                    <div class="form-check">
                                          <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                          <label class="form-check-label" for="flexRadioDefault1">
                                                Cash On Delivery
                                          </label>
                                    </div>
                                    <div class="form-check">
                                          <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                          <label class="form-check-label" for="flexRadioDefault1">
                                                <div class="col-md-6 mb-md-0 p-md-4">
                                                      <img src="Photos/QR code.png" height="100px" width="100px" alt="QR">
                                                </div>
                                          </label>
                                    </div>
                                    <br>
                                    <div class="modal-dialog modal-dialog-centered">
                                          <button class="btn btn-primary btn-block">
                                                Make Purchase
                                          </button>
                                    </div>


                              </form>
                        </div>
                  </div>
            </div>
      </div>

</body>

</html>