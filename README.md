# ZAČINSKO BILJE

Predmet: Web tehnologije

Ime i prezime: Ajša Terko
Broj indexa: 16964

Opis: Stranica nudi mogućnost kupovine specijalno pripremljenih paketa sa različitim začinima i začinskim biljem.
Stranica ujedno nudi mogućnost potencijalnim kupcima da se informišu o načinima upotrebe začina koji su u ponudi i njihovoj koristi.

I Šta je urađeno?
- Napravljene su odgovarajuće skice za podstranice koje su implementirane u prvoj spirali.
- Skica za izgled mobilne verzije je urađena samo za Home page s obzirom da su samo za tu stranicu vidljive značajnije promjene.
- Implementiran je meni web stranice.
- Meni je dijelom padajući i vidljiv je na svim implementiranim podstranicama.  
- Implementirane html forme ("Pretplati se forma", "Kontakt forma", "Sign Up forma", "Sign in forma").
- Stranice su responzivne i očekivano se prikazuju na mobilnim uređajima.
- Na Home page-u je implementiran photo slider.
- Dodan footer sa linkovima na podstranice.
- Izgled stranica je konzistentan, elementi su odgovarajuće poravnati. Nisu primjećeni glitchevi.
- News cards.
- Podstranice se učitavaju bez reload-a cijele stranice.
- Galerija slika sa opcijom da se na klik slika raširi preko cijelog ekrana, a na escape da se vrati pogled nazad na galeriju.
- Validacija polja: Kontakt i Sign Up podstranice

Spirala br. 3:
- username: admin, password: adminpass
- Adminu je omogućen download podataka u obliku csv fajla: Pogledati "proizvodi.php" i "downloadcsv.php".
- Omogućeno generisanja izvještaja u obliku pdf fajla: Pogledati "proizvodi.php" i "izvjestaj.php". Korištena je fpdf biblioteka.
- U oba slučaja su korišteni podaci iz XML-a.
- Admin korisniku je omogućen unos i brisanje podataka - "proizvodi.php"  
- Napravljena je opcija pretrage podataka sa prijedlozima. Dok korisnik upisuje vrijednost pretrage treba mu se prikazivati do deset najsličnijih stavki. Pretraga se vrši po poljima naziv začinskog bilja i kuhinja kojoj pripada istovremeno. Dok korisnik upisuje tekst po kojem će se pretraživati podaci, stranica se ne reloada. Kada korisnik pritisne na dugme Traži, prikazuju se svi rezultati koji zadovoljavaju uslov. Podaci koji se koriste za pretragu su iz iz XML-a.
- Urađena je serializacija podataka u XML fajlove: začinsko bilje (proizvodi.php), korisnici (sign_up.php), poruke dobijene putem kontakt forme (kontakt.php).
- Dodatni bod: Urađen je deployment stranice na OpenShift-u: http://zb-wt-etf.44fs.preview.openshiftapps.com/

Spirala br. 4

a) Pogledati zacinskobiljecompany.sql
b) xmltodb.php
d) http://wt16964-zacinsko-bilje.44fs.preview.openshiftapps.com/
e) rest.php
f) folder 'POSTMAN'

II Šta nije urađeno?
- Korišten LOREM IPSUM tekst što treba izmijeniti kasnije.

III i IV Bugovi

- News cards nisu očekivano centrirane pri prikazu na mobilnim uređajima. 

V LISTA FAJLOVA:
- index.php
- o_nama.php
- kontakt.php
- contacts.xml
- sign_in.php
- checklogin.php
- sign_up.php
- log_out.php
- proizvodi.php - Lista začinskog bilja
- proizvodi.xml
- proizvodi.csv
- izvjestaj.php - PDF
- downloadcsv.php
- stil_home_page.css - prateći CSS fajl za Home.html
- stil_onama_page.css - prateći CSS fajl za O_nama.html
- stil_kontakt_page.css - prateći CSS fajl za Kontakt.html
- stil_signin_page.css - prateći CSS fajl za SIGN_IN.html
- stil_signup_page.css - prateći CSS fajl za SIGN_UP.html
- Kontakt_skripta.js
- Signup_skripta.js
- skripta_home.js
