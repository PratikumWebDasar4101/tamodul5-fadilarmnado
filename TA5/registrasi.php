<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Registrasi</title>
  </head>
  <body>
    <form action="prosesregis.php" method="post" enctype="multipart/form-data">
      <center>
        <table>
          <tr>
            <td colspan="2"><h1><center>Pendaftaran</center></h1></td>
          </tr>
          <tr>
            <td>NIM</td>
            <td>:<input type="text" name="nim" maxlength="10" pattern="\d*" ></td>
          </tr>
          <tr>
            <td>Nama</td>
            <td>:<input type="text" name="nama" maxlength="25" required></td>
          </tr>
          <tr>
            <td>Email</td>
            <td>:<input type="email" name="email" pattern="[a-z0-9._-]+@+[a-z]+.com"></td>
          </tr>
          <tr>
            <td>Jenis Kelamin</td>
            <td>
                <input type="radio" name="gender" value="Laki-Laki">Laki-Laki
                <input type="radio" name="gender" value="Perempuan">Perempuan
            </td>
          </tr>
          <tr>
            <td>Program Studi</td>
            <td>
                <select class="" name="prodi">
                  <option value="D3 Manajemen Informatika">D3 Manajemen Informatika</option>
                  <option value="D3 Teknik Telekomunikasi">D3 Teknik Telekomunikasi</option>
                  <option value="D3 Manajemen Pemasaran">D3 Manajemen Pemasaran</option>
                  <option value="D3 Teknik Komputer">D3 Teknik Komputer</option>
                  <option value="D3 Teknik Informatika">D3 Teknik Informatika</option>
                  <option value="D3 Perhotelan">D3 Perhotelan</option>
                  <option value="D3 Komputerisasi Akuntansi">D3 Komputerisasi Akuntansi</option>
                  <option value="D4 Sistem Multimedia">D4 Sistem Multimedia</option>
                </select>
                </td>
          </tr>
          <tr>
            <td>Hobi</td>
            <td>
              <input type="checkbox" name="hobi[]" value="Ngegame">Ngegame <br>
              <input type="checkbox" name="hobi[]" value="Menggambar">Menggambar <br>
              <input type="checkbox" name="hobi[]" value="Menulis">Menulis <br>
              <input type="checkbox" name="hobi[]" value="Tidur">Tidur <br>
              <input type="checkbox" name="hobi[]" value="Belajar">Belajar
            </td>
          </tr>
          <tr>
            <td>Upload Foto</td>
            <td>
                <input type="file" name="gambar">
            </td>
          </tr>
          <tr>
            <td colspan="2"><input type="submit" name="submit" value="Registrasi"></td>
          </tr>
        </table>
    </center>
    </form>
  </body>
</html>
