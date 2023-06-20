<?php
session_start();

include "conn.php";

if (isset($_POST["login"])) {
   $username = $_POST['username'];
   $password = $_POST['password'];

   $sql = "SELECT * FROM account WHERE name='$username' AND password='$password'";
   $result = mysqli_query($conn, $sql);

   if (mysqli_num_rows($result) == 1) {
      $row = mysqli_fetch_assoc($result);

      // Store user information in session variables
      $_SESSION['id'] = $row['id'];
      $_SESSION['name'] = $row['name'];

      header("Location: daftar.php");
   } else {
      $error = "Invalid username or password";
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
   <title>Login</title>
</head>

<body>
   <!-- ... -->

   <div class="container d-flex justify-content-center">
      <form action="" method="post" style="width:50vw; min-width:300px;">
         <!-- ... -->

         <div class="row mb-3">
            <div class="col">
               <label class="form-label white">Username:</label>
               <input type="text" class="form-control" name="username" placeholder="Enter your username" required>
            </div>
         </div>

         <div class="row mb-3">
            <div class="col">
               <label class="form-label white">Password:</label>
               <input type="password" class="form-control" name="password" placeholder="Enter your password" required>
            </div>
         </div>

         <?php if (isset($error)) { ?>
         <div class="alert alert-danger" role="alert">
            <?php echo $error; ?>
         </div>
         <?php } ?>

         <div>
            <button type="submit" class="btn btn-success " name="login" href="UAS.php">Login</button>
         </div>
      </form>
   </div>

   <!-- ... -->
</body>

</html>
