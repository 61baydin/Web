//alert("Merhaba");

var sayi1 = 2;
var sayi2 = 3.2;
var sonuc = sayi1+sayi2;
var str="javaScript"; // can use "" or ' '
var uzunluk= str.length;
var adSoyad= "Burak Aydın";
var ad= adSoyad.substring(0,adSoyad.indexOf(" "));

//alert(sayi1+sayi2);
//alert(str);

//document.write(typeof(str));/*sayfanın başına değişkenin türünü yazar*/
//document.write(sonuc);
//document.write(ad);
//document.write(typeof(ad.charAt(0))); //ilk harf
//document.write(ad.length);

var sayi3=1+1;
var sayi4=1+"1"+" ";

//document.write(sayi3);
//document.write(sayi4);

//document.write(ad[0]);

var sayi5=""+10;
document.write(typeof(sayi5));//string
var str=parseInt("10 sayisi");//str=10, tipi number
document.write(str);

/*for(var i=0; i<adSoyad.length;i++)
{
	document.write(adSoyad[i]);
}*/

var i=0;
for(;;)
{	
	if(i==adSoyad.length)
	{
		break;
	}
	document.write(adSoyad[i]);
	i++;	
}






