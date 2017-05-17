
<?php
function yuvarlat($sayi){
	
	return (int)($sayi+0.5);
}
$s= 5.4556;
print yuvarlat($s);

print "<hr /";

function ayri_yaz($str, $ayrac = ", ") {         #çalışmadı kontrol et!!!
	if (strlen($str) > 0) {
		print $str[0];
		for ($i = 1; $i < strlen($str); $i++) {
			print $ayrac . $str[$i];
		}
	}
}

ayri_yaz("PHP","_ ");

$genel = "php";

function yaz(){       #çalışmadı
	global $genel;	# bu belirtilmesse local olur ve null değer almıi olur yazmaz.
	print $genel; 
}
print "<hr /";

/*	#$deg;
	#$deg=null;
	$deg=23;
	unset($deg);
	
	if(isset($deg)){
		print"deger setli";
	}
	else{
		print"deger setli degil";
	}
*/
?>


<!DOCTYPE html>
<html>
	<head>
		<title>Gömülü PHP </title>
	</head>
<body>
	<?php
		for($i=0;$i<100;$i++){
	?>
		<p> <?= $i ?> </p> <!-- print yerine "=" kullanılabilir -->
	<?php
	}
	?>
<hr />
	<h1> Merhaba </h1>
	<h2> Merhaba </h2>		
	<h3> Merhaba </h3>
	<h4> Merhaba </h4>
	<h5> Merhaba </h5>		
	<h6> Merhaba </h6>
<hr />
	<?php
	for($i=1;$i<=6;$i++){ ?>
		<h<?=$i?>>Merhaba</h<?=$i?>>  <!-- <h<?php print $i; ?>>Merhaba </h<?php print $i;?>> -->
	<?php
	}
	?>

</body>
</html>
