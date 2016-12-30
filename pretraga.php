<!DOCTYPE HTML>
<HTML>

<HEAD>
<META http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width">
<TITLE>ZB Company</TITLE>
<meta name="viewport" content="width=device-width">
<link rel="stylesheet" type="text/css" href="CSS/stil_proizvodi.css">

<script>
function pretraga(str) {
    if (str.length == 0) { 
        document.getElementById("txtHint").innerHTML = "";
        return;
    } else {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("txtHint").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET", "gethint.php?q=" + str, true);
        xmlhttp.send();
    }
}

function fullpretraga(str) {
	document.getElementById("txtHint").innerHTML = "";
	console.log(str);
    if (str.length == 0) { 
        document.getElementById("txtHint").innerHTML = "";
        return;
    } else {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("txtHint").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET", "fullpretraga.php?q=" + str, true);
        xmlhttp.send();
    }
}
</script>

</HEAD>

<BODY>

<header>
<?php if(isset($_SESSION['user'])){
        if($_SESSION['user'] == "admin" || $_SESSION['user'] == "guest") { ?>
  <div class="inner">
    <nav>
	  <input type="checkbox" id="nav" /><label for="nav"></label>
      <ul>
        <li><a id="home-link" href="index.php">Home</a></li>
        <li>
          <a href="o_nama.php">O nama</a>
          <ul>
            <li><a href="#">Naše usluge</a></li>
            <li><a href="#">Naš tim</a></li>
          </ul>
        </li>
		<li>
          <a href="#">ZB paketi</a>
          <ul>
            <li><a href="#">Veliki ZB paket</a></li>
            <li><a href="#">Srednji ZB paket</a></li>
			<li><a href="#">Mali ZB paket</a></li>
          </ul>
        </li>
        <li><a href="proizvodi.php">Proizvodi</a></li>
        <li><a href="kontakt.php">Kontakt</a></li>
		<li><a href="log_out.php">Log Out</a></li>
      </ul>
    </nav>
  </div>
  <?php } }
   if((!isset($_SESSION['user']) || $_SESSION['user'] == "unknown")) { ?>
   <div class="inner">
    <nav>
	  <input type="checkbox" id="nav" /><label for="nav"></label>
      <ul>
              <li><a id="home-link" href="index.php">Home</a></li>
        <li>
          <a href="o_nama.php">O nama</a>
          <ul>
            <li><a href="#">Naše usluge</a></li>
            <li><a href="#">Naš tim</a></li>
          </ul>
        </li>
		<li>
          <a href="#">ZB paketi</a>
          <ul>
            <li><a href="#">Veliki ZB paket</a></li>
            <li><a href="#">Srednji ZB paket</a></li>
			<li><a href="#">Mali ZB paket</a></li>
          </ul>
        </li>
        <li><a href="proizvodi.php">Proizvodi</a></li>
        <li><a href="kontakt.php">Kontakt</a></li>
		<li><a href="sign_up.php">SIGN UP</a></li>
		<li><a href="sign_in.php">SIGN IN</a></li>
      </ul>
    </nav>
  </div>
  <?php } ?>
</header>

<!--Pattern-->

<p style="color:white;"><b>Start typing a name in the input field below - spice or cuisine:</b></p>
<form> 
<input id="textBox" type="text" onkeyup="pretraga(this.value)">
<button type="button" onclick="fullpretraga(document.getElementById('textBox').value)">Traži</button>
</form>
<p style="color:white;">You should check: <span id="txtHint"></span></p>
</body>

     

<footer class="footer">
		<p class="footer-motto">Proizvodimo začine i začinsko bilje i donosimo ih na kućnu adresu.
		Damo im dodatni šarm tako što raznovrsne začine pakujemo u vrećice zvane “MAGIJA - Ćiribu Ćiriba”.</p>
		<p class="footer-links">
			<a href="index.php">HOME</a>
			·
			<a href="o_nama.php">O NAMA</a>
			·
			<a href="#">ZB PAKETI</a>
			·
			<a href="proizvodi.php">ZAČINSKO BILJE</a>
			·
			<a href="kontakt.php">KONTAKT</a>
		</p>

		<p class="footer-copyright">Copyright &copy; ZB Company 2016</p>
</footer>
</div>
<script src="JS/skripta_home.js" type="text/javascript"></script>
</BODY>
</HTML>
