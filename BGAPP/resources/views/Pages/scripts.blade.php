{{-- Standaard scripts --}}
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/9c2e97f136.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>


{{-- Script voor automatisch seizoen verandering --}}
<script>
var season;
switch (new Date().getMonth()) {
case 0:
season = "Winter collectie van <?php echo date("Y"); ?> voor, kom een kijkje nemen in januari om het nieuwe jaar goed in te zetten!";
break;
case 1:
season = "Winter collectie van <?php echo date("Y"); ?> voor, klaarmaken voor de maand februari? Kom alvast een kijkje nemen op de website!";
break;
case 2:
season = "collectie al voor de zomer van <?php echo date("Y"); ?>. Het lijkt nog wat veraf, maar we kunnen al wat van de zon proeven in maart!";
break;
case 3:
season = "collectie al voor de zomer van <?php echo date("Y"); ?>. Laat de zon maar schijnen in april! Kom een kijkje nemen online om te zien wat er in de winkel ligt!";
break;
case 4:
season = "collectie al voor de zomer van <?php echo date("Y"); ?>. Een kijkje nemen voor de communie in mei?";
break;
case 5:
season = "zomer collectie van <?php echo date("Y"); ?>. Gloeiend nieuw voor juni!";
break;
case  6:
season = "zomer collectie van juni <?php echo date("Y"); ?>. Zomerse nieuwigheden in de winkel!";
break;
case  7:
season = "zomer collectie van <?php echo date("Y"); ?>. Zomerse nieuwigheden in de winkel!";
break;
case 8:
season = "back to school collectie van september <?php echo date("Y"); ?>. Meer weten? Kom dan langs!";
break;
case 9:
season = "collectie van oktober <?php echo date("Y"); ?>. Neem alvast een kijkje.";
break;
case 10:
season = "collectie van november <?php echo date("Y"); ?>. Kom gerust eens langs.";
break;
case 11:
season = "de winter collectie van december <?php echo date("Y"); ?>. Neem alvast een kijkje.";

}
document.getElementById("season").innerHTML = "Graag presenteren wij van Boys & Girls u de " + season;
</script>



{{-- Scripts voor de Carousel --}}
<script>
$('#boysCarousel').carousel();

</script>
<script>
    $('#inspiredCarousel').carousel();
</script>



{{-- Go to top button --}}
<script>

topButton = document.getElementById("go-to-top");

// bij het scrollen naar beneden - show button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    topButton.style.display = "block";
  } else {
    topButton.style.display = "none";
  }
}

// scroll naar boven
function topFunction() {
  document.body.scrollTop = 0; // Safari browser proof
  document.documentElement.scrollTop = 0; // other browsers
}
</script>

{{-- loader --}}
<script>
  $(window).on("load",function(){
  $(".loader-wrapper").fadeOut("slow");
});
</script>




