<nav class="navbar navbar-expand-lg bg-white navbar-light py-3 sticky-top align-items-center">
  <div class="container">
    <a href="index.html" class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none">
      <div class="navbar-brand hidden-sm-down"><img src="./assets/images/Libra-footer.png"><span class="fs-5"></span>
      </div>
    </a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navmenu">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navmenu">
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
        <li class="nav-item">
          <a href="community.php" class="nav-link text-success">Our Community</a>
        </li>
      </ul>
      <a href="signin.php">
        <button type="button" class="btn btn-outline-success me-2">Sign-in</button>
      </a>
      <a href="signup.php">
        <button type="button" class="btn btn-success">Sign-up</button>
      </a>
    </div>
  </div>
</nav>