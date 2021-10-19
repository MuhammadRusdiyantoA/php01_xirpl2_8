<?php

if(isset($_COOKIE['panggilan'])) {
    echo '<h1>Cookie : "username" ada, isinya : '.$_COOKIE['panggilan'].'</h1>';
}
else {
    echo '<h1>Cookie : "Username" anda tidak ada</h1>';
}

if(isset($_COOKIE['namalengkap'])) {
    echo '<h1>Cookie : "namalengkap" ada, isinya : '.$_COOKIE['namalengkap'].'</h1>';
}
else {
    echo '<h1>Cookie : "namalengkap" anda tidak ada</h1>';
}

echo '<h2>Klik <a href="cookie01.php">di sini</a> untuk penciptaan cookie</h2>';

?>