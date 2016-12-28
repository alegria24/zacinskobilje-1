<?php
    session_start();
?>

<!DOCTYPE HTML>
<HTML>

<HEAD>
<META http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width">
<TITLE>ZB Company</TITLE>
<meta name="viewport" content="width=device-width">
<link rel="stylesheet" type="text/css" href="CSS/stil_signin_page.css">
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

<div class="forma-login">
<form id = "formaLogin" method="post" action="checklogin.php">
<div class="container">
	<input type="text" placeholder="Unesite vaše korisničko ime" name="username" required>
	<input type="password" placeholder="Unesite vašu lozinku" name="password" required>
	<?php if(isset($_SESSION['user']) && $_SESSION['user'] == "unknown") { ?>
        <p style="padding-top:1.5%; padding-bottom:1.5%; margin-left:-50px;" id="warningMessage"> Nepostojeći korisnik! Pokušajte se logovati ponovo. </p>
        <?php session_unset(); } else { ?>
        <p style="display:none" id="warningMessage"> Nepostojeći korisnik! Pokušajte se logovati ponovo. </p>
    <?php } ?>
	<button type="submit">Prijavi se</button>
	<input type="checkbox" checked="checked"> Zapamti
	<a class="psw" href="#">Zaboravili ste vašu lozinku?</a>
</div>
</form>
</div>

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

<script src="JS/skripta_home.js" type="text/javascript"></script>
</BODY>
</HTML>
