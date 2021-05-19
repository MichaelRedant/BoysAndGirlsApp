<section id="new">
    <div class="new container new-top">
            <h1 class="section-title"><span>Nieuwe </span>Collectie <?php echo date("Y"); ?></h1>
            <p id="season" class="mb-1"></p>
    </div>
    
    <div class="row row-cols-1 row-cols g-4 text-center">
        <div class="col ml-3 card border-light">
            <img src="/img/brands/Raizzed/R121RBN34601_Natal_Neon Yellow_CAMPAIGN1.jpeg" class="card-img-top" alt="New Boys">
            <div class="card-body">
                <a href="{{route('NewBoys')."?sort-newest"}}" class="btn btn-outline-secondary">NEW BOYS</a>
            </div>
        </div>
        <div class="col card border-light">
            <img src="/img/brands/Raizzed/R121RGN30001_Atlanta_Dark Blue_CAMPAIGN1.jpeg" class="card-img-top" alt="New Girls">
            <div class="card-body">
                <a href="{{route('NewGirls')."?sort-newest"}}" class="btn btn-outline-secondary">NEW GIRLS</a>
            </div>
        </div>
      </div>
</section>