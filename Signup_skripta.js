function validacijaForme() {
    var x, text;
	var forma=document.getElementById('myForm');
    
	x = forma['mail'].value;	
	y = forma['username'].value;
	z = forma['password'].value;
	//email
	var patt1 = new RegExp(/^[-a-zA-Z0-9~!$%^&*_=+}{\'?]+(\.[-a-zA-Z0-9~!$%^&*_=+}{\'?]+)*@([a-zA-Z0-9_][-a-z0-9_]*(\.[-a-zA-Z0-9_]+[a-zA-Z][a-zA-Z])|([0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}))(:[0-9]{1,5})?$/i);
	//username
	var patt2 = new RegExp(/^[a-zA-Z0-9_-]{3,16}$/);
	//pass
	var patt3 = new RegExp(/^[a-zA-Z0-9_-]{6,18}$/);
	
	var res1 = patt1.test(x);
	var res2 = patt2.test(y);
	var res3 = patt3.test(z);
	
	if (forma['name'].value == "") {
       alert("Niste unijeli Vaše ime i prezime");
    }
    else if (res1 == false) {
       alert("Neispravno unesen email");
    } 
	else if (res2 == false) {
       alert("Neispravno uneseno korisničko ime. Dužina korisničkog imena treba da bude od 3 do 16 znakova. Dozvoljena je upotreba ovih znakova: slovo, brojevi, crtica i donja crta.");
    } 	
	else if (res3 == false) {
       alert("Neispravno unesena lozinka. Dužina lozinke treba da bude od 6 do 18 znakova. Dozvoljena je upotreba ovih znakova: slovo, brojevi, crtica i donja crta.");
	   forma['password'].value = "";
    } 
	else if (forma['password2'].value == "") {
       alert("Potvrdite unesenu lozinku");
    }
	else if (forma['password'].value != forma['password2'].value) {
       alert("Unesene su dvije različite lozinke.");
	   forma['password'].value = "";
	   forma['password2'].value = "";
    }
	else{
		alert("Uspješno ste se registrovali!");
		document.getElementById("myForm").reset();
	}
}