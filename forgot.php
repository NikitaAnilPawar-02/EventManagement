<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Forgot Password</title>
      <link rel="stylesheet" type="text/css" href="form.css">
      <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" rel="stylesheet">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>
      <div class="container bg">
            <form action="forgot.php" method="Post">
                  <div class="position-absolute top-50 start-50 translate-middle form py-5 px-4 shadow-lg">
                        <div class="container">
                              <div class="text-center pb-4">
                                    <img src="Photos/l3.png" alt="Avatar" height="80" weight="80">
                                    <h3><b>Forgot Password</b></h3>
                              </div>
                              <?php $message ?>
                              <div class="input-group mb-3">
                                    <span class="input-group-text"><i class="fa-solid fa-envelope" style="color: purple;"></i></span>
                                    <input type="email" class="form-control" placeholder="Email" name="Email" size="25" required>
                              </div>
                              <div class="button d-grid gap-2">
                                    <input type="submit" name="Send" value="Send Mail"><br>
                              </div>
                        </div>
                        <div class="text-end">
                              <small>Don't have an account? <a href="signup.php">Signupnow</a></small>
                        </div>
                  </div>
      </div>
      </form>
      </div>
</body>

</html>

<?php
require 'config.php';
if (isset($_POST['Send'])) {
      $Email = $_POST['Email'];
      $emailquery = "SELECT * FROM users where Email='$Email'";
      $query = mysqli_query($conn, $emailquery);
      $emailcount = mysqli_num_rows($query);

      if ($emailcount) {
            $Userdata = mysqli_fetch_array($query);
            $Username = $Userdata['Username'];
            $Token = $Userdata['Token'];

            $Subject = "Password Reset";
            $Body = "Hi, $Username. Click here to Reset your Password
                                    http://localhost/Project/Event%20Management/recover_pass.php?Token=$Token ";
            $Sender = "From: pawarnikita0293@gmail.com";
            if (mail($Email, $Subject, $Body, $Sender)) {
                  $_SESSION['msg'] = "Check your mail to Reset your Password !!";
                  header('Location:login.php');
            } else {
                  echo "<script> alert('Email sending Failed...!'); </script>";
            }
      } else {
            echo "<script> alert('No Email Found..!'); </script>";
      }
}
?>