<section id="inspired">
    <div class="inspired container-fluid">
        <div class="social-header mb-5">
            <h1 class="section-title">Inspired by<span class="text-danger">You</span></h1>
        </div>
        <div class="d-flex justify-content-center text-info">
          <h3>
            Bedankt aan iedereen voor de mooie foto's van de kinderen!
          </h3>
        </div>
        <div id="inspiredCarousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
             
              @foreach ($inspiredPictures as $inspiredPicture)
              <div class="carousel-item {{$inspiredPicture->id==1 ?' active ':''}}">
               <img class="d-block img-fluid" src="{{asset('img/Inspired/'.$inspiredPicture->inspired_image)}}" alt="inspired slides"></div>
           
           @endforeach
            </div> 
              <button class="carousel-control-prev" type="button" data-bs-target="#inspiredCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#inspiredCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
            </div>

            
            <p>
              <a class="btn btn-outline-secondary btn-sm d-grid gap-2 col-3 mx-auto" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                INSPIRED
              </a>
            </p>
            <div class="collapse" id="collapseExample">
              <div class="card card-body">
                <div class="bg-light">
              <h3 class="text-center">Wij van Boys and Girls vinden het geweldig om jullie foto's binnen te krijgen</h3>
            <h3 class="text-center">Graag ook jouw foto hier en op onze socials?</h3> 
            <h3 class="text-center">Stuur hem dan gerust via <a href="https://www.facebook.com/messages/t/820261334713166"  target="_blank"><i class="fab fa-facebook-messenger"></i></a> </h3>
            </div>
              </div>
            </div>
            
            

          </div>
          
</section>