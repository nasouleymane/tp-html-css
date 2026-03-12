<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Tables de multiplication</title>
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
      <h2>Tables de multiplication de 0 à 10</h2>

      <div class="tables-grid">
        <?php for ($n = 0; $n <= 10; $n++): ?>
          <article class="table-article">
            <h3>Table de <?php echo $n; ?></h3>
            <div class="table-multiplication">
              <?php
              $i = 0;
              while ($i <= 10) {
                $produit = $i * $n;
                echo "<p><span><strong>$i</strong> × <strong>$n</strong></span> <strong>$produit</strong></p>";
                $i++;
              }
              ?>
            </div>
          </article>
        <?php endfor; ?>
      </div>

    </div>
  </main>

  <footer>
    <div class="container">
      <p>&copy; 2026 - MINI PROJET HTML/CSS</p>
    </div>
  </footer>

</body>
</html>