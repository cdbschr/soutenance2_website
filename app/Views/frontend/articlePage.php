<?php $title = "Page Article";
$description = "Best Music, le vendeur numéro 1 de Vinyles";
ob_start() ?>

<main id="articlePage" class="container">
  <div class="ariane">
    <p>Accueil / Nos Sélections / <span>Les incontournables</span></p>
  </div>
  <h4 class="mobile">THE BEATLES</h4>
  <div class="album-image">
    <img src="/public/img/vinyles-artistes/beatles-abbey road.jpg" alt="beatles abbey road" class="img-album">
    <a href="#" class="desktop"><button class="button">Ajouter au panier</button></a>
  </div>
  <div class="albumcontent">
    <h4 class="desktop">THE BEATLES</h4>
    <h5>Abbey Road</h5>
    <p class="category">Pop Rock</p>
    <p class="price">Prix : 28,00 €</p>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem incidunt deserunt illum eaque pariatur amet tempora aspernatur porro tenetur esse facilis inventore consequuntur corrupti dicta, quis dolorum delectus officiis officia vel! Tenetur harum quam earum maxime sunt nisi! Nisi incidunt laborum natus architecto autem aperiam quibusdam voluptate, unde ipsa voluptatem iste, excepturi quam magnam aliquid iure aliquam sapiente dolores. Fuga sint iste, alias neque adipisci quia earum officia accusantium doloremque.</p>
  </div>
  <a href="#" class="mobile"><button class="button">Ajouter au panier</button></a>
</main>

<?php $content = ob_get_clean();
require_once 'app/Views/frontend/templates/template.php' ?>