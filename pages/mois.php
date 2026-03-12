<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Jours dans un mois</title>
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
        <h2>Nombre de jours dans un mois</h2>
        <?php
        $mois = 5;
        $annee = 2026;
        switch($mois) {
          case 4: case 6: case 9: case 11:
            $jours = 30; $detail = "";
            break;
          case 2:
            if ($annee % 4 == 0) {
              $jours = 29; $detail = "année bissextile";
            } else {
              $jours = 28; $detail = "";
            }
            break;
          default:
            $jours = 31; $detail = "";
        }
        ?>
        <div class="mois-card">
          <div class="mois-nombre"><?php echo $jours; ?></div>
          <div class="mois-label">jours dans le mois <?php echo $mois; ?> de <?php echo $annee; ?></div>
          <?php if ($detail) echo "<div class='mois-detail'>$detail</div>"; ?>
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