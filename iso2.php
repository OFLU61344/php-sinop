<?PHP

include("Fonksiyon.php");

$dosya = "C:/DEBUG/Trabzon";
$uzantı = ".txt";

$deg03 = 0;
do {
	echo $deg03++ . " - ".$dosya;
	$yeni_yol=$dosya.$deg03.$uzantı;
	
	if (dosyaYaz($yeni_yol,"Sinop")) {
		echo "Yazma islemi basarili";
	}
	else {
		echo "HATA OLUSTU";
	}
	echo "\n";
} while ($deg03 <= 9
);   
	
?>
