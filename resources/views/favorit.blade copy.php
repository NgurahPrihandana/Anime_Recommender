<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Anime AI</title>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Box Icon -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.8/css/dataTables.dataTables.css" />
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
  </head>
  <body>
    <div class="container-fluid d-flex flex-column flex-md-row p-0">
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
                <a href="/">
                  <i class='bx bx-home icon'></i>
                  <span class="text nav-text">Home</span>
                </a>
              </li>
              <li class="nav-link">
                <a href="/telusuri">
                  <i class='bx bx-globe icon'></i>
                  <span class="text nav-text">Telusuri</span>
                </a>
              </li>
              <li class="nav-link">
                <a href="/analitik">
                  <i class='bx bx-pie-chart-alt icon'></i>
                  <span class="text nav-text">Analitik & Trend</span>
                </a>
              </li>
              <li class="nav-link">
                <a href="/favorit" class="active">
                  <i class='bx bxs-heart-circle icon'></i>
                  <span class="text nav-text">Favoritku</span>
                </a>
              </li>
              <li class="nav-link">
                <a href="/pengaturan">
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
      <section class="home flex-grow-1 p-3">
        <div class="container">

          {{-- Recomended Content --}}
          <div class="row mt-4">
            <h4>Anime Favoritmu</h4>
            <div class="col-lg-12">
              <table id="myTable" class="display table table-striped" style="width:100%">
                <thead>
                    <tr>
                        <th>Judul</th>
                        <th>Genre</th>
                        <th>Score</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>"Judul"</td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>"Judul"</td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </section>
    </div>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="js/script.js"></script>
    <script src="https://cdn.datatables.net/2.0.8/js/dataTables.js"></script>
  </body>
</html>
