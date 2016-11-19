function validacijaForme() {
    var x, text;
	var forma=document.getElementById('myForm');
    
	x = forma['email'].value;	
	var patt = new RegExp(/^[-a-zA-Z0-9~!$%^&*_=+}{\'?]+(\.[-a-zA-Z0-9~!$%^&*_=+}{\'?]+)*@([a-zA-Z0-9_][-a-zA-Z0-9_]*(\.[-a-zA-Z0-9_]+[a-zA-Z][a-zA-Z])|([0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}))(:[0-9]{1,5})?$/i);
	var res = patt.test(x);
	
	if (forma['ime_i_prezime'].value == "") {
       alert("Niste unijeli Vaše ime i prezime");
    }
    else if (res == false) {
       alert("Neispravno unesen email");
	   forma['email'].value = "";
    } 
	else if (forma['opruka'].value.length < 50) {
       alert("Vaša poruka treba da sadrži barem 50 karaktera.");
    }
	else{
		document.getElementById("myForm").reset();
	}
}
