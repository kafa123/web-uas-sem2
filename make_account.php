<?php
session_start(); // Start the session

include "conn.php";

if (isset($_POST["register"])) {
   $username = $_POST['username'];
   $password = $_POST['password'];

   $sql = "INSERT INTO account (name, password) VALUES ('$username', '$password')";
   $result = mysqli_query($conn, $sql);

   if ($result) {
      $_SESSION['success'] = true;
      $_SESSION['message'] = "Account created successfully";
   } else {
      $_SESSION['error'] = "Error creating account: " . mysqli_error($conn);
   }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
   <!-- ... -->
   <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <title>Register</title>
  <!-- css -->
  <link rel="stylesheet" href="style.css">
   <script>
      function showPopup() {
         var popup = document.getElementById("popup");
         popup.style.display = "block";
      }
   </script>
</head>

<body>
   <!-- ... -->
   <div class="container d-flex justify-content-center">
      <form action="" method="post" style="width:50vw; min-width:300px;">
         <!-- ... -->

         <div class="row mb-3">
            <div class="col">
               <label class="form-label white">Username:</label>
               <input type="text" class="form-control" name="username" placeholder="Choose a username" required>
            </div>
         </div>

         <div class="row mb-3">
            <div class="col">
               <label class="form-label white">Password:</label>
               <input type="password" class="form-control" name="password" placeholder="Choose a password" required>
            </div>
         </div>

         <?php if (isset($error)) { ?>
         <div class="alert alert-danger" role="alert">
            <?php echo $error; ?>
         </div>
         <?php } ?>

         <div>
            <button type="submit" class="btn btn-success" name="register">Register</button>
         </div>
      </form>
   </div>
   <div id="popup" class="popup text-center">
      <div class="popup-content">
         <?php
         if (isset($_SESSION['success'])) {
            echo "<p>" . $_SESSION['message'] . "</p>";
            unset($_SESSION['success']);
            unset($_SESSION['message']);
         } elseif (isset($_SESSION['error'])) {
            echo "<p>" . $_SESSION['error'] . "</p>";
            unset($_SESSION['error']);
         }
         ?>
         <button onclick="window.location.href='login.php'">Continue</button>
         <button onclick="window.location.href='uas.php'">Back</button>
      </div>
   </div>

   <?php
   if (isset($_SESSION['success']) || isset($_SESSION['error'])) {
      echo '<script>showPopup();</script>';
   }
   ?>

   <!-- ... -->
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
</body>

</html>