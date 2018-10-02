<?php
session_start();
  if (isset($_POST['submit'])) {
      $nim = $_POST['nim'];
      $nama = $_POST['nama'];
      $email = $_POST['email'];
      $gender = $_POST['gender'];
      $prodi = $_POST['prodi'];
      $hobi = $_POST['hobi'];


      $nama_gambar = $_FILES['gambar']['name'];
      $template_gambar = $_FILES['gambar']['tmp_name'];
      $dir = "uploadaja/";
      $tempat_gbr = $dir.$nama_gambar;
      $upload_gbr = move_uploaded_file($template_gambar,$tempat_gbr);
  }
  ?>
  <!DOCTYPE html>
  <html lang="en" dir="ltr">
    <head>
      <meta charset="utf-8">
      <title></title>
    </head>
    <body>
      <form  action="prosesregis.php" method="post" enctype="multipart/form-data">
        <center>
        <table border="1">
          <tr>
            <td colspan="2"><center><h2>HASIL INPUT</h2></center></td>
          </tr>
          <tr>
            <td>NIM:</td>
            <td><?php  echo $nim; ?></td>
          </tr>
          <tr>
            <td>Nama:</td>
            <td><?php echo $nama; ?></td>
          </tr>
          <tr>
            <td>email:</td>
            <td><?php echo $email; ?></td>
          </tr>
          <tr>
            <td>Gender</td>
            <td><?php echo $gender; ?></td>
          </tr>
          <tr>
            <td>Prodi</td>
            <td><?php echo $prodi; ?></td>
          </tr>
          <tr>
            <td>Hobi</td>
            <td><?php
                  foreach ($hobi as $key => $value) {
                    echo $value;
                    echo "<br>";
                  }?></td>
          </tr>
          <tr>
            <td>Upload Gambar</td>
            <td><img src="<?php echo $tempat_gbr; ?>" width="400px"></td>
          </tr>
          <tr>
            <td colspan="2"><a href="login.php">Logout</a></td>
          </tr>
        </table>
      </center>
      </form>
    </body>
  </html>
