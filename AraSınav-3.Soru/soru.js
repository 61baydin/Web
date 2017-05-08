//soru.js (herhangi web tarayýcýaýnda koþulduðu varsayýlacak)
function matris(m,n,ilk=0){
	var A=[];
	for(var i=0;i<n;i++){
		A.push(new Array(m).fill(ilk))  //fill => doldur(ata)
	}
	return A;
}

function setle (A){
	for(var i=0;i<A.length;i++){
		for(var j=0;j<A[0].length;j++){
			A[i][j]=i*j;
		}
	}
}
function yaz(A){
	for(var i=0;A.length;i++){
		for(var j=0;j<A[0].length;j++){
			document.write(A[i][j]+" ");
		}
	document.write("<br/>");
	}
}
var N=4;
var A=matris(N,N);

/*
setle(A);

*/
yaz(A);