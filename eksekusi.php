<?php
$json_data= file_get_contents("profil.json");
$obj = json_decode($json_data);
echo "Nim : "; echo $obj->Nim;
echo "<br>";
echo "Nama : "; echo $obj->Nama;
echo "<br>";
echo "Email : "; echo $obj->Email;
echo "<br>";
echo "No_hp : "; echo $obj->No_hp;
echo "<br>";
echo "Makul 1: ";echo $obj->mata_kuliah[0];
echo "<br>";
echo "Makul 2: ";echo $obj->mata_kuliah[1];
echo "<br>";
echo "Makul 3: ";echo $obj->mata_kuliah[2];
?>