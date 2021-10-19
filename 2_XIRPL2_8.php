<?php

echo '<strong>Perulangan</strong><br><br>';
echo date('d-m-y h:i:s'), '<br><br>';
for ($i = 6; $i > 0; $i--) {
    for ($j = $i; $j > 0; $j--) {
        echo '<strong>*</strong>';
    }
    echo '<br>';
}
?>