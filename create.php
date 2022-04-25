<?php
include 'phpCode.php';
$pdo = pdo_connect_mysql();
$msg = '';
?>

<form method="post" action="server.php" >
  <div class="input-group">
    <label>Fakultas</label>
    <input type="text" name="fakultas" value="">
  </div>
  <div class="input-group">
    <label>Jumlah Animo</label>
    <input type="text" name="jumlahAnimo" value="">
  </div>
  <div class="input-group">
    <button class="btn" type="submit" name="save" >Simpan</button>
  </div>
</form>
