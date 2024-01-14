<nav class="navbar sticky-top navbar-expand-lg navbar-light bg-light" id="navbar">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><span>RHS</span>GRAD</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link <?php if ($page == 'home') echo 'active' ?>" aria-current="page" href="./home.php">FOR YOU</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php if ($page == 'discover') echo 'active' ?>" aria-current="page" href="./discover.php">DISCOVER</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php if ($page == 'events') echo 'active' ?>" aria-current="page" href="./events.php">EVENTS</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php if ($page == 'donate') echo 'active' ?>" aria-current="page" href="./donate.php" id="donate-tab">DONATE+</a>
        </li>
        <div class="sidebar">
          <li class="nav-item">
            <a class="nav-link <?php if ($page == 'activity') echo 'active' ?>" aria-current="page" href="./activity.php">ACTIVITY</a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?php if ($page == 'inbox') echo 'active' ?>" aria-current="page" href="./inbox.php">INBOX</a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?php if ($page == 'account') echo 'active' ?>" aria-current="page" href="./account.php">ACCOUNT</a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?php if ($page == 'settings') echo 'active' ?>" aria-current="page" href="./settings.php">SETTINGS</a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?php if ($page == 'gallery') echo 'active' ?>" aria-current="page" href="./gallery.php">GALLERY</a>
          </li>
        </div>
      </ul>
      <div class="search " style="width: auto;">
        <form action="" class="d-flex" style="gap: 0.5rem;">
          <label for="people-search">
            <svg xmlns="http://www.w3.org/2000/svg" width="36" height="37" viewBox="0 0 36 37" fill="none" style="width: 80%;">
              <path d="M34.2606 35.9008C35.1921 36.8322 36.6297 35.3946 35.6983 34.4834L28.1051 26.8699C30.7686 23.9227 32.241 20.0903 32.2358 16.1179C32.2358 7.22875 25.007 0 16.1179 0C7.22875 0 0 7.22875 0 16.1179C0 25.007 7.22875 32.2358 16.1179 32.2358C20.1271 32.2358 23.8326 30.7576 26.6674 28.3076L34.2606 35.9008ZM2.02284 16.1179C2.02284 8.34243 8.36065 2.02486 16.1159 2.02486C23.8913 2.02486 30.2089 8.34243 30.2089 16.1179C30.2089 23.8934 23.8913 30.2109 16.1159 30.2109C8.36065 30.2109 2.02284 23.8934 2.02284 16.1179Z" fill="#292D32" />
            </svg>
          </label>
          <input id="people-search" type="search" placeholder="Search by name/year">
        </form>
      </div>
    </div>
  </div>
</nav>