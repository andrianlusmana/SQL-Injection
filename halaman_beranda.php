<form method="GET">
  Nama Anda: <input type="text" name="nama">
  <input type="submit" value="Kirim">
</form>

<?php
if(isset($_GET['nama'])){
  echo "Halo, " . $_GET['nama'];
}
?>
