<?php $title = "Accueil"; $description = "Best Music, le vendeur numéro 1 de Vinyles"; ob_start() ?>

<main>
<h2>Les incontournables du moment</h2>
<article class="album">
  <img src="/public/img/vinyles-artistes/beatles-abbey road.jpg" alt="beatles abbey road" class="img-album">
  <div class="icons">
    <img src="/public/img/svg/shoppingcart.svg" alt="shopping cart">
    <img src="/public/img/svg/vector.svg" alt="heart">
  </div>
  <img src="" alt="">
  <div class="albumcontent">
    <h4>THE BEATLES</h4>
    <h5>Abbey Road</h5>
    <p class="category">Pop Rock</p>
    <p class="price">Prix : 28,00 €</p>
  </div>
</article>
<h2>Pour ne rien louper</h2>
<article class="album">
  <img src="/public/img/vinyles-artistes/beatles-abbey road.jpg" alt="beatles abbey road" class="img-album">
  <div class="icons">
    <img src="/public/img/svg/shoppingcart.svg" alt="shopping cart">
    <img src="/public/img/svg/vector.svg" alt="heart">
  </div>
  <img src="" alt="">
  <div class="albumcontent">
    <h4>THE BEATLES</h4>
    <h5>Abbey Road</h5>
    <p class="category">Pop Rock</p>
    <p class="price">Prix : 28,00 €</p>
  </div>
</article>
<button class="button">Voir plus</button>
</main>

<?php $content = ob_get_clean(); require_once 'app/Views/frontend/templates/template.php' ?>