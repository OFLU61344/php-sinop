<?PHP

$dosya = "C:/DEBUG/Trabzon";
$uzantı = ".txt";

//$durum = file_put_contents ($dosya,"61");

for ($i = 1; $i <= 20; $i++) {
	$yeni_yol=$dosya.$i.$uzantı;
    echo $i." - ".$dosya;
	file_put_contents ($yeni_yol,"61");
	echo "\n";
}

$deg01 = 20;

while ($deg01 <= 40) {
	$yeni_yol=$dosya.$deg01.$uzantı;
	file_put_contents ($yeni_yol,"61");
	echo "\n";
	$deg01++;	
}

    $deg03 = 39;
    do {
        echo $deg03++ . " - ".$dosya;
		$yeni_yol=$dosya.$deg03.$uzantı;
		file_put_contents ($yeni_yol,"61");
			echo "\n";
    } while ($deg03 <= 60);   
	
?>