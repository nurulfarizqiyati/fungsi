<?php
  $hari = "Senin Selasa Rabu Kamis Jum'at Sabtu Minggu";
  $exp = explode(' ', $hari);
  foreach ($exp as $val) {
	echo $val . "<br />";
  }
?>