<section id="services">
        <h1 class="titleServ">NOS SERVICES</h1>
        <div class="containerServ">
        <p class="textserv">
        Golden vision immobilier dispose de plusieurs résidences partout à Abidjan et Assini... Nous avons que des résidences de rêves pour vos moments inoubliables
        </p>
        <div class="textserv1">
            <div style="width: 100%;">


            <figure class="c4-izmir c4-image-zoom-in" style="--primary-color: #6d5cff;">
            <img src="./golden media/TOF3.jpeg" class="article1">
            <figcaption>
            <div class="c4-reveal-up">
                    <h3>
                        Assinie
                    </h3>
                </div>
            </figcaption>
            </figure>


        <figure class="c4-izmir c4-image-zoom-in" style="--primary-color: #6d5cff;">
            <img src="./golden media/TOF1.jpeg" class="article2">
            <figcaption>
            <div class="c4-reveal-up">
                    <h3>
                        Yopougon
                    </h3>
                </div>
            </figcaption>
        </figure>


        <figure class="c4-izmir c4-image-zoom-in" style="--primary-color: #6d5cff;" id="article3">
            <img src="./golden media/TOF2.jpeg">
            <figcaption>
            <div class="c4-reveal-up">
                    <h3>
                        Cocody
                    </h3>
                </div>
            </figcaption>
        </figure>
                <!-- <article class="article1"></article> -->
            </div>
        </div>
        </div>
</section>

<!------ residences disponible (video) --------->
<section class="resi-dispo">
    <h2 class="title-resi">NOS RÉSIDENCES</h2>


    <section class="splide" aria-label="Splide Basic HTML Example">
  <div class="splide__track">
		<ul class="splide__list">

			<li class="splide__slide">
            <video controls>
                    <source src="./golden media/RESI1.mp4" type="video/ogg">
            </video>
            </li>

			<li class="splide__slide">
            <video controls>
                    <source src="./golden media/RESI2.mp4" type="video/ogg">
            </video>
            </li>

            <li class="splide__slide">
                <video controls>
                    <source src="./golden media/RESI3.mp4" type="video/ogg">
                </video>
            </li>

		</ul>
  </div>
</section>

</section>

<script>

  document.addEventListener( 'DOMContentLoaded', function() {
    var splide = new Splide( '.resi-dispo .splide', {
        width: '60%',
        start: 0 , //début du slide
        pagination: true,
        type   : 'loop'//pagination continu
    });
    splide.mount();
  } );
</script>