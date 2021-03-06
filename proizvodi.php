<?php
  session_start();
  $xml = new DOMDocument();
  $xml->load('proizvodi.xml');
  
   $veza = new PDO("mysql:dbname=zacinskobiljecompany;host=localhost", "admin", "adminpass");
   $veza->exec("set names utf8");
  
	   if(isset($_POST['deleteBtn']))
		  {
			$id  = $_POST['id'];
			$query = $veza->prepare("DELETE FROM zacinskobilje WHERE zbID=?");
			$query->bindValue(1, $id, PDO::PARAM_INT);
			$value = $query->execute();
		  }

	if(isset($_POST['addBtn']))
{
    if($_POST['name'] != "" && $_POST['cuisine'] != "" && $_POST['flavor'] != "" && $_POST['usage'] != "" && $_POST['price'] != "")
    {
        $rootTag = $xml->getElementsByTagName("AllSpices")->item(0);
        $dataTag = $xml->createElement("Spice");
        $nameTag = $xml->createElement("Name");
        $nameTag->appendChild($xml->createTextNode($_REQUEST['name']));
        $cuisineTag  = $xml->createElement("Cuisine");
        $cuisineTag->appendChild($xml->createTextNode($_REQUEST['cuisine']));
        $flavorTag = $xml->createElement("Flavor");
        $flavorTag->appendChild($xml->createTextNode($_REQUEST['flavor']));
		$usageTag = $xml->createElement("Use");
        $usageTag->appendChild($xml->createTextNode($_REQUEST['usage']));
		$priceTag = $xml->createElement("Price");
        $priceTag->appendChild($xml->createTextNode($_REQUEST['price']));
        $dataTag->appendChild($nameTag);
		$dataTag->appendChild($cuisineTag);
        $dataTag->appendChild($flavorTag);
        $dataTag->appendChild($usageTag);
		$dataTag->appendChild($priceTag);
        $rootTag->appendChild($dataTag);
        $xml->save('proizvodi.xml');
        header('Location:'.$_SERVER['PHP_SELF']);
    }
}
?>

<!DOCTYPE HTML>
<HTML>

<HEAD>
<META http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width">
<TITLE>ZB Company</TITLE>
<meta name="viewport" content="width=device-width">
<link rel="stylesheet" type="text/css" href="CSS/stil_proizvodi.css">
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

<div class="list">
  <ul>
    <li>Spice</li>
    <li>Cuisine</li>
    <li>Flavor</li>
    <li>Use</li>
    <li>Price</li>
	<li></li>
  </ul>
      <?php
        $xml = simplexml_load_file('proizvodi.xml');
        $x = 1;
        $rezultat = $veza->query("select zbID, zbName, zbCuisine, zbFlavor, zbUse, zbPrice from zacinskobilje");

        foreach ($rezultat as  $biljka) { ?>
          <ul>
              <li> <?php print $biljka['zbName'] ?> </li>
              <li><p> <?php print $biljka['zbCuisine'] ?> </p></li>
              <li> <?php print $biljka['zbFlavor'] ?> </li>
  		        <li><p> <?php print $biljka['zbUse'] ?> </p></li>
  		        <li> <?php print $biljka['zbPrice'] ?> </li>
				<li>
      		      <?php if(isset($_SESSION['user']) && $_SESSION['user'] == "admin"){?>
                  <form action='proizvodi.php' method='post'>
				  <button type="submit" name="deleteBtn" value="<?php echo $x;?>"> Delete </button>
				  <input type="hidden" name="id" value="<?php print $biljka['zbID']?>">
                  </form>
                <?php } ?>
              </li>
          </ul>
      <?php $x++; }  ?>
</div>

	<?php
        if(isset($_SESSION['user']) && $_SESSION['user'] == "admin"){ ?>

          <form align='center' id='proizvodForma' action='proizvodi.php' method='post'>;
          <br>
           <input type='text' id="SpiceName" name='name' placeholder='Name'>
            <input type='text' id="SpiceCuisine" name='cuisine' placeholder='Cuisine'>
            <input type='text' id="SpiceFlavor" name='flavor' placeholder='Flavor'>
			<input type='text' id="SpiceUsage" name='usage' placeholder='Usage'>
            <input type='text' id="SpicePrice" name='price' placeholder='Price'>
            <input id='dodaj-button' name='addBtn' type='submit' value='Add' />
        <?php } ?>
          </form>

        <!-- Izvjestaji-->
        <div style="padding-left:43%; padding-top:2%;">
			<form style="display:inline-block;" id="searchForma" action="pretraga.php">
              <input id="pretraga-button" type="submit" value="Pretraga">
            </form>
			<?php if(isset($_SESSION['user']) && $_SESSION['user'] == "admin") { ?>
            <form style="display:inline-block;" id="izvjestajForma" action="izvjestaj.php">
              <input id="izvjestaj-button" type="submit" value="PDF izvještaj">
            </form>
            <form style="display:inline-block;" id="downloadForma" action="downloadcsv.php">
              <input id="download-button" type="submit" value="Download csv">
            </form>
			<form style="display:inline-block;" id="konverzijaForma" action="xmltodb.php">
              <input id="konverzija-button" type="submit" value="XML to DB">
            </form>
            <?php } ?>
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
</div>
<script src="JS/skripta_home.js" type="text/javascript"></script>
</BODY>
</HTML>