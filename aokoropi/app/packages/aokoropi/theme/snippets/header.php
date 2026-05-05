<!DOCTYPE html>
<html lang="el">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>@{ title | stripTags } · ΑΟ Κορωπί Football Academy</title>
  <meta name="description" content="@{ textTeaser | stripTags }">

  <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@400;500;600;700;800&family=Raleway:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="/packages/aokoropi/theme/css/style.css">
</head>
<body>

<nav id="mainNav">
  <a class="nav-brand" href="/">
    <img class="nav-logo" src="/packages/aokoropi/theme/img/logo.png" alt="AO Κορωπί">
    <div class="nav-brand-text">
      <div class="nav-title">ΑΟ ΚΟΡΩΠΙ</div>
      <div class="nav-sub">Football Academy</div>
    </div>
  </a>

  <div class="nav-links">
    <a href="/">Αρχική</a>
    <a href="/about">Σχετικά μας</a>
    <a href="/facilities">Εγκαταστάσεις</a>
    <a href="/programs">Τμήματα</a>
    <a href="/coaches">Προπονητές</a>
    <a href="/gallery">Gallery</a>
    <a href="/news">Νέα</a>
    <a href="/contact">Επικοινωνία</a>
  </div>

  <div class="nav-social">
    <a href="https://www.instagram.com/ao_koropi_fc" target="_blank">📸</a>
    <a href="https://www.facebook.com/profile.php?id=61550996456830" target="_blank">📘</a>
  </div>

  <div id="hamburger" class="hamburger" onclick="toggleMenu()">
    <span></span>
    <span></span>
    <span></span>
  </div>
</nav>

<div id="mobileMenu" class="mobile-menu">
  <a href="/">Αρχική</a>
  <a href="/about">Σχετικά μας</a>
  <a href="/facilities">Εγκαταστάσεις</a>
  <a href="/programs">Τμήματα</a>
  <a href="/coaches">Προπονητές</a>
  <a href="/gallery">Gallery</a>
  <a href="/news">Νέα</a>
  <a href="/contact">Επικοινωνία</a>
</div>
