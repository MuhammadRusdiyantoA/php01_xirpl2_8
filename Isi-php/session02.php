<?php

session_start();

echo 'nama anda adalah '.$_SESSION['nama'];
echo "<br><a href='session01.php'>Kembali ke halaman pertama</a>";

?>