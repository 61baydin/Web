/*var sayi1=1+1;
var sayi2=1+"1"+" ";

document.write(sayi1);
document.write(typeof(sayi1));
document.write(sayi2);
document.write(typeof(sayi2));
document.write(typeof(1*"1"));

document.write(Math.abs(-7));

var sayi=7;

if (sayi!=0)
{
	document.write(sayi/Math.abs(sayi));
	document.write("<br>");
}
else
{
	doceument.write("0");
}
document.write(Math.PI);*/

if(5===5.0)
{
	document.write("Eşit"+"<br>");
}
document.write(typeof(5.1)+"<br>"); //<br> alt satıra geçmek için kullandım. 
document.write(0/0+"<br>");
var sayi =100;
 sayi= sayi+"sayi";
document.write(sayi+"<br>");
var sayi= null;
document.write(typeof(sayi)+"<br>");
var sayi=Boolean(10);
document.write(sayi+"<br>");
var sayi=Boolean(null);
document.write(sayi+"<br>");
for(var i=0;i<10;i++)
{
	if(i==5) continue;
	document.write(i);
}
document.write("<br>");
var i=0
for(;;)
{	if(i<10)
	{ 
		if(i!=5){ 
		document.write(i); } 
	}
	else{ break; }
	++i;	
}
document.write("<br>");
/*var dizi = []; //dinamik
dizi[0]= 3; //dizi[0]= "Ahmet";
dizi[1]= 2;
dizi[10] = 4.23;

var dizi1 = [1,2,3];
dizi.sort(); //sıralama yapıyor
for(var i=0;i<dizi.length;i++)
	document.write(dizi[i]+"<br>");
document.write(dizi.length);
*/
var dizi2 = [1,2,3]; 
//yıgın
dizi2.push(5); //yigina itme
dizi2.pop();   //yigindan cekme
document.write(dizi2[0]+"<br>");
//kuyruk
dizi2.unshift(5);
var el= dizi2.shift();
document.write(el+"<br>");

dizi2.reverse(); // diziyi ters çevirir

document.write(dizi2[0]+"<br>");

var str = "Ali okula     gitti";
var dizi3 = str.split(/[ ]+/);
document.write(dizi3[2]+"<br>");
var str = "Ali,okula,,gitti";
var dizi3 = str.split(",");
document.write(dizi3[2]);

function yaz(){
	alert("Merhaba");
}
function yaz1(deg){ //parametreli fonksiyon
	alert(deg);
}
function kare(sayi){
	return sayi*sayi;
}

var kr = kare(5);
document.write(kr);





















