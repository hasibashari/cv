<?php
include_once("config.php");

if (isset($_POST['update'])) {
   $id = $_POST['id'];
   $nama = $_POST['nama'];
   $alamat = $_POST['alamat'];
   $telepon = $_POST['telepon'];
   $email = $_POST['email'];
   $web = $_POST['web'];
   $pendidikan = $_POST['pendidikan'];
   $pengalaman_kerja = $_POST['pengalaman_kerja'];
   $keterampilan = $_POST['keterampilan'];
   $foto_path = $_POST['foto_path'];

   // update user data
   $result = mysqli_query($conn, "UPDATE cv_data SET nama='$nama',alamat='$alamat',telepon='$telepon',email='$email',web='$web',pendidikan='$pendidikan',pengalaman_kerja='$pengalaman_kerja',keterampilan='$keterampilan',foto_path='$foto_path' WHERE id=$id");

   // Redirect to homepage to display updated user in list
   header("Location: index.php");
}

$result = mysqli_query($conn, "SELECT * FROM cv_data");

while ($user_data = mysqli_fetch_array($result)) {
   $id = $user_data['id'];
   $nama = $user_data['nama'];
   $alamat = $user_data['alamat'];
   $telepon = $user_data['telepon'];
   $email = $user_data['email'];
   $web = $user_data['web'];
   $pendidikan = $user_data['pendidikan'];
   $pengalaman_kerja = $user_data['pengalaman_kerja'];
   $keterampilan = $user_data['keterampilan'];
   $foto_path = $user_data['foto_path'];
}
?>

<!DOCTYPE html>
<html>

<head>
   <title>Update Data</title>
   <link rel="stylesheet" href="update.css">
</head>

<body>
   <h1>Update Data</h1>
   <form name="update_user" method="post" action="update.php">
      <input type="hidden" name="id" value="<?php echo $id; ?>">
      <table border="0">
         <tr>
            <td>Nama</td>
            <td><input type="text" name="nama" value="<?php echo $nama; ?>"></td>
         </tr>
         <tr>
            <td>Alamat</td>
            <td><input type="text" name="alamat" value="<?php echo $alamat; ?>"></td>
         </tr>
         <tr>
            <td>Telepon</td>
            <td><input type="text" name="telepon" value="<?php echo $telepon; ?>"></td>
         </tr>
         <tr>
            <td>Email</td>
            <td><input type="text" name="email" value="<?php echo $email; ?>"></td>
         </tr>
         <tr>
            <td>Web</td>
            <td><input type="text" name="web" value="<?php echo $web; ?>"></td>
         </tr>
         <tr>
            <td>Pendidikan</td>
            <td><input type="text" name="pendidikan" value="<?php echo $pendidikan; ?>"></td>
         </tr>
         <tr>
            <td>Pengalaman Kerja</td>
            <td><input type="text" name="pengalaman_kerja" value="<?php echo $pengalaman_kerja; ?>"></td>
         </tr>
         <tr>
            <td>Keterampilan</td>
            <td><input type="text" name="keterampilan" value="<?php echo $keterampilan; ?>"></td>
         </tr>
         <tr>
            <td>Foto Path</td>
            <td><input type="text" name="foto_path" value="<?php echo $foto_path; ?>"></td>
         </tr>
         <tr>
            <td><input type="submit" name="update" value="Save"></td>
         </tr>
      </table>
   </form>

   <!-- Footer -->
   <footer>
      <p>© 2023 Hasib Ashari</p>
   </footer>


</body>

</html>