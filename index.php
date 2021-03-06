<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Usluge viljuškara | Zanatska radnja BD, Beograd</title>
  <meta name="description" content="Zanatska radnja BD - Braća Dobrić. Pružamo sve usluge viljuškara. Naš kontakt telefon: 063/77-09-758. Nalazimo se na adresi Braće Novaković 78, u Surčinu">
  <link rel="stylesheet" href="css/reset.css" />
  <link rel="stylesheet" href="css/styles.css" />
  <link rel="icon" href="img/favicon.ico">
</head>

<body>
  <header>
    <div class="header-container">
      <nav class="site-nav">
        <div class="menu-toggle">
          <div class="hamburger"></div>
        </div>
        <ul class="open desktop">
          <li><a href="index.php#usluge">Usluge</a></li>
          <li><a href="index.php#kontaktCeo">Kontakt</a></li>
          <li><a href="galerija.php">Galerija</a></li>
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
  <!-- end navbar navbar-fixed-->
  <hr id="usluge" />
  <div class="container">
    <div class="odeljak">
      <div class="sivo">
        <div class="naslov">
          <h1 id="usluga">Usluge</h1>
        </div>
        <div class="sadrzaj">
          <p>Bavimo se manipulacijom tereta od 1991. godine. Usluge koje pružamo su:<br/><br/> -istovar mašina<br/> -specijalnih tereta<br/> -paletirane robe<br/> -građevinskih materijala<br/> -pomeranje tereta ručnim alatom (do 10 tona).
          </p>
          <p>
            Sve naše mašine su registrovane i mogu se kretati kroz saobraćaj. <br/> Vršimo usluge na teritorijama opština Surčin, Zemun i Novi Beograd. Za dalji transport potrebna je šlepa.
          </p>
        </div>
      </div>
      <div class="sivo">
        <h3 id="viljuskari">Viljuškari kojima raspolažemo</h3>
        <div class="linijica"></div>
        <div class="redOpisa">
          <div class="slika">
            <img src="img/viljuskar1.jpg" alt="viljuskar">
          </div>
          <div class="tekstSlike">
            <h2>Lancer Boss</h2>
            <p>Lancer Boss je viljuškar težak 5 tona i pogodan je za dugačke terete poput građa i cevi. Moguće je postaviti i nastavke za vile.</p>
          </div>
        </div>
        <div class="redOpisa">
          <div class="slika">
            <img src="img/viljuskar2.jpg" alt="viljuskar">
          </div>
          <div class="tekstSlike">
            <h2>Pobeda 35</h2>
            <p>Viljuškar Pobeda 35 koji je domaće proizvodnje pogodan je za podizanje manjih tereta i nosivost mu je 4 tone.</p>
          </div>
        </div>
        <div class="redOpisa">
          <div class="slika">
            <img src="img/viljuskar3.jpg" alt="viljuskar">
          </div>
          <div class="tekstSlike">
            <h2>Litostroj</h2>
            <p>Ovaj viljuškar slovenačke marke ima 8 tona i u stanju je da podigne terete do 12 tona.</p>
          </div>
        </div>
      </div>
    </div>
    <!-- end odeljak-->
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
              <label class="labela" for="naslovv">Naslov mejla</label>
              <input type="text" id="naslovv" name="naslov" class="unos" spellcheck="false">
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

  <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-2.1.3.min.js"></script>
  <script src="https://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.0/jquery.validate.min.js"></script>
  <script src="js/script.js"></script>
  <script src="js/validation.js"></script>
  <script src="ajaxMail.js"></script>
</body>

</html>
