<?php
    session_start();
    $xml = new DOMDocument();
    $xml->load('users.xml');
    if(isset($_POST['name']) && isset($_POST['mail']) && isset($_POST['username']) && isset($_POST['password']))
    {
        $_SESSION['user'] = $_POST;
        $rootTag = $xml->getElementsByTagName("AllUsers")->item(0);
        $dataTag = $xml->createElement("User");
        $roleTag = $xml->createElement("Role", "user");
        $nameTag = $xml->createElement("Name");
        $nameTag->appendChild($xml->createTextNode($_REQUEST['name']));
        $usernameTag  = $xml->createElement("Username");
        $usernameTag->appendChild($xml->createTextNode($_REQUEST['username']));
        $emailTag = $xml->createElement("Email");
        $emailTag->appendChild($xml->createTextNode($_REQUEST['mail']));
        $pswTag = $xml->createElement("Password");
        $pswTag->appendChild($xml->createTextNode($_REQUEST['password']));
            
        $dataTag->appendChild($roleTag);
        $dataTag->appendChild($nameTag);
        $dataTag->appendChild($usernameTag);
        $dataTag->appendChild($emailTag);
        $dataTag->appendChild($pswTag);
        $rootTag->appendChild($dataTag);
        $xml->save('users.xml');
        header('Location:'.$_SERVER['PHP_SELF']);
        $_SESSION['user'] = "guest";
        $username = $_POST['username'];
        $password = $_POST['password'];
    }
?>

<!DOCTYPE HTML>
<HTML>

<HEAD>
<META http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width">
<TITLE>ZB Company</TITLE>
<meta name="viewport" content="width=device-width">
<link rel="stylesheet" type="text/css" href="CSS/stil_signup_page.css">
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

<form id="register_form" method="post" action="sign_up.php" onsubmit="return validacijaForme()">
  <div class="container">
    <input type="text" placeholder="Unesite vaše ime i prezime" name="name" required>

	<input type="text" placeholder="Unesite vaš e-mail" name="mail" required>

    <input type="text" placeholder="Unesite vaše korisničko ime" name="username" required>

    <input type="password" placeholder="Unesite vašu lozinku" name="password" required>

    <input type="password" placeholder="Ponovno unesite odabranu lozinku" name="password2" required>

    <input id="submit-button" name="register" type="submit" value="Registruj se"/>

	<p id="greska" style="color:white;"></p>
  </div>
</form>

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

<script src="JS/Signup_skripta.js"></script>
</BODY>
</HTML>
