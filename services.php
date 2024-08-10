<?php
session_start();
?>

<!doctype html>
<html lang="en">

<head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Services</title>
      <link rel="stylesheet" type="text/css" href="services.css">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>
      <header class="p-3 navbg">
            <div class="container">
                  <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                              <li><a href="home.php" class="nav-link px-2 text-white">Home</a></li>
                              <li><a href="aboutus.php" class="nav-link px-2 text-white">About Us</a></li>
                              <li><a href="services.php" class="nav-link px-2 text-warning">Services</a></li>
                              <li><a href="gallery.php" class="nav-link px-2 text-white">Gallery</a></li>
                              <li><a href="contactus.php" class="nav-link px-2 text-white">Contact Us</a></li>
                        </ul>
      

      
                        <div class="text-end px-4">
                              <?php
                              $count = 0;
                              if (isset($_SESSION['Cart'])) 
                              {
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
                              <a href="#" class="d-block link-light text-decoration-none dropdown-toggle"
                                    data-bs-toggle="dropdown" aria-expanded="false">
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

      <h1 class="heading my-4">Our Services</h1>

      <div class="container">
            <div class="row g-0 bg-body-secondary position-relative shadow">
                  <div class="col-md-6 mb-md-0 p-md-4">
                        <img src="Photos/pic1.jpg" class="w-100" alt="Wedding">
                  </div>
                  <div class="col-md-6 p-4 ps-md-0">
                        <h5 class="mt-0 fw-bold">Wedding</h5>
                        <p class="fw-medium">Our team is here to make the day you've always dreamed of, the day you'll never forget.
                              From the very beginning, we will create a custom proposal based on your wants and needs.
                              Once booked, your Silver Stage Events team will collaborate with you to build the
                              foundation of your wedding, creating an inspiration board and floor plan based on your unique
                              vision. From unique lighting to seating charts, with us customization is guaranteed.
                              We care about the experience of planning your wedding from start to finish. So relax and
                              have fun. Your Silver Stage Events team will guide you every step of the way, ensuring your big
                              day is effortless and unforgettable.</p>
                        <a href="wedding.php" class="stretched-link">CHECK OUT</a>
                  </div>
            </div>
      </div><br>
      <div class="container">
            <div class="row g-0 bg-body-secondary position-relative shadow ">
                  <div class="col-md-6 mb-md-0 p-md-4">
                        <img src="Photos/pic2.jpg" class="w-100" alt="Birthday">
                  </div>
                  <div class="col-md-6 p-4 ps-md-0">
                        <h5 class="mt-0 fw-bold">Birthday</h5>
                        <p class="fw-medium">Silver Stage Events team of professionals will analyze your requirements and provide birthday
                              ideas to suit your needs and budget. Either your birthday party budget is small or big, we
                              handle all kinds of party works for all budgets. Let us handle the birthday party and you just
                              enjoy your memorable moments, make your guests surprise by your best birthday
                              bash in the town. We have made many clients happy with our birthday party decorations. We
                              have a privilege of organizing birthday parties of celebrity kids and prominent businessman</p>
                        <a href="birthday.php" class="stretched-link">CHECK OUT</a>
                  </div>
            </div>
      </div><br>
      <div class="container">
            <div class="row g-0 bg-body-secondary position-relative shadow ">
                  <div class="col-md-6 mb-md-0 p-md-4">
                        <img src="Photos/pic3.jpg" class="w-100" alt="Concert">
                  </div>
                  <div class="col-md-6 p-4 ps-md-0">
                        <h5 class="mt-0 fw-bold">Concert</h5>
                        <p class="fw-medium">Silver Stage Events is capable of organizing an Concerts. As a creative events management
                              company, we understand the specific aspects that will strongly promote your business and make an
                              impression for all the right reasons. Silver Stage Events Planner makes it fun and simple to
                              organize concerts. We are a group of planners who help you make sure your
                              special day is everything you imagine. Our services include researching venues, organizing
                              the production team, renting equipment, and many other miscellaneous services that may be
                              required throughout your planning process. Silver Stage Events will help you make it as amazing
                              as you can imagine. Whatever it is you're planning, we can help. We'll find the
                              best venue, organize the production team, and ensure that everything goes smoothly.</p>
                        <a href="concert.php" class="stretched-link">CHECK OUT</a>
                  </div>
            </div>
      </div><br>
      <div class="container">
            <div class="row g-0 bg-body-secondary position-relative shadow ">
                  <div class="col-md-6 mb-md-0 p-md-4">
                        <img src="Photos/pic4.jpg" class="w-100" alt="Baby Shower">
                  </div>
                  <div class="col-md-6 p-4 ps-md-0">
                        <h5 class="mt-0 fw-bold">Baby Shower</h5>
                        <p class="fw-medium">Make your child's Baby Shower ceremony one to remember with Silver Stage Events amazing baby shower
                              ceremony decoration ideas. We ensure that you do have a delightful, well- organized event free
                              of stress, while also ensuring that everything stays within budget and in line with your vision.
                              To schedule and conduct your baby shower Ceremony Event, contact our experts. We pay close
                              attention to your preferences in order to provide you with custom- tailored solutions and
                              services that will provide you with the greatest available experience and make every occasion
                              one to remember!</p>
                        <a href="babyshower.php" class="stretched-link">CHECK OUT</a>
                  </div>
            </div>
      </div><br>
      <div class="container">
            <div class="row g-0 bg-body-secondary position-relative shadow ">
                  <div class="col-md-6 mb-md-0 p-md-4">
                        <img src="Photos/pic5.jpg" class="w-100" alt="Corporate Events">
                  </div>
                  <div class="col-md-6 p-4 ps-md-0">
                        <h5 class="mt-0 fw-bold">Corporate Events</h5>
                        <p class="fw-medium">The corporate world is fast-paced and full of details. When partnering with Silver Event
                              Management, we take care of those
                              details while creating a unique experience for your guests that coincides with your
                              company’s vision. Whether it’s attracting new customers, educating your employees, or
                              celebrating company milestones, we’ll help you create and execute the event strategy you have in
                              mind. Once booked, we will collaborate with you to build the foundation of your event, creating
                              an inspiration board and floor plan based on your goals. Then from the production to design,
                              your Silver Stage Events team will bring your brand to life through our high quality planning
                              and management services, as well as day-of coordination.</p>
                        <a href="corporateevent.php" class="stretched-link">CHECK OUT</a>
                  </div>
            </div>
      </div><br>
      <div class="container">
            <div class="row g-0 bg-body-secondary position-relative shadow ">
                  <div class="col-md-6 mb-md-0 p-md-4">
                        <img src="Photos/pic6.jpg" class="w-100" alt="Engagement">
                  </div>
                  <div class="col-md-6 p-4 ps-md-0">
                        <h5 class="mt-0 fw-bold">Engagement</h5>
                        <p class="fw-medium">Engagement is a wonderful thing one can cherish for their lifetime. An engagement ceremony is a
                              ceremony that marks the beginning of a wedding ceremony. Silver Stage Events Planning has the
                              experience, skills, and quality service that results in engagement function and execution that
                              is pure elegance, style, and sophistication. We promise a stress-free celebration and an utterly
                              engagement ceremony as we have a 100% success rate. If you need help and support organising your
                              engagement party, just give us a call to schedule a free engagement event consultation with our
                              expert engagement event organizer. We will certainly plan a perfect engagement, just as you have
                              imagined and dreamed! We're looking for an opportunity to provide end-to-end event management
                              services to customers</p>
                        <a href="engagement.php" class="stretched-link">CHECK OUT</a>
                  </div>
            </div>
      </div><br>
      <div class="container">
            <div class="row g-0 bg-body-secondary position-relative shadow ">
                  <div class="col-md-6 mb-md-0 p-md-4">
                        <img src="Photos/pic7.jpg" class="w-100" alt="Housewarming">
                  </div>
                  <div class="col-md-6 p-4 ps-md-0">
                        <h5 class="mt-0 fw-bold">Housewarming</h5>
                        <p class="fw-medium">We really do have a dream to construct our own house that is tailored to our expectations. It's
                              time for the housewarming function, which is an announcement that your dream house has been
                              completed and you're ready to share your joy with your family and friends, after the final
                              output, which is after building our dream house. This housewarming function requires detailed
                              process has the potential for all the guests to recall the plans made for the event. We've even
                              received encouragement from the function backpacks, and we've pleased the visitors enough that
                              we've been referred to organise several more housewarming events. We've even received
                              recommendations from the function hosts, and we've impressed the guests enough that we've been
                              referred to organise more and more housewarming events.</p>
                        <a href="housewarming.php" class="stretched-link">CHECK OUT</a>
                  </div>
            </div>
      </div><br>
      <div class="container">
            <div class="row g-0 bg-body-secondary position-relative shadow ">
                  <div class="col-md-6 mb-md-0 p-md-4">
                        <img src="Photos/pic8.jpg" class="w-100" alt="Anniversary">
                  </div>
                  <div class="col-md-6 p-4 ps-md-0">
                        <h5 class="mt-0 fw-bold">Anniversary</h5>
                        <p class="fw-medium">Anniversaries provide a wonderful opportunity to refresh beautiful memories, practice gratitude to
                              your partner, show your love, and strengthen your bond. But with enthusiasm, the pressure is on
                              to set up this special day. But don’t worry about this; the Silver Stage Events Planning and
                              Decor will give you all the solutions for planning and organizing your anniversary. We have
                              amazing services to fill your special day to the fullest. We are known as one of the best
                              Anniversary planners. You will get everything you want at your anniversary celebration. Best
                              event planning ideas will turn your day into a gala event to be remembered for many more years
                              to come. We understand you want your anniversary event to be a dream comes true.</p>
                        <a href="anniversary.php" class="stretched-link">CHECK OUT</a>
                  </div>
            </div>
      </div><br>


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