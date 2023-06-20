<?php
include "conn.php";

if (isset($_POST["submit"])) {
   $nama = $_POST['nama'];
   $Destinasi = $_POST['Destinasi'];
   $jumlah = $_POST['jumlah'];
   $mulai = date('Y-m-d', strtotime($_POST['mulai']));
   $selesai = date('Y-m-d', strtotime($_POST['selesai']));

   $sql = "INSERT INTO `travel` (`nama`, `Destinasi`, `jumlah`, `mulai`, `selesai`) VALUES ('$nama', '$Destinasi', '$jumlah', '$mulai', '$selesai')";

   $result = mysqli_query($conn, $sql);

   if ($result) {
      $_SESSION['status'] = "Date values Inserted";
      header("Location: daftar.php?msg=New record created successfully");
   } else {
      echo "Failed: " . mysqli_error($conn);
   }
}
?>







<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">

   <!-- Bootstrap -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

   <!-- Font Awesome -->
   <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@500&family=Poppins:wght@300&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@500&family=Lobster&family=Poppins:wght@300&display=swap" rel="stylesheet">

   <title>Travel-daftar</title>
   <!-- css -->
   <link rel="stylesheet" href="style3.css">
</head>

<body>
   <nav class="navbar navbar-light justify-content-center fs-3 bg-green white">
      Daftar
   </nav>
   
<section>
   <H1 class="title fs-1">Beyond the world</H1>
    <div class="image-container">
        <img src="assets/img/merapi.jpg" alt="" class="responsive-image">
    </div> 
   </section>
   <div class="container">
      <div class="text-center mb-4 coklat">
         <h3>Add New traveler</h3>
         <p class=" coklat">Complete the form below to add a new user</p>
      </div>
      <a href="UAS.php" class="btn btn-dark mb-3 white">Back to home</a>
      <div class="container d-flex justify-content-center">
         <form action="" method="post" style="width:50vw; min-width:300px;">
            <div class="row mb-3">
               <div class="col">
                  <label class="form-label coklat">Nama:</label>
                  <input type="text" class="form-control" name="nama" placeholder="Albert">
               </div>
            </div>

            <div class="mb-3">
               <label class="form-label coklat">Jumlah orang:</label>
               <input type="number" class="form-control" name="jumlah" placeholder="1">
            </div>

            <div class="form-group mb-3 ">
               <label class="coklat">Destinasi:</label>
               &nbsp;
               <input type="radio" class="form-check-input" name="Destinasi" id="Bali" value="Bali">
               <label for="Bali" class="form-input-label coklat">Bali</label>
               &nbsp;
               <input type="radio" class="form-check-input" name="Destinasi" id="Jogja" value="Jogja">
               <label for="Jogja" class="form-input-label coklat">Jogja</label>
               &nbsp;
               <input type="radio" class="form-check-input" name="Destinasi" id="Kalimantan" value="Kalimantan">
               <label for="Kalimantan" class="form-input-label coklat">Kalimantan</label>
               &nbsp;
               <input type="radio" class="form-check-input" name="Destinasi" id="Lombok" value="Lombok">
               <label for="Lombok" class="form-input-label coklat">Lombok</label>
               
            </div>

            <div class="row mb-3">
               <div class="col">
                  <label class="form-label coklat">Tanggal Mulai:</label>
                  <input type="date" class="form-control" name="mulai" placeholder="01-01-2021">
               </div>
               <div class="col">
                  <label class="form-label coklat">Tanggal Selesai:</label>
                  <input type="date" class="form-control" name="selesai" placeholder="01-01-2021">
               </div>
            </div>

            <!-- <div class="form-group mb-3 ">
               <label class="coklat">Metode pembayaran:</label>
               &nbsp;
               <input type="radio" class="form-check-input" name="metode" id="Dana" value="Dana">
               <label for="Dana" class="form-input-label coklat">Dana</label>
               &nbsp;
               <input type="radio" class="form-check-input" name="metode" id="paypal" value="paypal">
               <label for="paypal" class="form-input-label coklat">paypal</label>
               &nbsp;
               <input type="radio" class="form-check-input" name="metode" id="BCA" value="BCA">
               <label for="BCA" class="form-input-label coklat">BCA</label>
               &nbsp;
               <input type="radio" class="form-check-input" name="metode" id="mandiri" value="mandiri">
               <label for="mandiri" class="form-input-label coklat">mandiri</label>
               
            </div> -->

            <div>
               <button type="submit" class="btn btn-success " name="submit">Save</button>
               <a href="index.php" class="btn btn-danger coklat">Cancel</a>
            </div>
         </form>
      </div>
   </div>
   <br>
<br>
<br>
<footer class="text-center white">
  <br>
  <h5>by Nur Muhammad Kafabih</h5>
  <h4 class="text-center">2023</h4>
  <br>
</footer>
   <!-- Bootstrap -->
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>

</html>