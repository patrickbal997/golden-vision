<section class="prestation">
<h2 class="title-resi">PRESTATIONS</h2>

<div class="detail-prest">
    <p class="text-prest">Confection de plans architecturaux 3D et réalisation</p>
    <div class="img-prest">
        <img src="./golden media/design-architecture.jpg">
        <div class="after"></div>
    </div>
</div>


<div class="detail-cercle">
    <div class="img-cercle">
        <img src="./golden media/TOF2.jpeg">
    </div>
    <p class="text-cercle">Décoration et design immobilier</p>
</div>


<div class="detail-prest">
    <p class="text-prest">Achat - vente de terrain et maison</p>
    <div class="img-prest">
        <img src="./golden media/terrain-a-vendre-gatineau.jpeg">
        <div class="after"></div>
    </div>
</div>


<div class="detail-cercle">
    <div class="img-cercle">
        <img src="./golden media/autocad.webp">
    </div>
    <p class="text-cercle">Formation aux logiciels de génie civil</p>
</div>
</section>

<!---  temoingnage --->

<section class="avis" id="temoins">
<h1 class="titleavis">AVIS DE NOS  CLIENTS</h1>
<div class="detail-avis">

<section class="splide" aria-label="Splide Basic HTML Example">
  <div class="splide__track">
		<ul class="splide__list">

			<li class="splide__slide">
                <div class="temoin">
                <p>
                Je tiens à remercier l’équipe de GOLDEN VISION pour leur professionnalisme et 
                leur soutien tout au long de la recherche de mon appartement.
                </p>
                <div class="info-avis" >
                    <h4>Sophie L.</h4>
                    <i class="fa-solid fa-heart" id="like" > 16k</i>
                </div>
                </div>
            </li>

			<li class="splide__slide">
                <div class="temoin">

                <p>
                J’ai eu une excellente expérience, ils ont su me guider dans toutes les démarches administratives et m’ont proposé un bien 
                qui correspondait à mes critères à un prix compétitif.
                </p>
                <div class="info-avis" >
                    <h4>Marc D.</h4>
                    <i class="fa-solid fa-heart" id="like" > 23k</i>
                </div>

                </div>
            </li>

            <li class="splide__slide">
                <div class="temoin">

                <p>
                Leur équipe a pris le temps de comprendre nos besoins, et grâce à eux, nous avons trouvé notre maison idéale.
                Non seulement l’agence nous a aidés à négocier un bon prix, mais elle nous a aussi rassurés sur tous les aspects juridiques.
                </p>
                <div class="info-avis" >
                    <h4>Claire et Julien M.</h4>
                    <i class="fa-solid fa-heart" id="like" > 6k</i>
                </div>


                </div>
            </li>

            <li class="splide__slide">
                <div class="temoin">
                <p>
                Dès le premier contact, j’ai été impressionné par leur professionnalisme et leur approche personnalisée. 
                Ils m’ont donné des conseils précieux pour optimiser la présentation de ma maison et m'ont guidé tout au long du processus de vente.
                </p>
                <div class="info-avis" >
                    <h4>Thomas B.</h4>
                    <i class="fa-solid fa-heart" id="like" > 1k</i>
                </div>
                </div>
            </li>

		</ul>
  </div>
</section>

</div>
</section>


<script>
  document.addEventListener( 'DOMContentLoaded', function() {
    var avis = new Splide( '.detail-avis .splide', {
        width: '90%',
        start: 0 , //début du slide
        perPage: 3 , // slide visible
        pagination: true,
        type   : 'loop',//pagination continu
        breakpoints: {
            //media query
            950: {
                perPage: 2
            },
            670: {
                perPage: 1
            }
        }
    });
    avis.mount();
  } );
</script>