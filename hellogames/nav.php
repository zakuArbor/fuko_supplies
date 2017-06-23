<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="/hellogames/">HELLO GAMES</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class= "<?php if ($active == 0) { echo "active"; } ?> "><a href="/hellogames/">Home</a></li>

        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="/hellogames/gamecheats.php">Game Cheats <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="/hellogames/pokemonyellowcheats.php">Pokemon R/B/Y</a></li>
            <li><a href="/hellogames/pokemonsilvercheats.php">Pokemon S/G</a></li>
          </ul>
        </li>

        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Video <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="/hellogames/pokemonyellowvideo.php">Pokemon R/B/Y</a></li>
            <li><a href="/hellogames/pokemonsilvervideo.php">Pokemon S/G</a></li>
          </ul>
        </li>

        <li><a href="/hellogames/credit.php">Contact</a></li>
        <li><a href="#">Credits</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
        <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>
    </div>
  </div>
</nav>

