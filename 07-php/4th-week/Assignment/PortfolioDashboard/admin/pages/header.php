<header class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
    <h1 class="navbar-brand">Welcome <?php echo $_SESSION["username"]; ?></h1>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" href="?page=1">Settings</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="?page=2">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="?page=3">Contact</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="?page=4">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="logout.php">Log Out</a>
        </li>
      </ul>
    </div>
  </div>
</header>
