<?php

/**
 * Menampilan Jenis Kelamin dengan String Yang Sering
 * Dibuat di Rahfan
 * 
 * @param string $jenkel "L" | "P"
 * 
 * @return string Laki-Laki | Perempuan | Lainnya
 */
function jenkel(string $jenkel = null)
{
    if ($jenkel == "L") {
        return "Laki-laki";
    } else if ($jenkel == "P") {
        return "Perempuan";
    } else {
        return "Lainnya";
    }
}

/**
 * Mengetahui apakah nilai variabel A dan variabel B sama
 * 
 * @param mixed $a  Variabel A
 * @param mixed $b  Variabel B
 * 
 * @return bool True | False
 */

function sama($a, $b)
{
    if ($a == $b) {
        return true;
    } else {
        return false;
    }
}
