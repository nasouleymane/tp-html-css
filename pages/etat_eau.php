<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>État de l'eau</title>
  <link rel="stylesheet" href="../assets/css/style.css">
</head>

<body>

  <header>
    <div class="container">
      <a href="../index.html"><h1>Mon Site Web</h1></a>
      <nav>
        <ul>
          <li><a href="../index.html">Accueil</a></li>
          <li><a href="formulaire.html">Formulaire</a></li>
          <li><a href="mois.php">Mois</a></li>
          <li><a href="table_multi.php">Table 8</a></li>
          <li><a href="multiplication_table.php">Multiplication</a></li>
          <li><a href="etat_eau.php">Eau</a></li>
        </ul>
      </nav>
    </div>
  </header>

    <main>
        <div class="container">
            <section>
                <h2>État de l'eau</h2>
                <?php
                $eau = -10;
                if ($eau < 0) {
                $etat = "L'eau s'est transformée en glace ❄️";
                $classe = "eau-glace";
                } elseif ($eau < 25) {
                $etat = "L'eau est froide 💧";
                $classe = "eau-froide";
                } elseif ($eau < 50) {
                $etat = "L'eau est chaude 🌡️";
                $classe = "eau-chaude";
                 } elseif ($eau < 100) {
                $etat = "L'eau est brûlante 🔥";
                 $classe = "eau-brulante";
                } else {
                $etat = "L'eau s'est transformée en vapeur 💨";
                $classe = "eau-vapeur";
                }
                ?>
                <div class="eau-card <?php echo $classe; ?>">
                    <div class="eau-temperature"><?php echo $eau; ?>°C</div>
                    <div class="eau-etat"><?php echo $etat; ?></div>
                </div>
            </section>
        </div>
    </main>

  <footer>
    <div class="container">
      <p>&copy; 2026 - MINI PROJET HTML/CSS</p>
    </div>
  </footer>

</body>
</html>