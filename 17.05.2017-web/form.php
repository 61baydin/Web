<DOCTYPE html>
<html>
	<head>
		<title> Form </title>
	</head>
	<body>
		<form action="form.php" method="post">  <!-- method= "get" yazmasanda getle yapacak "post" gete göre güvenli gömülü şekilde gönderir-->
		Ad: <input type="text" name="ad" value="ali" /> <br />
		Soyad: <input type="text" name="soyad" /> <br/>
		Sifre: <input type="password" name="sifre" /> <br/> <!--method getle gönderirsen sifre gözükür -->		
		<label>
		PHP<input type="checkbox" name="dil" /> <br/>
		</label>
		<input type="hidden" name="universite" value="ktu" />
		<input type="submit" value="Gönder" />
		<input type="reset" value="Sil" />
		</form>
		
		<?php
			$ad = $_REQUEST["ad"]; #$ad = $_GET["ad"]; global dizi #REQUEST post'uda get'i de alır
			$ad = htmlspecialchars($ad); 
			print $ad;
			
		/*	if(isset($_POST["soyad"])) {

			$soyad = $_POST["soyad"]; 
			print $soyad;
			}

			if(isset($_POST["universite"])) {

			print $_POST["$universite"];
			}
	
			$dil = $_POST["dil"]; #secili ise "on" yazar
			print $dil;
		*/			
		?>
		 
	</body>
</html>
