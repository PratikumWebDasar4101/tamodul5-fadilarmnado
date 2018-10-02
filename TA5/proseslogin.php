<?php
session_start();
  $user = $_POST['user'];
  $pass = $_POST['pass'];
  $submit = $_POST['submit'];

  $_SESSION['user'] = $user;
  $_SESSION['pass'] = $pass;

  $data = array(
          array("user" => "admin",
                "pass" => "admin"

          ),
          array("user" => "admin",
                "pass" => "fadil"

          )
        );
  if (isset($submit)) {
    $cek = 0;
    for ($i=0; $i < count($data); $i++) {
      if ($_SESSION['user'] == $data[$i]['user'] && $_SESSION['pass'] == $data[$i]['pass']) {
          header("location: registrasi.php");
          $cek++;
      }
    }
    if ($cek == 0) {
      header("location: login.php");
    }
    }
?>
