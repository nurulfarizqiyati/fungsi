<?php
  $nama_lengkap = "NURUL FARIZQIYATI HIDAYAT";
  $nama_depan = substr($nama_lengkap, 0, 7);
  $nama_belakang = substr($nama_lengkap, 7, 15);
  echo "Nama Lengkap : " . $nama_lengkap . "<br />";
  echo "Nama Depan : " . $nama_depan . "<br />";
  echo "Nama Belakang : " . $nama_belakang;
?>