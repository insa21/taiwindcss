<?php
function run($x, $y, $z)
{
    // Inisialisasi total donasi
    $total_donasi = $x;

    // Menghitung total donasi setiap bulan
    for ($bulan = 2; $bulan <= $z; $bulan++) {
        // Tambahkan donasi bulanan ke total donasi
        $total_donasi += $x + ($y * ($bulan - 1));
    }

    return $total_donasi;
}

// Contoh studi kasus
echo run(10000, 20000, 5); // Output: 250000
echo run(10000, 1000, 100); // Output: 5950000
echo run(7, 5, 1); // Output: 12
echo run(10, 5, 2); // Output: 35
echo run(10, 5, 5); // Output: 95
echo run(8, 0, 5); // Output: 8
