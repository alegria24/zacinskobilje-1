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
<link rel="stylesheet" type="text/css" href="CSS/stil_onama_page.css">
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
    <h1>ZB Company</h1>
    <p>Začinsko bilje - stil koji funkcionira u svakoj kuhinji</p>
    <img src="Sve_fotografije/onama.jpg" />
     <div class="bar"></div>
  </div>
</main>

  <p class='text'>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce molestie orci eu rhoncus sagittis. Nam sollicitudin lectus ut erat faucibus iaculis. Pellentesque dapibus, tortor eu blandit faucibus, ante turpis posuere ipsum, mattis ultrices felis lorem vel mauris. Donec nec quam ut libero venenatis euismod. Fusce dapibus lacus in sem cursus pellentesque. Duis et diam eu lacus porta viverra in ut augue.</p>
  <p class='text'>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce molestie orci eu rhoncus sagittis. Nam sollicitudin lectus ut erat faucibus iaculis. Pellentesque dapibus, tortor eu blandit faucibus, ante turpis posuere ipsum, mattis ultrices felis lorem vel mauris. Donec nec quam ut libero venenatis euismod. Fusce dapibus lacus in sem cursus pellentesque. Duis et diam eu lacus porta viverra in ut augue.</p>

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
