<?php
$firma = 'Szprycha';
$rok = date('Y');
?>

<!DOCTYPE html>
<html lang="pl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Szprycha – Pracownia Rowerowa Bydgoszcz</title>
  <link rel="stylesheet" href="style.css">
  <script src="app.js" defer></script>
</head>
<body>

  <header class="site-header">
    <a class="logo" href="#">
      <svg viewBox="0 0 120 64" width="72" height="38" role="img" aria-labelledby="logo-tytul">
        <title id="logo-tytul">Szprycha</title>
        <circle cx="28" cy="42" r="18" fill="none" stroke="#4426FF" stroke-width="5"/>
        <circle cx="92" cy="42" r="18" fill="none" stroke="#4426FF" stroke-width="5"/>
        <polyline points="28,42 48,14 80,14 92,42" fill="none" stroke="#111" stroke-width="5" stroke-linecap="round" stroke-linejoin="round"/>
        <polyline points="48,14 60,42 80,14" fill="none" stroke="#111" stroke-width="5" stroke-linecap="round" stroke-linejoin="round"/>
      </svg>
      <span>Szprycha</span>
    </a>

    <button class="menu-toggle" aria-expanded="false" aria-label="Otwórz menu">Menu</button>
    <nav class="menu">
      <a href="#uslugi">Usługi</a>
      <a href="#cennik">Cennik</a>
      <a href="#kontakt">Kontakt</a>
    </nav>
  </header>

  <main>
    <section id="uslugi">
      <div class="hero">
        <h1>Profesjonalny Serwis Rowerowy</h1>
        <p>Zadbamy o Twój napęd, hamulce i zawieszenie w sercu Bydgoszczy. Szybko, precyzyjnie i bez niespodzianek.</p>
        <a href="#kontakt" class="btn-primary">Skontaktuj się z nami</a>
      </div>
      
      <h2>Nasze Usługi</h2>
      <p class="section-desc">Profesjonalny serwis rowerowy w sercu Bydgoszczy.</p>
      
      <div class="cards">
        <article class="card">
          <h3>Przegląd podstawowy</h3>
          <p>Regulacja napędu, kasowanie luzów, kontrola hamulców oraz ciśnienia w oponach.</p>
          <p class="card_price">od 120 zł</p>
        </article>

        <article class="card card--highlight">
          <span class="badge">Najczęściej wybierane</span>
          <h3>Przegląd kompleksowy</h3>
          <p>Pełne smarowanie węzłów łożyskowych, centrowanie kół, mycie napędu w myjce.</p>
          <p class="card_price">od 260 zł</p>
        </article>

        <article class="card">
          <h3>Serwis zawieszenia</h3>
          <p>Czyszczenie komory powietrznej, wymiana uszczelek kurzowych i oleju w damperze/widelcu.</p>
          <p class="card_price">od 180 zł</p>
        </article>
      </div>
    </section>

    <section id="cennik">
      <h2>Cennik szczegółowy</h2>
      <table class="price-table">
        <thead>
          <tr>
            <th scope="col">Usługa</th>
            <th scope="col" class="num">Cena</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Regulacja przerzutki (przód / tył)</td>
            <td class="num">40 zł</td>
          </tr>
          <tr>
            <td>Odpowietrzanie hamulca hydraulicznego</td>
            <td class="num">60 zł</td>
          </tr>
          <tr>
            <td>Centrowanie koła</td>
            <td class="num">50 zł</td>
          </tr>
          <tr>
            <td>Wymiana łańcucha i kasety</td>
            <td class="num">45 zł</td>
          </tr>
        </tbody>
      </table>
    </section>
  </main>

  <footer id="kontakt">
    <p>&copy; <?= $rok ?> <?= $firma ?></p>
    <h2>Kontakt</h2>
    <p><strong>Pracownia Rowerowa Szprycha</strong></p>
    <p>Adres: ul. Gdańska 42, 85-006 Bydgoszcz</p>
    <p>Telefon: <a href="tel:+48500100200">+48 500 100 200</a></p>
    <p>E-mail: <a href="mailto:kontakt@szprycha-bydgoszcz.pl">kontakt@szprycha-bydgoszcz.pl</a></p>
  </footer>

</body>
</html>