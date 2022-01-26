<?php

$baju = true;

if($baju){
	echo "Variable baju bernilai true"; 
}

$nilai = 50;

if ($nilai > 70) {
  echo "Selamat, anda lulus!";
} else {
  echo "Mohon maaf, anda harus mengulang";
}

echo "<br>";

$url = '/about';

switch ($url) {
  case '/':
    echo 'Selamat datang di dashboard.';
    break;
  case '/about':
    echo 'Selamat datang di halaman about.';
    break;
  case '/contact':
    echo 'Selamat datang di halaman kontak.';
    break;
  default:
    echo 'Maaf halaman yang anda cari tidak ditemukan.';
}

echo '<br>';

?>