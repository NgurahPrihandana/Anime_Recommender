{{-- resources/views/partials/sidebar.blade.php --}}
<nav class="sidebar">
  <header>
      <div class="image-text">
          <span class="image">
              <img src="img/logo.png" alt="">
          </span>
          <div class="text logo-text">
              <span class="name">Anime AI</span>
              <span class="profession">by WahCoPri</span>
          </div>
      </div>
      <i class='bx bx-chevron-right toggle'></i>
  </header>
  <div class="menu-bar">
      <div class="menu">
          <li class="search-box">
              <i class='bx bx-search icon'></i>
              <input type="text" placeholder="Search...">
          </li>
          <ul class="menu-links">
            <li class="nav-link">
              <a href="/" class="{{ request()->is('/*') ? 'active' : '' }}">
                <i class='bx bx-home icon'></i>
                <span class="text nav-text">Home</span>
              </a>
            </li>
            <li class="nav-link">
              <a href="/telusuri" class="{{ request()->is('telusuri','telusuri/*') ? 'active' : '' }}">
                <i class='bx bx-globe icon'></i>
                <span class="text nav-text">Telusuri</span>
              </a>
            </li>
            <li class="nav-link">
              <a href="/analitik" class="{{ request()->is('analitik','analitik/*') ? 'active' : '' }}">
                <i class='bx bx-pie-chart-alt icon'></i>
                <span class="text nav-text">Analitik & Trend</span>
              </a>
            </li>
            <li class="nav-link">
              <a href="/favorit" class="{{ request()->is('favorit','favorit/*') ? 'active' : '' }}">
                <i class='bx bxs-heart-circle icon'></i>
                <span class="text nav-text">Favoritku</span>
              </a>
            </li>
            <li class="nav-link">
              <a href="/pengaturan" class="{{ request()->is('pengaturan','pengaturan/*') ? 'active' : '' }}">
                <i class='bx bx-cog icon'></i>
                <span class="text nav-text">Pengaturan</span>
              </a>
            </li>
          </ul>
      </div>
      <div class="bottom-content">
          <li>
              <a href="#">
                  <i class='bx bx-log-out icon'></i>
                  <span class="text nav-text">Logout</span>
              </a>
          </li>
          <li class="mode">
              <div class="sun-moon">
                  <i class='bx bx-moon icon moon'></i>
                  <i class='bx bx-sun icon sun'></i>
              </div>
              <span class="mode-text text">Dark mode</span>
              <div class="toggle-switch">
                  <span class="switch"></span>
              </div>
          </li>
      </div>
  </div>
</nav>