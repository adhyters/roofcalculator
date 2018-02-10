<?php
$a=$_POST['a'];
$b=$_POST['b'];
$operasi=$_POST['operasi'];

echo "Panjang Ruangan / meter = $a <br>";echo "Lebar Ruangan / meter = $b <br>"

if($operasi=="tambah"){
    $c=$a+$b;
    echo "Hasil penjumlahan $a + $b = $c";
}else if ($operasi=="kurang"){
    $c=$a-$b;
    echo "Hasil Pengurangan $a - $b = $c";
}else if ($operasi=="kali"){
    $c=$a*$b;
    echo "Hasil Perkalian $a x $b = $c";
}else if ($operasi=="bagi"){
    $c=$a/$b;
    echo "Hasil Pembagian $a / $b = $c";
}else {
    echo "Pilih Operasi Dulu Bro";
}
?>