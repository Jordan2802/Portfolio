<?php

require_once 'src/App/Manager/AllManager.php';
require_once 'src/App/Manager/SiteManager.php';
require_once 'src/App/Entity/Site.php';

use App\Manager\AllManager;
use App\Manager\SiteManager;
use App\Entity\Site;

$siteManager = new SiteManager();
$sites = $siteManager->readAll();

      ?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
    crossorigin="anonymous">
  <link href="https://cdn.jsdelivr.net/npm/slick-carousel@1.6.0/slick/slick.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/slick-carousel@1.6.0/slick/slick-theme.css" rel="stylesheet">
  <link rel="stylesheet" href="web/css/style.css">


  <title>JordanoWeb</title>
</head>

<body>
  <nav>
    <div class="sec">
      <a href="index.php">Home</a>
      <a href="#projets">Projets</a>
      <a href="#propos">A propos</a>
      <a href="#contact">Contact</a>
    </div>
    <div class="barre1"></div>
    <div class="barre2"></div>
    <div class="barre3"></div>
  </nav>
  <nav class="nav2">
    <div class="sec2">
      <a href="index.php">Home</a>
      <a href="#projets">Projets</a>
      <a href="#propos">A propos</a>
      <a href="#contact">Contact</a>
    </div>
  </nav>
  <section id="home">
    <?php include_once("web/parts/home.php"); ?>
  </section>
  <section id="projets">
    <?php include_once("web/parts/projet.php"); ?>
  </section>
  <section id="propos">
    <?php include_once("web/parts/propos.php"); ?>
  </section>
  <section id="contact">
    <?php include_once("web/parts/contact.php"); ?>
  </section>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
    crossorigin="anonymous"></script>
  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
  <script type="text/javascript" src="web/js/app.js"></script>
</body>

</html>