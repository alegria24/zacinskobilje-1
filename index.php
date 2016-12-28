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
<link rel="stylesheet" type="text/css" href="CSS/stil_home_page.css">
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

<div class="subpage-home">
<div id="gallery">
	<figure class="slider">
		<figure>
			<img src="Sve_fotografije/slika1.jpg" alt>
			<figcaption>ZB Company - Tradition since 2016</figcaption>
		</figure>
		<figure>
			<img src="Sve_fotografije/slika2.jpg" alt>
			<figcaption>ZB Company - Tradition since 2016</figcaption>
		</figure>
		<figure>
			<img src="Sve_fotografije/slika3.jpg" alt>
			<figcaption>ZB Company - Tradition since 2016</figcaption>
		</figure>
		<figure>
			<img src="Sve_fotografije/slika4.jpg" alt>
			<figcaption>ZB Company - Tradition since 2016</figcaption>
		</figure>
		<figure>
			<img src="Sve_fotografije/slika5.jpg" alt>
			<figcaption>ZB Company - Tradition since 2016</figcaption>
		</figure>
	</figure>
</div>

<h3 class="podnaslovi"> #Galerija </h3>

<div id="galerija">
	<div id="kolone">
		<div class="pin">
			<img class="myImag" id="myImg1" src="https://simplysophisticatedcooking.files.wordpress.com/2014/03/corned-beef-1.jpg" alt="Naši proizvodi">
		</div>
		<div class="pin">
			<img class="myImag" id="myImg2" src="http://smhttp.32478.nexcesscdn.net/80E972/organiclifestylemagazine/wp-content/uploads/2015/05/herbs-seasonings-spices.jpg" alt="Naši proizvodi">
		</div>
		<div class="pin">
			<img class="myImag" id="myImg3" src="http://i.ndtvimg.com/i/2016-05/spices_650x400_51463018965.jpg" alt="Naši proizvodi">
		</div>
		<div class="pin">
			<img class="myImag" id="myImg4" src="http://cdn4.rosannadavisonnutrition.com/wp-content/uploads/2015/04/ever-wonder-what-to-do-with-your-extra-spices-and-herbs.jpg" alt="Naši proizvodi">
		</div>
		<div class="pin">
			<img class="myImag" id="myImg5" src="http://tobyamidornutrition.com/wp-content/uploads/2015/11/Fall-herbs-and-spices.jpg" alt="Naši proizvodi">
		</div>
	</div>
</div>

<div id="myModal" class="modal">
  <img class="modal-content" id="img01">
  <div id="caption"></div>
</div>

<h3 class="podnaslovi"> #Novosti </h3>

<div id="novosti">
	<div class="novost">
	  <div class="image"><img src="http://www.1mhealthtips.com/wp-content/uploads/2015/08/beauty-boosting-herbs-spices.jpg" alt=""/></div>
	  <figcaption>
		<div class="date"><span class="day">19</span><span class="month">Nov</span></div>
		<h3>Novost br. 1</h3>
		<p>
		  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam dignissim rutrum consequat. Curabitur at fermentum ex. Nunc dictum consectetur eros sit amet dictum. Proin id consectetur velit. In at dapibus nisi. Curabitur dui ipsum, rhoncus vitae volutpat in, convallis eu est. Maecenas mattis velit sodales mi pretium, quis hendrerit dui cursus. Donec bibendum eleifend interdum.
		</p>
	  </figcaption>
	  <footer>
		<div>Saznaj više</div>
	  </footer>
	</div>

	<div class="novost">
	  <div class="image"><img src="http://www.sibbysgifts.com/images/layout/spoons-spices.png" alt=""/></div>
	  <figcaption>
		<div class="date"><span class="day">21</span><span class="month">Nov</span></div>
		<h3>Novost br. 2</h3>
		<p>
		  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam dignissim rutrum consequat. Curabitur at fermentum ex. Nunc dictum consectetur eros sit amet dictum. Proin id consectetur velit. In at dapibus nisi. Curabitur dui ipsum, rhoncus vitae volutpat in, convallis eu est. Maecenas mattis velit sodales mi pretium, quis hendrerit dui cursus. Donec bibendum eleifend interdum.
		</p>
	  </figcaption>
	  <footer>
		<div>Saznaj više</div>
	  </footer>
	</div>
</div>

<form action="#">
  <div class="container">
    <input type="email" placeholder="Unesite vaš e-mail" name="mail" required>
    <button type="submit">Pretplati se</button>
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
</div>
<script src="JS/skripta_home.js" type="text/javascript"></script>
</BODY>
</HTML>
