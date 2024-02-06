<header class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container">
    <h1><?php echo security($settings->header); ?></h1>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href='home'>Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href='contact'>Contact</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href='about'>About</a>
        </li>
      </ul>
    </div>
  </div>
</header>
