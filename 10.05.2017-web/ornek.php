<?php
print "Ilk Php<br />";
$deger=5;
print(print('PHP Web Programlama<br />')); # içdeki printi ekrana yazar ve 1 değeri döner dıştaki print 1 yazar ekrana
#echo $deger;
#print $deger;
print "<br />";
print 6 + "1";
print "<br />";
print 6 . "1";
print "<br />";
$ogrenci_ad= "Ali"; #tipi string (bildirim)
print $ogrenci_ad;
print "<br />";
$sayi=5;

$sayi +=3;

$b = TRUE;
print $sayi;
print "<br />";
print $b;
print "<br />";
print gettype($sayi); #değişken tipini döndürür
print "<br />";
$b=(string)$b; # $b nin tipini booleandn stringe cevirir
if(is_string($b)){ # is_tür(değişken) değişken türünü kontrol eder
	print "string";
}
else
{
	print "string degil ";
	print gettype($b);
	
};
print "<br />";
$str = "deneme123";
print $str[0];
print $str[2];
print $str[4];
print $str[6];
print $str[8];
print "<br />";

$name="Ayse Fatma Hayriye";
print "0123456789";
print "<br />";
print $name;
print "<br />";
$length=strlen($name);
print "uzunlugu : $length <br />"; 
$cmp= strcmp($name,"Ayse Fatma Hayriye");
print "karsilastirma sonucu : $cmp <br />";
$index=strpos($name, "s");
print "ilk s nin indexi : $index <br />";
$first=substr($name,0,4);
print "ilk 4 karakter : $first <br />";
$buyukHarf=strtoupper($name);
print "Buyuk Harf : $buyukHarf <br />";
$kucukHarf=strtolower($name);
print "Kucuk Harf : $kucukHarf <br />";

$hayriyesiz = trim($name,"Hayriye");
print "Bosluksuz : $hayriyesiz <br />";

$explo = explode(" ",$name);
print "<br /> Explode :$explo[2] $explo[1] $explo[0]";

print "<br />" . implode("<>",$explo);

print "<br />";
print "false : " . FALSE;
print "<br />";
print "true : " .TRUE;
$dizi = array("Ali",61,"Trabzon"); #karışık tipli
print "<br />";
print $dizi[0];
$dizi[0]="Veli";
print "<br />";
print $dizi[0];
$dizi[]="Turkiye"; #dizinin en sonuna ekleme yapar
print "<br />";
print $dizi[3];
print "<br />";
print count($dizi); #4 elemanlı
print "<br />";
$dizi[20] = 21; #bu dizi kaç elemanlıdır? javascripte 21 elemanlıdır. 
print count($dizi); #ama PHP de 5 elemanlıdır
print "<br />";

for($i=0;$i<count($dizi);$i++){
	print $dizi[$i] . "<br />"; # 21'i yazmaz indisi(20) farklı olduğu için
}
foreach($dizi as $eleman)
	print $eleman . "<br />";
print_r($dizi);
print "<br />";
print(round(5.4)); # 5 e yuvarlar
print "<br />";
print(round(5.6)); # 6 a yuvarlar
print "<br />";
$sayi =5.60009;
$yuv = $sayi + 0.5;
print (int) $yuv;
?>
