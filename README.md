# Mini Projet HTML/CSS/PHP

## Description
Projet web réalisé dans le cadre d'un TP encadré.
Le site contient une page d'accueil, un formulaire complet, une page de confirmation
et plusieurs pages PHP (calculs, tables de multiplication, état de l'eau).

## Structure du projet
tp-html-css/
├── index.html
├── README.md
├── pages/
│   ├── formulaire.html
│   ├── confirmation.html
│   ├── mois.php
│   ├── table_multi.php
│   ├── multiplication_table.php
│   └── etat_eau.php
└── assets/
    └── css/
        └── style.css

## Comment exécuter
1. Placer le dossier dans htdocs de XAMPP
2. Démarrer Apache depuis le panneau XAMPP
3. Ouvrir le navigateur et aller sur :
   http://localhost/dev-web-php-2025-2026/tp-html-css/

## Pages disponibles
- index.html : page d'accueil avec navigation
- formulaire.html : formulaire complet prêt pour PHP
- confirmation.html : page de confirmation statique
- mois.php : calcul du nombre de jours dans un mois
- table_multi.php : table de multiplication de 8
- multiplication_table.php : toutes les tables de 0 à 10
- etat_eau.php : état de l'eau selon la température

## Choix réalisés
- Style Glassmorphism avec fond sombre (#060818)
- Palette : violet/indigo (#6366f1, #8b5cf6), blanc cassé (#f1f5f9)
- Un seul fichier CSS pour tout le site
- Mise en page avec Flexbox et Grid
- Pas de framework CSS, pas de JS
- Pages PHP avec valeurs fixes (pas de formulaire)