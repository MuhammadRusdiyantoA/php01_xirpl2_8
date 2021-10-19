<?php

//single dimensional array / array biasa
//numeric array / array yang 'key'-nya menggunakan angka
$nama = ['Satria', 'Arsyi', 'Dhika', 'Evan', 'Fabian', 'Irfan'];
print_r($nama);
echo '<br><br>';

//multi dimensional array / array dalam array
//associative array / array yang 'key'-nya menggunakan string
$siswa = [
    [
        'nama' => 'Satria',
        'kelas' => 'RPL 1'
    ],
    [
        'nama' => 'Arsyi',
        'kelas' => 'RPL 2'
    ],
    [
        'nama' => 'Dhika',
        'kelas' => 'RPL 3'
    ],
    [
        'nama' => 'Evan',
        'kelas' => 'RPL 4'
    ],
    [
        'nama' => 'Fabian',
        'kelas' => 'RPL 5'
    ],
    [
        'nama' => 'Irfan',
        'kelas' => 'RPL 6'
    ]
];
print_r($siswa);
print_r($siswa[0]);

?>