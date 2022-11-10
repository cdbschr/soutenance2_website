<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="<?= $description ?>">
  <title>BestMusic - <?= $title ?></title>
  <link rel="stylesheet" href="/public/styles/splide.min.css">
  <link rel="stylesheet" href="/public/styles/style.css">
  <link rel="icon" type="image/png" href="public/img/utils/logo.png" />
</head>

<body>
  <header>
    <h1>Best Music</h1>
    <?php require_once 'app/Views/frontend/layouts/headerphone.php'; ?>
    <?php require_once 'app/Views/frontend/layouts/nav.php'; ?>

    <div class="container">
      <div id="spacebetween-header">
        <div id="header-loupe-h2">
          <h2>Best Music</h2>
          <a href="#"><img src="/public/img/svg/loupe.svg" alt="loupe" id="search-header"></a>
        </div>
        <div id="logo-header">
          <a href="#"><img src="/public/img/svg/vector.svg" alt="heart" id="heart"></a>
          <a href="#"><img src="/public/img/svg/mail.svg" alt="mail" id="mail"></a>
          <a href="#"><img src="/public/img/svg/share.svg" alt="share" id="share"></a>
          <a href="#"><img src="/public/img/svg/user.svg" alt="user" id="user-header"></a>
          <a href="#"><img src="/public/img/svg/shoppingcart.svg" alt="shopping cart" id="shopping-cart"></a>
        </div>
      </div>
      <a href="#"><img src="/public/img/utils/logo.png" alt="logo" id="logo"></a>
      <ul>
        <a href="#">
          <li>Nos Sélections</li>
        </a>
        <a href="#">
          <li>Genres Musicaux</li>
        </a>
        <a href="#">
          <li>Nos Actualités</li>
        </a>
        <a href="#">
          <li>Notre Blog</li>
        </a>
      </ul>
    </div>
  </header>