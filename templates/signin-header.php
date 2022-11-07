<nav class="navbar navbar-expand-md navbar-light sticky-top bg-white my-3">
  <div class="container-fluid">
    <a href="index.php" class="navbar-brand d-flex align-items-center col-md-3 mb-md-0 text-dark text-decoration-none">
      <img src="./assets/images/Libra-footer.png">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
      aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
    <ul class="navbar-nav nav-pills col-12 col-md-auto justify-content-center mb-md-0">
        <li><a href="index.php" class="nav-link px-3 <?= ($activePage == 'index') ? 'active':'' ?>">Home</a>
        </li>
        <li><a href="about.php" class="nav-link px-3 <?= ($activePage == 'about') ? 'active':'' ?>">About
            Us</a>
        </li>
        <li><a href="howitworks.php" class="nav-link px-3 <?= ($activePage == 'howitworks') ? 'active':'' ?>">How It
            Works</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle text-success" href="categories.html" role="button"
            data-bs-toggle="dropdown" aria-expanded="false">
            Categories
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item text-success" href="economics.php">Economics</a></li>
            <li><a class="dropdown-item text-success" href="engineering.php">Engineering</a></li>
            <li><a class="dropdown-item text-success" href="general-science.php">General Science</a></li>
            <li><a class="dropdown-item text-success" href="health.php">Health</a></li>
            <li><a class="dropdown-item text-success" href="literature.php">Literature & Arts</a></li>
            <li><a class="dropdown-item text-success" href="social-science.php">Social Science</a></li>
            <li><a class="dropdown-item text-success" href="psychology.php">Psychology</a></li>
            <li><a class="dropdown-item text-success" href="technology.php">Technology</a></li>
            <li><a class="dropdown-item text-success" href="theology.php">Theology</a></li>
          </ul>
        </li>
        <li><a href="community.php" class="nav-link px-3 <?= ($activePage == 'community') ? 'active':'' ?>">Our
            Community</a>
        </li>
      </ul>
      <div class="col-md-2 dropdown">
        <a href="#" class="d-block link-dark text-decoration-none dropdown-toggle" id="dropdownUser1"
          data-bs-toggle="dropdown" aria-expanded="false">
          <img src="./assets/images/profile.png" alt="mdo" width="32" height="32" class="rounded-circle">
        </a>
        <ul class="dropdown-menu text-small" aria-labelledby="dropdownUser1">
          <li><a class="dropdown-item" href="#">New project...</a></li>
          <li><a class="dropdown-item" href="#">Settings</a></li>
          <li><a class="dropdown-item" href="#">Profile</a></li>
          <li>
            <hr class="dropdown-divider">
          </li>
          <li><a class="dropdown-item" href="signout.php">Sign out</a></li>
        </ul>
      </div>
    </div>
  </div>
</nav>