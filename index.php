<?php
$firma = 'Szprycha';
$rok = date('Y');
$imie = $_GET['imie'] ?? 'Maciej';
$cennik = [
  ['nazwa' => 'Przegląd podstawowy', 'cena' => 120],
  ['nazwa' => 'Przegląd kompleksowy', 'cena' => 260],
  ['nazwa' => 'Regulacja przerzutki (przód / tył)', 'cena' => 40],
  ['nazwa' => 'Odpowietrzanie hamulca hydraulicznego', 'cena' => 60],
  ['nazwa' => 'Centrowanie koła', 'cena' => 50],
  ['nazwa' => 'Wymiana łańcucha i kasety', 'cena' => 45],
];

$max_cena = max(array_column($cennik, 'cena'));

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
        <p class="welcome">Cześć, <?= htmlspecialchars($imie) ?>!</p>
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
          <?php foreach ($cennik as $usluga): ?>
            <tr>
              <td><?= htmlspecialchars($usluga['nazwa']) ?></td>
              <td class="num"><?= $usluga['cena'] ?> zł</td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>

      <!-- Wykres SVG generowany pętlą PHP -->
      <div class="chart-container" style="margin-top: 36px; background: #fff; padding: 24px; border-radius: var(--radius); border: 1px solid var(--border); box-shadow: var(--shadow);">
        <h3 style="margin-bottom: 20px; font-size: 1.1rem; color: var(--text-main);">Porównanie cen usług (Wykres SVG)</h3>
        <svg viewBox="0 0 520 <?= count($cennik) * 44 ?>" width="100%" height="100%" role="img" aria-label="Wykres słupkowy cen usług">
          <?php foreach ($cennik as $index => $usluga): 
            $y = $index * 44;
            // Obliczamy szerokość słupka (maksymalna szerokość to 300px)
            $bar_width = ($usluga['cena'] / $max_cena) * 300;
          ?>
            <!-- Nazwa usługi -->
            <text x="0" y="<?= $y + 20 ?>" font-size="12" font-weight="600" fill="#475569"><?= htmlspecialchars(mb_strimwidth($usluga['nazwa'], 0, 24, '...')) ?></text>
            
            <!-- Słupek SVG -->
            <rect x="170" y="<?= $y ?>" width="<?= $bar_width ?>" height="28" rx="6" fill="#4f46e5" />
            
            <!-- Wartość kwotowa -->
            <text x="<?= 178 + $bar_width ?>" y="<?= $y + 19 ?>" font-size="12" font-weight="700" fill="#4f46e5"><?= $usluga['cena'] ?> zł</text>
          <?php endforeach; ?>
        </svg>
      </div>
      
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