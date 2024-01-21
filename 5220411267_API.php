<?php
$json_data=file_get_contents("mahasiswa.json");
$obj = json_decode($json_data);
echo "NIM : "; echo $obj->nim;
echo "<br>";
echo "Nama: ";echo $obj->nama;
echo "<br>";
echo "Progdi: ";echo $obj->progdi;
echo "<br>";
echo "Mata Kuliah: ";echo $obj->makul[0];
echo "<br>"; 
echo $obj->makul[1];
echo "<br>"; 
echo $obj->makul[2];
?>
