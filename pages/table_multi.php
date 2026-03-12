<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Table de 8</title>
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
        <?php $n = 8; ?>
        <h2>Table de multiplication de <?php echo $n; ?></h2>

        <div class="table-multiplication">
          <?php
          $i = 0;
          while ($i < 13) {
            $produit = $i * $n;
            echo "<p><span><strong>$i</strong> × <strong>$n</strong></span> <strong>$produit</strong></p>";
            $i++;
          }
          ?>
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