<nav class="navbar" role="navigation" aria-label="main navigation">
  <div class="navbar-brand">

      <a class="navbar-item" href="{{URL::to('/')}}">
      <div class="lds-heart"><div></div></div>
      Українська МІС
    </a>
    <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
      <span aria-hidden="true"></span>
      <span aria-hidden="true"></span>
      <span aria-hidden="true"></span>
    </a>
  </div>

  <div id="navbarBasicExample" class="navbar-menu">
    <div class="navbar-start">
      <a class="navbar-item" href="{{URL::to('/')}}/word">
        Рандомне слово
      </a>
      <a class="navbar-item" href="{{URL::to('/')}}/about">
        Про програму
      </a>
    </div>

    <div class="navbar-end">
      <div class="navbar-item">
        <div class="buttons">
            @guest
          <a class="button is-danger" href="{{URL::to('/')}}/register">
            Реєстрація
          </a>
          <a class="button is-success" href="{{URL::to('/')}}/login">
            Вхід
          </a>
        @endguest
        @auth
            <a class="button is-danger" href="{{URL::to('/')}}/home">
              {{ Auth::user()->name }}
            </a>
            <a class="button is-danger" href="{{ route('logout') }}">Вихід</a>

        @endauth
        </div>
      </div>
    </div>
  </div>
</nav>

<script>
$(document).ready(function() {

  // Check for click events on the navbar burger icon
  $(".navbar-burger").click(function() {

      // Toggle the "is-active" class on both the "navbar-burger" and the "navbar-menu"
      $(".navbar-burger").toggleClass("is-active");
      $(".navbar-menu").toggleClass("is-active");

  });
});
</script>
