<?php $title = "Accueil";
$description = "Best Music, le vendeur numéro 1 de Vinyles";
ob_start() ?>

<main>
  <section id="incontournables-section" class="container">
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
    <article class="album">
      <img src="/public/img/vinyles-artistes/beatles-abbey road.jpg" alt="beatles abbey road" class="img-album">
      <div class="icons">
        <img src="/public/img/svg/shoppingcart.svg" alt="shopping cart">
        <img src="/public/img/svg/vector.svg" alt="heart">
      </div>
      <img src="" alt="">
      <div class="albumcontent">
        <h4>ADELE</h4>
        <h5>30</h5>
        <p class="category">Pop Rock</p>
        <p class="price">Prix : 40,00 €</p>
      </div>
    </article>
    <article class="album">
      <img src="/public/img/vinyles-artistes/beatles-abbey road.jpg" alt="beatles abbey road" class="img-album">
      <div class="icons">
        <img src="/public/img/svg/shoppingcart.svg" alt="shopping cart">
        <img src="/public/img/svg/vector.svg" alt="heart">
      </div>
      <img src="" alt="">
      <div class="albumcontent">
        <h4>NIRVANA</h4>
        <h5>Never mind</h5>
        <p class="category">Indie Rock</p>
        <p class="price">Prix : 22,00 €</p>
      </div>
    </article>
    <article class="album">
      <img src="/public/img/vinyles-artistes/beatles-abbey road.jpg" alt="beatles abbey road" class="img-album">
      <div class="icons">
        <img src="/public/img/svg/shoppingcart.svg" alt="shopping cart">
        <img src="/public/img/svg/vector.svg" alt="heart">
      </div>
      <img src="" alt="">
      <div class="albumcontent">
        <h4>TPINK FLOYD</h4>
        <h5>The dark side of the moon</h5>
        <p class="category">Prog & Post Rock</p>
        <p class="price">Prix : 26,00 €</p>
      </div>
    </article>
  </section>
  <section id="rienlouper-section" class="container">
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
  </section>
  <section id="artistes">
    <h2>Artistes & Groupes</h2>
    <p>Découvrez leurs albums</p>
    <article class="artiste">
      <img src="/public/img/vinyles-artistes/cerrone.jpg" alt="cerrone">
      <p class="titreartiste">Cerrone</p>
      <p class="nbalbum">6 albums</p>
    </article>
    <article class="artiste">
      <img src="/public/img/vinyles-artistes/eilishbillie.jpg" alt="billie ellish">
      <p class="titreartiste">Billie Ellish</p>
      <p class="nbalbum">6albums</p>
    </article>
  </section>
</main>

<?php $content = ob_get_clean();
require_once 'app/Views/frontend/templates/template.php' ?>