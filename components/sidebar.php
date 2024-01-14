

<nav id="sidebar">
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link <?php if ($page == 'home') echo 'active' ?>" aria-current="page" href="./home.php">HOME</a>
        </li>
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
    </ul>
</nav>
