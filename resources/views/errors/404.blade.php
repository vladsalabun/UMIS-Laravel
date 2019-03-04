<!DOCTYPE html>
<html lang="en" >

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta charset="UTF-8">
  <title>Organism Logo-Animation</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link href="https://fonts.googleapis.com/css?family=Open+Sans|Roboto+Slab" rel="stylesheet">
<style>
html, body, .container {
  height: 100%;
  width: 100%;

}

body {
  background: url("{{ URL::to('/') }}/img/grislogin_clear.jpg");
  background-attachment: fixed;
  -moz-background-size: cover;
  -o-background-size: cover;
  -webkit-background-size: cover;
  background-size: cover;
  color: #fff;
  font-family: Roboto;
}

.container {
  display: table;
}

.batman {
  display: table-cell;
  vertical-align: middle;
}

.swag {
  position: relative;
  width: 100%;
}

.logo, .planet1, .planet2 {
  position: absolute;
  top: 0;
  left: 0;
  bottom: 0;
  right: 0;
  margin: auto;
  -moz-border-radius: 50%;
  -webkit-border-radius: 50%;
  border-radius: 50%;
}


.planet1, .planet2 {
  border: 1px solid #fff;
}

.planet1 {
  width: 197.5px;
  height: 217.5px;
  -moz-animation: spin 2.9s linear infinite;
  -webkit-animation: spin 2.9s linear infinite;
  animation: spin 2.9s linear infinite;
  opacity: 0.3;
}
.planet1:before {
  content: '';
  position: absolute;
  background: #fff;
  height: 6px;
  width: 6px;
  -moz-border-radius: 50%;
  -webkit-border-radius: 50%;
  border-radius: 50%;
  top: 135px;
  border: 1px solid #fff;
  opacity: 0.3;
}

.planet2 {
  width: 255.5px;
  height: 355.5px;
  -moz-animation: spin 6.2s linear infinite reverse;
  -webkit-animation: spin 6.2s linear infinite reverse;
  animation: spin 6.2s linear infinite reverse;
  opacity: 0.3;
}
.planet2:before {
  content: '';
  position: absolute;
  background: #fff;
  height: 6px;
  width: 6px;
  -moz-border-radius: 50%;
  -webkit-border-radius: 50%;
  border-radius: 50%;
  top: 220px;
  border: 1px solid #fff;
  opacity: 0.3;
}

@-moz-keyframes spin {
  100% {
    -moz-transform: rotate(360deg);
  }
}
@-webkit-keyframes spin {
  100% {
    -webkit-transform: rotate(360deg);
  }
}
@keyframes spin {
  100% {
    -webkit-transform: rotate(360deg);
    transform: rotate(360deg);
  }
}
.logo {
  text-align: center;
  color: white;

  letter-spacing: 22px;
      font-size: 60px;
      font-family: 'Roboto Slab', serif;
      font-weight: 400;
      z-index: 999;
      border: 1px solid #fff;
margin-top: -40px;
  border: 0px solid #fff;
}
.text404 {
    text-align: center;
    margin-top: 50px;
    position: inherit;
}
</style>
</head>

<body>


<div class="container">
  <div class="batman">
    <div class="swag">
      <div class="planet1"></div>
      <div class="planet2"></div>
       <a href="{{ URL::to('/') }}"><div class="logo">УМІС</div></a>
    </div>
    <div class="text404">
        <p class="center">Помилка 404! <br> Такої сторінки немає.</p>
    </div>

  </div>
</div>





</body>

</html>
