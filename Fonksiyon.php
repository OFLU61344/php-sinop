<?PHP


function dosyaYaz($yol,$msg)
{
	$resource = fopen($yol,"w+");
	fwrite($resource,$msg);
	fclose($resource);
	return true;
}
