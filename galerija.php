<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <title>Usluge viljuškara | Galerija slika</title>
  <meta name="description" content="Zanatska radnja BD - Braća Dobrić. Pružamo sve vrste viljuškarskih usluga. Kontakirajte nas na broj 063/77-09-758">
  <link rel="stylesheet" href="css/reset.css" />
  <link rel="stylesheet" href="css/styles.css" />
  <link rel="icon" href="img/favicon.ico">
</head>

<body id="galerija">
  <header>
    <div class="header-container">
      <nav class="site-nav">
        <div class="menu-toggle">
          <div class="hamburger"></div>
        </div>
        <ul class="open desktop">
          <li><a href="index.php">Usluge</a></li>
          <!-- <li><a href="galerija.html">Galerija</a></li> -->
          <li><a href="#kontaktinfo">Kontakt</a></li>
        </ul>
      </nav>
      <!--<nav class="navbar navbar-fixed">
    <div class="navbar-items">
      <div class="brand"><a href="index.php" hreflang="sr"><span id="brend">B</span>raća<span id="brend">D</span>obrić</a></div>
      <div class="nav-items">
        <ul class="list-items">
          <li id="top"><a href="index.php#usluge" hreflang="sr">Usluge</a></li>
          <li id="bottom"><a href="index.php#info" hreflang="sr">Kontakt</a></li>
        </ul>
      </div>
    </div>
  </nav>-->
    </div>
  </header>
  <div class="container">
    <div class="galleria">
      <img src="img/viljuskar4.jpg" alt="viljuskar" data-title="Viljuskar 4" data-description="Pobeda 35">
      <img src="img/viljuskar5.jpg" alt="viljuskar" data-title="Viljuskar 5" data-description="Pobeda 35">
      <img src="img/viljuskar6.jpg" alt="viljuskar" data-title="Viljuskar 6" data-description="Pobeda 35">
      <img src="img/viljuskar1.jpg" alt="viljuskar" data-title="Viljuskar 1" data-description="Lancer Boss">
      <img src="img/viljuskar2.jpg" alt="viljuskar" data-title="Viljuskar 2" data-description="Pobeda 35">
      <img src="img/DSC00292.JPG" alt="viljuskar" data-title="Braća Dobrić" data-description="Pomeranje peći ručnim alatom">
      <img src="img/DSC00290.JPG" alt="viljuskar" data-title="Braća Dobrić" data-description="Pomeranje peći ručnim alatom">
    </div>
    <div class="odeljak">
      <div class="sivo">
        <div class="naslov">
          <h2 id="naslov">Kontakt informacije</h2>
        </div>
        <div id="kontaktCeo">
          <div class="kontakt" id="kontaktinfo">
            <table class="kontaktInfo">
              <tr>
                <td>Adresa</td>
                <td class="razmak">Braće Novaković 78, Surčin</td>
              </tr>
              <tr>
                <td>Telefon</td>
                <td class="razmak">063/77-09-758 <br>011/84-41-598</td>
              </tr>
              <tr>
                <td>E-Mail</td>
                <td class="razmak">dobric.milan@yahoo.com</td>
              </tr>
            </table>
          </div>
          <div class="kontakt" id="mapa">
            <iframe height="250" width="100%" src="https://www.google.com/maps/embed/v1/place?key=AIzaSyDvfkrO9iR0XsCrimQZiWHMVcc2Hf9OKgw&q=Braće+Novaković+78,Surcin+Serbia&center=44.792966,20.260071&zoom=13">
        </iframe>
          </div>
        </div>
        <div class="kontakt" id="kontaktMejl">
          <h3>Pošaljite mejl</h3>
          <div class="error">
            <form name="forma" id="mojaForma" class="kontakt forma" method="post" action="">
              <label class="labela" for="mejl">Mejl adresa</label>
              <input type="text" id="mejl" name="mejlAdresa" class="unos" spellcheck="false">
              <label class="labela" for="naslovMejl">Naslov mejla</label>
              <input type="text" id="naslovMejl" name="naslov" class="unos" spellcheck="false">
              <label class="labela" for="tekst">Tekst</label>
              <textarea name="tekst" id="tekst" class="unos" spellcheck="false"></textarea>
              <input class="btn" id="btn" type="submit" value="Pošalji">
              <span id="poruka"></span>
              <!-- Obaveštenje o poslatom mejlu -->
            </form>
          </div>
        </div>
        <!-- end odeljak-->
      </div>
    </div>
  </div>
  <!-- end container-->

  <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
  <script src="js/script.js"></script>
  <script src="js/validation.js"></script>
  <script src="ajaxMail.js"></script>
  <script src="galleria/galleria-1.5.7.min.js"></script>
  <script>
    (function() {
      Galleria.loadTheme('galleria/themes/classic/galleria.classic.min.js');
      Galleria.run('.galleria');
    }());
  </script>

</body>

</html>
