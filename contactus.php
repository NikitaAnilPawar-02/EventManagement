<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Contact us</title>
      <link rel="stylesheet" type="text/css" href="contactus.css">
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
                              <li><a href="contactus.php" class="nav-link px-2 text-warning">Contact Us</a></li>
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
      <h1 class="heading my-4">Contact Us</h1>

      <div class="container">
            <div class="row">
                  <div class="col-sm-8 p-3">
                        <form action="contactus.php" method="Post" class="shadow rounded p-5">
                              <fieldset>
                                    <div class="text-center mb-4 ">
                                          <h2 class="fw-bold fs-1">Silver Stage Events</h2>
                                    </div>

                                    <legend>Plan your next event with us</legend>
                                    <p>Share your contact information, our event organizing team will get back to you
                                          shortly.
                                    </p>

                                    <div class="input-group mb-3">
                                          <span class="input-group-text"><i class="fa-solid fa-user" style="color:purple;"></i></span>
                                          <input type="text" class="form-control" placeholder="Your Name" name="Name" required>
                                    </div>
                                    <div class="input-group mb-3">
                                          <span class="input-group-text"><i class="fa-solid fa-envelope" style="color: purple;"></i></span>
                                          <input type="email" class="form-control" placeholder="Your Email" name="Email" required>
                                    </div>
                                    <div class="input-group mb-3">
                                          <span class="input-group-text"><i class="fa-solid fa-phone" style="color: purple;"></i></span>
                                          <input type="tel" class="form-control" placeholder="Your Phone Number" name="Phoneno" pattern="[0-9]{10}" required>
                                    </div>
                                    <div class="input-group mb-3">
                                          <span class="input-group-text"><i class="fa-solid fa-calendar-days" style="color: purple;"></i></span>
                                          <input type="date" class="form-control" name="DateofEvent" required>
                                    </div>
                                    <div class="input-group mb-3">
                                          <span class="input-group-text"><i class="fa-solid fa-circle-chevron-down" style="color: purple;"></i></span>
                                          <select name="TypeofEvent" class="form-select" required>
                                                <option selected>Select Your Event</option>
                                                <option value="Wedding">Wedding</option>
                                                <option value="Birthday">Birthday</option>
                                                <option value="Concert">Concert</option>
                                                <option value="Baby Shower">Baby Shower</option>
                                                <option value="Corporate Event">Corporate Event</option>
                                                <option value="Engagement">Engagement</option>
                                                <option value="Housewarming">Housewarming</option>
                                                <option value="Anniversary">Anniversary</option>
                                          </select>
                                    </div>
                                    <div class="input-group mb-3">
                                          <span class="input-group-text"><i class="fa-solid fa-message" style="color: purple;"></i></span>
                                          <textarea name="Message" class="form-control" placeholder="Your Message" required></textarea>
                                    </div>
                                    <input type="submit" value="Send" name="Send">
                              </fieldset>
                        </form>
                  </div>
                  <div class="col-sm-4">
                        <div class="pt-5">
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
                        <div class="pt-4 float-end">
                              <ul class="list-unstyled d-flex">
                                    <li class="ms-3"><a class="link-dark" href="https://www.instagram.com/"><img src="Photos/instagram.png" class="bi" width="30" height="30"></a>
                                    </li>
                                    <li class="ms-3"><a class="link-dark" href="https://www.facebook.com/"><img src="Photos/facebook.png" class="bi" width="30" height="30"></a>
                                    </li>
                                    <li class="ms-3"><a class="link-dark" href="#"><img src="Photos/whatsapp.png" class="bi" width="30" height="30"></a>
                                    </li>
                                    <li class="ms-3"><a class="link-dark" href="https://www.youtube.com/"><img src="Photos/youtube.png" class="bi" width="30" height="30"></a>
                                    </li>
                              </ul>
                        </div>
                  </div>
            </div>
      </div>

      <footer>
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

<?php
include('config.php');
if (isset($_POST['Send'])) {
      $Name = $_POST['Name'];
      $Email = $_POST['Email'];
      $Phoneno = $_POST['Phoneno'];
      $DateofEvent = $_POST['DateofEvent'];
      $TypeofEvent = $_POST['TypeofEvent'];
      $Message = $_POST['Message'];

      $insertquery = "INSERT INTO contacts (`ID`, `Name`, `Email`, `Phone no`, `Date of Event`, `Type of Event`, `Message`) 
      VALUES ('','$Name','$Email','$Phoneno','$DateofEvent','$TypeofEvent','$Message')";
      $iquery = mysqli_query($conn, $insertquery);

      if ($iquery) {
            $Subject = "Contact Confirmation";
            $Body = "Hello! $Name Thank you...! For Contacting Us. We Will contact You as soon as possible.";
            $Sender = "From: pawarnikita0293@gmail.com";
            if (mail($Email, $Subject, $Body, $Sender)) {
                  echo "<script> alert('Message send Successfully...!'); </script>";
            } else {
                  echo "<script> alert('Message not Send...!'); </script>";
            }
      } else {
            echo "<script> alert('Failed...!'); </script>";
      }
}
?>