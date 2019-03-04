<style>
.loader{
    background-color: #2C3E50;
    color: #DDE0E3;
        bottom: 0;
    left: 0;
    overflow: hidden;
    position: fixed;
    right: 0;
    top: 0;
    z-index: 99999;
}

.loader {

}
.loader .bar {
  position: absolute;
  top: 50%;
  left: 50%;
  -webkit-transform: translate(-50%, -50%);
          transform: translate(-50%, -50%);
  background-color: #F5F5F5;
  width: 100px;
  height: 10px;
  border: 2px solid #F5F5F5;
  border-radius: 2px;
}
.loader .bar .loaded {
  position: absolute;
  top: 50%;
  left: 50%;
  -webkit-transform: translate(-50%, -50%);
          transform: translate(-50%, -50%);
  background-color: #607D8B;
  height: 100%;
  max-width: 100%;
  width: 0%;
  border-radius: 2px;
  transition: width 1s linear;
}
.loader .spinner {
  position: absolute;
  top: 50%;
  left: 50%;
  -webkit-transform: translate(-50%, -50%);
          transform: translate(-50%, -50%);
  height: 200px;
  -webkit-animation: bar 8s linear infinite;
          animation: bar 8s linear infinite;
  transition: height 1s ease-in;
}
.loader .spinner:before {
  content: '';
  position: absolute;
  top: 0px;
  left: 50%;
  -webkit-transform: translate(-50%, -50%);
          transform: translate(-50%, -50%);
  width: 4px;
  height: 4px;
  border-radius: 100px;
  background-color: #607D8B;
}

@-webkit-keyframes bar {
  0% {
    -webkit-transform: translate(-50%, -50%) rotate(0deg);
            transform: translate(-50%, -50%) rotate(0deg);
  }
  100% {
    -webkit-transform: translate(-50%, -50%) rotate(360deg);
            transform: translate(-50%, -50%) rotate(360deg);
  }
}

@keyframes bar {
  0% {
    -webkit-transform: translate(-50%, -50%) rotate(0deg);
            transform: translate(-50%, -50%) rotate(0deg);
  }
  100% {
    -webkit-transform: translate(-50%, -50%) rotate(360deg);
            transform: translate(-50%, -50%) rotate(360deg);
  }
}
</style>


<div class="loader">
   <div class="bar">
      <div class="loaded"></div>
   </div>
</div>

<script>

// Кількість мух:
for(var i = 0; i < 30; i++) {
   var radius = (rnd(1600,3400)/10);
   
   // Довжина радіусу проходження цяток:
   var modifier = radius/320;
   
   // Швидкість прокрутки цяток:
   var spinnerSpeed = 4;
   
   $(".loader").append("<div class=\"spinner\" style=\"animation: bar " + spinnerSpeed * modifier + "s linear infinite; height: " + radius + "px; animation-delay: -" + (rnd(40,80)/10) + "s\"></div>");
}

var loaded = 0;
function loader() {
   if(rnd(0,1) == 1) {
      loaded++;

      $(".spinner:nth-child(" + Math.floor(loaded/2.5) + ")").css("height", "120px");
      
      // Швидкість строки завантаження
      $(".loaded").css("width", (loaded + "2%"));
   }
   if(loader >= 100) {
      clearInterval(runloader);
   }
}
// Швидкість цяток:
var runloader = setInterval(loader,1); 

function rnd(m,n) {
   m = parseInt(m);
   n = parseInt(n);
   return Math.floor( Math.random() * (n - m + 1) ) + m;
}
$(window).load(function() {
    /*
    setTimeout(function () {
        $(".loader").remove();   
    }, 2000); 
    */
    $(".loader").fadeOut(3000);   
});
</script>

