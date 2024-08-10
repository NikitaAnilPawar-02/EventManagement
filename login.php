<?php
session_start();
?>

<!doctype html>
<html lang="en">

<head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Login</title>
      <link rel="stylesheet" type="text/css" href="form.css">
      <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" rel="stylesheet">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>
      <div class="container bg">
            <form action="login.php" method="Post">
                  <div class="position-absolute top-50 start-50 translate-middle form py-5 px-4 shadow-lg">
                        <div class="container">
                              <div class="text-center">
                                    <img src="Photos/l1.png" alt="Avatar" height="80" weight="80">
                                    <h3><b>Login</b></h3>
                                    <div class="alert alert-success" role="alert">
                                          <?php
                                                if (isset($_SESSION['msg'])) 
                                                {
                                                      echo $_SESSION['msg'];
                                                } 
                                                else 
                                                {
                                                      echo $_SESSION['msg'] = "Please Login again !";
                                                }
                                          ?>
                                    </div>
                              </div>


                              <div class="input-group mb-3">
                                    <span class="input-group-text"><i class="fa-solid fa-envelope" style="color: purple;"></i></span>
                                    <input type="email" class="form-control" placeholder="Email" name="Email" size="25" required>
                              </div>
                              <div class="input-group mb-3">
                                    <span class="input-group-text"><i class="fa-solid fa-key" style="color: purple;"></i></span>
                                    <input type="password" class="form-control" placeholder="Password" name="LPassword" required>
                              </div>
                              <small><a href="forgot.php" class=>Forgot Password?</a></small>
                              <div class="button d-grid gap-2">
                                    <input type="submit" name="Submit" value="Login"><br>
                              </div>
                              <div class="text-end">
                                    <small>Don't have an account? <a href="signup.php">Signup now</a></small>
                              </div>
                        </div>
                  </div>
            </form>
      </div>

</body>

</html>

<?php
include('config.php');
if (isset($_POST['Submit'])) {
      if (isset($_POST['Email']) && (isset($_POST['LPassword']))) {
            $Email = $_POST['Email'];
            $LPassword = $_POST['LPassword'];

            $Email_search = " SELECT * FROM users WHERE Email ='$Email' AND Status = 'Active' ";
            $Query = mysqli_query($conn, $Email_search);

            $Email_count = mysqli_num_rows($Query);

            if ($Email_count == 1) {
                  $Email_pass = mysqli_fetch_assoc($Query);
                  $Db_pass = $Email_pass['Password'];
                  $Pass_decode = password_verify($LPassword, $Db_pass);
                  $_SESSION["Login"]=true;
                  if ($Pass_decode) {
                        echo "Login Successful...!";
                        header("location: services.php");
                  } else {
                        echo "<script> alert('Incorrect Password...!'); </script>";
                  }
            } else {
                  echo "<script> alert('Invalid Email...!'); </script>";
            }
      }
}
?>