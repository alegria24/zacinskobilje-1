function get(link)
{
    var ajax = new XMLHttpRequest();	
	ajax.onreadystatechange = function () {
        if (ajax.readyState == 4 && ajax.status == 200)
        {
            document.open();
            document.write(ajax.responseText);
            document.close();
        }
        if (ajax.readyState == 4 && ajax.status == 404)
        alert("error");
       
    }
    ajax.open("GET", link + ".html", true);
	     
	ajax.send();
}

function validacijaForme() {
    var x, text;
	var forma=document.getElementById('myForm');
    
	x = forma['email'].value;	
	var patt = new RegExp(/^[-a-zA-Z0-9~!$%^&*_=+}{\'?]+(\.[-a-zA-Z0-9~!$%^&*_=+}{\'?]+)*@([a-zA-Z0-9_][-a-zA-Z0-9_]*(\.[-a-zA-Z0-9_]+[a-zA-Z][a-zA-Z])|([0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}))(:[0-9]{1,5})?$/i);
	var res = patt.test(x);
	
	if (forma['ime_i_prezime'].value == "") {
       document.getElementById('greska').innerHTML = "Niste unijeli Vaše ime i prezime";
    }
    else if (res == false) {
       document.getElementById('greska').innerHTML = "Neispravno unesen email";
	   forma['email'].value = "";
    } 
	else if (forma['poruka'].value.length < 50) {
       document.getElementById('greska').innerHTML = "Vaša poruka treba da sadrži barem 50 karaktera.";
    }
	else{
		document.getElementById("myForm").reset();
		document.getElementById('greska').innerHTML = "Uspješno ste poslali Vašu poruku";
	}
}
