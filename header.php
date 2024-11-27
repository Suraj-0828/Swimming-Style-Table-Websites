<header class="header header-layout1">
  <nav class="navbar navbar-expand-lg sticky-navbar">
    <div class="container-fluid">
      <a class="navbar-brand" href="index.php">
        <img src="assets/images/logo/logo-dark.png" class="logo-fixed" alt="logo">

      </a>
      <button class="navbar-toggler" type="button">
        <span class="menu-lines"><span></span></span>
      </button>
      <div class="collapse navbar-collapse" id="mainNavigation">
        <ul class="navbar-nav ml-auto">
          <?php
          $current_page = basename($_SERVER['PHP_SELF']); // Get the current file name
          ?>
          <li class="nav__item <?php echo $current_page == 'index.php' ? 'activeee' : ''; ?>">
            <a href="index.php" class="nav__item-link">Home</a>
          </li><!-- /.nav-item -->

          <li class="nav__item <?php echo $current_page == 'about-us.php' ? 'activeee' : ''; ?>">
            <a href="about-us.php" class="nav__item-link">About Us</a>
          </li><!-- /.nav-item -->

          <li class="nav__item has-dropdown <?php echo in_array($current_page, ['decorative-facade.php', 'backyard-dinette.php']) ? 'activeee' : ''; ?>">
            <a href="#" data-toggle="dropdown" class="dropdown-toggle nav__item-link">Our Products</a>
            <ul class="dropdown-menu">
              <li class="nav__item <?php echo $current_page == 'decorative-facade.php' ? 'activeee' : ''; ?>">
                <a href="decorative-facade.php" class="nav__item-link">Decorative Facade</a>
              </li><!-- /.nav-item -->
              <li class="nav__item <?php echo $current_page == 'backyard-dinette.php' ? 'activeee' : ''; ?>">
                <a href="backyard-dinette.php" class="nav__item-link">Backyard Dinette</a>
              </li><!-- /.nav-item -->
            </ul><!-- /.dropdown-menu -->
          </li><!-- /.nav-item -->

          <li class="nav__item <?php echo $current_page == 'contact-us.php' ? 'activeee' : ''; ?>">
            <a href="contact-us.php" class="nav__item-link">Contact Us</a>
          </li><!-- /.nav-item -->
        </ul><!-- /.navbar-nav -->
        <button class="close-mobile-menu d-block d-lg-none"><i class="fas fa-times"></i></button>
      </div><!-- /.navbar-collapse -->

      <div class="d-none d-xl-flex align-items-center position-relative ml-30">
        <a href="contact-us.php" class="btn btn__primary btn__rounded ml-30">
          <i class="icon-calendar"></i>
          <span>Get a Quote</span>
        </a>
      </div>
    </div><!-- /.container -->
  </nav><!-- /.navabr -->
</header>