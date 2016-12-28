 <?php
    session_start();
    $xml = new DOMDocument();
    $xml->load('contacts.xml');
    if(isset($_POST['ime_i_prezime']) && isset($_POST['email']) && isset($_POST['poruka']))
    {
        $rootTag = $xml->getElementsByTagName("Contacts")->item(0);
        $dataTag = $xml->createElement("Podaci");
        $imeTag = $xml->createElement("Ime");
        $imeTag->appendChild($xml->createTextNode($_REQUEST['ime_i_prezime']));
        $emailTag = $xml->createElement("Email");
        $emailTag->appendChild($xml->createTextNode($_REQUEST['email']));
        $msgTag = $xml->createElement("Poruka");
        $msgTag->appendChild($xml->createTextNode($_REQUEST['poruka']));
            
        $dataTag->appendChild($imeTag);
        $dataTag->appendChild($emailTag);
        $dataTag->appendChild($msgTag);
        $rootTag->appendChild($dataTag);
        $xml->save('contacts.xml');
        header('Location:'.$_SERVER['PHP_SELF']);
    }
?>

<!DOCTYPE HTML>
<HTML>

<HEAD>
<META http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width">
<TITLE>ZB Company</TITLE>
<meta name="viewport" content="width=device-width">
<link rel="stylesheet" type="text/css" href="CSS/stil_kontakt_page.css">
</HEAD>

<BODY>
<<header>
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

<main>
  <div class="slika">
     <img src="Sve_fotografije/kontaktiranje.jpg" />
  </div>
</main>

<section id="contact">
	<div class="container">
		<form name="myForm" method="post" id="myForm" enctype="multipart/form-data" accept-charset="utf-8" action ='kontakt.php'>
			<input type="text" name="ime_i_prezime" placeholder="IME I PREZIME">
			<input  type="text" name="email" placeholder="e-MAIL ADRESA">
			<textarea name="poruka" placeholder="PORUKA"></textarea>
			<button name="posalji" type="submit" onclick="validacijaForme()">POŠALJI</button>
		
		<p id="greska" style="color:white;"></p>
		</form>
	</div>
</section>


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

<script src="JS/Kontakt_skripta.js"></script>

</BODY>
</HTML>
