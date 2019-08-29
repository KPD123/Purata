<?php 
$f = fopen("Nombor.txt","r")
while (!feof ($f)
{
	$arrNombor = explode(',',fgdet($f));
}
$bilangan = count ($arrNombor);
$jumlah = 0;
for ($x = 0; $x < $bilangan; $x+){
	print $arrNombor [$x]"<br>";
	$jumlah = $jumlah + $arrNombor[$x];
}
$purata = $jumlah/$bilangan[$x];
print "Jumlah = ".$jumlah "<br> ";
print "Nilai Purata = ".$purata"<br>";

fclose ($f);
?>