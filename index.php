<?php
//gunakan file config.php
include_once("config.php");

//ambil data dan simpan kedalam variabel result
$result = mysqli_query($conn, "SELECT * FROM cv_data");
?>

<!DOCTYPE html>
<html>

<head>
   <title>Curriculum Vitae</title>
   <!-- Memasukkan CSS Bootstrap -->
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
   <!-- CSS External -->
   <link rel="stylesheet" href="index.css">
</head>

<body>
   <!-- Navbar -->
   <nav class="navbar navbar-expand-lg navbar-dark bg-dark nav-external">
      <a class="navbar-brand" href="#">Curriculum Vitae</a>
      <div class="collapse navbar-collapse" id="navbarNav">
         <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
               <a href="update.php" class="btn btn-primary">UPDATE</a>
            </li>
         </ul>
      </div>
   </nav>

   <!-- Container -->
   <div class="container">

      <div class="row">

         <!-- Kolom Gambar -->
         <div class="col-md-6 img-wrapper">
            <?php
            $row = mysqli_fetch_array($result);
            echo "<img id='image' src='" . $row['foto_path'] . "' alt='Gambar' class='img-fluid'>";
            ?>
         </div>

         <!-- Kolom Tabel -->
         <div class="col-md-6">
            <h2>Biodata</h2>

            <table class="table table-hover">

               <?php
               do {
                  echo "<tr>";
                  echo "<td>Nama</td>";
                  echo "<td>" . $row['nama'] . "</td>";
                  echo "</tr>";

                  echo "<tr>";
                  echo "<td>Alamat</td>";
                  echo "<td>" . $row['alamat'] . "</td>";
                  echo "</tr>";

                  echo "<tr>";
                  echo "<td>Telepon</td>";
                  echo "<td>" . $row['telepon'] . "</td>";
                  echo "</tr>";

                  echo "<tr>";
                  echo "<td>Email</td>";
                  echo "<td>" . $row['email'] . "</td>";
                  echo "</tr>";

                  echo "<tr>";
                  echo "<td>Web</td>";
                  echo "<td>" . $row['web'] . "</td>";
                  echo "</tr>";

                  echo "<tr>";
                  echo "<td>Pendidikan</td>";
                  echo "<td>" . $row['pendidikan'] . "</td>";
                  echo "</tr>";

                  echo "<tr>";
                  echo "<td>Pengalaman Kerja</td>";
                  echo "<td>" . $row['pengalaman_kerja'] . "</td>";
                  echo "</tr>";

                  echo "<tr>";
                  echo "<td>Keterampilan</td>";
                  echo "<td>" . $row['keterampilan'] . "</td>";
                  echo "</tr>";
               } while ($row = mysqli_fetch_array($result));
               ?>

            </table>
         </div>
      </div>
   </div>

   <!-- Footer -->
   <footer>
      <p>© 2023 Hasib Ashari</p>
   </footer>


   <!-- Memasukkan JS Bootstrap -->
   <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>

</html>