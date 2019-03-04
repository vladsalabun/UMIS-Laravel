<div class="intime_loader">
   <div class="bar">
      <div class="intime_loaded"></div>
   </div>
</div>

<script>

    // Випадкове ціле число:
    function randomInteger(min, max) {
        var rand = min - 0.5 + Math.random() * (max - min + 1)
        rand = Math.round(rand);
        return rand;
    }

    var rand = randomInteger(250, 400);

    function loader() {
          // до якого стану завантажити:
          $(".intime_loaded").css("width", ("100%"));
          $(".intime_loaded").css("transition", ("width " + (rand / 1000) + "s linear"));
       clearInterval(runloader);
    }

    // Швидкість цяток:
    var runloader = setInterval(loader);

    $(document).ready(function(){

        // Приховую сторінку:
        $('#fullpage').css('display', 'none');

        // Показую прелоадер:
        setTimeout(function () {

            // Видаляю прелоадер:
            $(".intime_loader").remove();

            // Показую сторінку:
            $('#fullpage').fadeIn(rand);

        }, rand);
    });

</script>
