<?php
require ("./config.php");
session_start();
if( !isset($_SESSION["login"])){
  header("location: login.php");
  exit;
}

?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="favicon.ico">
  <title>Dashboard Lingkar Cafe</title>
  <!-- Simple bar CSS -->
  <link rel="stylesheet" href="css/simplebar.css">
  <!-- Fonts CSS -->
  <link
    href="https://fonts.googleapis.com/css2?family=Overpass:ital,wght@0,100;0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,600;1,700;1,800;1,900&display=swap"
    rel="stylesheet">
  <!-- Icons CSS -->
  <link rel="stylesheet" href="css/feather.css">
  <!-- Date Range Picker CSS -->
  <link rel="stylesheet" href="css/daterangepicker.css">
  <!-- App CSS -->
  <link rel="stylesheet" href="css/app-light.css" id="lightTheme">
  <link rel="stylesheet" href="css/app-dark.css" id="darkTheme">
</head>

<body class="vertical  dark  ">
  <div class="wrapper">
    <nav class="topnav navbar navbar-light">
      <button type="button" class="navbar-toggler text-muted mt-2 p-0 mr-3 collapseSidebar">
        <i class="fe fe-menu navbar-toggler-icon"></i>
      </button>
      <form class="form-inline mr-auto searchform text-muted">
        <input class="form-control mr-sm-2 bg-transparent border-0 pl-4 text-muted" type="search"
          placeholder="Type something..." aria-label="Search">
      </form>
      <ul class="nav">



        <li class="nav-item">
            <a class="nav-link text-muted my-2" href="./dashboard.php" id="modeSwitcher" data-mode="dark">
              <i class="fe fe-sun fe-16"></i>
            </a>
          </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle text-muted pr-0" href="#" id="navbarDropdownMenuLink" role="button"
            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <span class="avatar avatar-sm mt-2">
              <img src="./assets/avatars/face-1.jpg" alt="..." class="avatar-img rounded-circle">
            </span>
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item" href="#">Profile</a>
            <a class="dropdown-item" href="#">Settings</a>
            <a class="dropdown-item" href="#">Activities</a>
          </div>
        </li>
      </ul>
    </nav>
    <aside class="sidebar-left border-right bg-white shadow" id="leftSidebar" data-simplebar>
      <a href="#" class="btn collapseSidebar toggle-btn d-lg-none text-muted ml-2 mt-3" data-toggle="toggle">
        <i class="fe fe-x"><span class="sr-only"></span></i>
      </a>
      <nav class="vertnav navbar navbar-light">
        <!-- nav bar -->
        <div class="w-100 mb-4 d-flex">
          <a class="navbar-brand mx-auto mt-2 flex-fill text-center" href="./dashboard.html">
            <svg version="1.1" id="logo" class="navbar-brand-img brand-sm" xmlns="http://www.w3.org/2000/svg"
              xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 120 120" xml:space="preserve">
              <g>
                <polygon class="st0" points="78,105 15,105 24,87 87,87 	" />
                <polygon class="st0" points="96,69 33,69 42,51 105,51 	" />
                <polygon class="st0" points="78,33 15,33 24,15 87,15 	" />
              </g>
            </svg>
          </a>
        </div>
        <!-- SIDEBAR -->
        <ul class="navbar-nav flex-fill w-100 mb-2">
          <li class="nav-item w-100">
            <a class="nav-link" href="dashboard.php">
              <br>
              <i class="fe fe-home fe-16"></i>
              <span class="ml-3 item-text">Dashboard</span>
              <br>
              <br>
            </a>
          </li>
        </ul>
        <p class="text-muted nav-heading mt-4 mb-1">
          <span>CRUD</span>
        </p>
        <ul class="navbar-nav flex-fill w-100 mb-2">
          <li class="nav-item dropdown">
            <a href="#ui-elements" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
              <i class="fe fe-box fe-16"></i>
              <span class="ml-3 item-text">Tambah Data</span>
            </a>
            <ul class="collapse list-unstyled pl-4 w-100" id="ui-elements">
              <li class="nav-item">
                <a class="nav-link pl-3" href="./karyawan.php"><span class="ml-1 item-text">karyawan</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link pl-3" href="./user.php"><span class="ml-1 item-text">User</span>
                </a>
              </li>

            </ul>
          </li>
          <li class="nav-item dropdown">
            <a href="#forms" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
              <i class="fe fe-credit-card fe-16"></i>
              <span class="ml-3 item-text">Tambah Menu</span>
            </a>
            <ul class="collapse list-unstyled pl-4 w-100" id="forms">
              <li class="nav-item">
                <a class="nav-link pl-3" href="./makanan.php"><span class="ml-1 item-text">Makanan</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link pl-3" href="./minuman.php"><span class="ml-1 item-text">Minuman</span></a>
              </li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a href="#tables" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
              <i class="fe fe-grid fe-16"></i>
              <span class="ml-3 item-text">Barang</span>
            </a>
            <ul class="collapse list-unstyled pl-4 w-100" id="tables">
              <li class="nav-item">
                <a class="nav-link pl-3" href="./barang_in.php"><span class="ml-1 item-text">Barang Masuk</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link pl-3" href="./barang_out.php"><span class="ml-1 item-text">Barang Keluar</span></a>
              </li>
            </ul>
          </li>
          <li class="nav-item dropdown">
              <a href="#contact" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
                <i class="fe fe-book fe-16"></i>
                <span class="ml-3 item-text">Income</span>
              </a>
              <ul class="collapse list-unstyled pl-4 w-100" id="contact">
                <a class="nav-link pl-3" href="./income_harian.php"><span class="ml-1">Penghasilan Perhari</span></a>
                <a class="nav-link pl-3" href="./income_bulanan.php"><span class="ml-1">Penghasilan Perbulan</span></a>
              </ul>
            </li>
          <li class="nav-item dropdown">
            <a href="#charts" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
              <i class="fe fe-pie-chart fe-16"></i>
              <span class="ml-3 item-text">Absen</span>
            </a>
            <ul class="collapse list-unstyled pl-4 w-100" id="charts">
              <li class="nav-item">
                <a class="nav-link pl-3" href="./absen.php"><span class="ml-1 item-text">Karyawan</span></a>
              </li>
              
            </ul>
            <p class="text-muted nav-heading mt-4 mb-1">
              <span> LANDING PAGE</span>
            </p>
          <li class="nav-item w-100">
            <a class="nav-link" href="https://www.instagram.com/lingkar.cafe_/">
              <br>
              <i class="fe fe-external-link"></i>
              <span class="ml-3 item-text">Lingkar Cafe</span>
            <br>
            <br>  
            </a>
            <p class="text-muted nav-heading mt-4 mb-1">
          <span> USER SETTINGS</span>
        </p>
          </li>
          </li>
        </ul>
        <ul class="navbar-nav flex-fill w-100 mb-2">
          <li class="nav-item dropdown">
            <a href="#user" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
              <i class="fe fe-user"></i>
              <span class="ml-3 item-text">User Setting</span><span class="sr-only">(current)</span>
            </a>
            <ul class="collapse list-unstyled pl-4 w-100" id="user">
              <li class="nav-item active">
                <a class="nav-link pl-3" href="./accountsetting.php"><span class="ml-1 item-text">Account</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link pl-3" href="./profil.php"><span
                    class="ml-1 item-text">Profile</span></a>
              </li>
            </ul>
          <li class="nav-item w-100">
            <a class="nav-link" href="logout.php">
              <i class="fe fe-power"></i>
              <span class="ml-3 item-text">Log Out</span>
            </a>
          </li>
          </li>
        </ul>



    </aside>
    <!-- END DARI SIDEBAR -->
    <main role="main" class="main-content">
      <div class="container-fluid">
        <div class="row justify-content-center">
          <div class="col-12">
            <div class="row align-items-center mb-2">
              <div class="col">
                <h2 class="h5 page-title">Welcome!</h2>
              </div>
              <div class="col-auto">
                <form class="form-inline">
                  <div class="form-group d-none d-lg-inline">
                    <label for="reportrange" class="sr-only">Date Ranges</label>
                    <div id="reportrange" class="px-2 py-2 text-muted">
                      <span class="small"></span>
                    </div>
                  </div>
                  <div class="form-group">
                    <button type="button" class="btn btn-sm"><span
                        class="fe fe-refresh-ccw fe-16 text-muted"></span></button>
                    <button type="button" class="btn btn-sm mr-2"><span
                        class="fe fe-filter fe-16 text-muted"></span></button>
                  </div>
                </form>
              </div>
            </div>
            <!-- widgets -->
            <div class="row my-4">
              <div class="col-md-4">
                <div class="card shadow mb-4">
                  <div class="card-body">
                    <div class="row align-items-center">
                      <div class="col">
                        <small class="text-muted mb-1">Page Views</small>
                        <h3 class="card-title mb-0">1168</h3>
                        <p class="small text-muted mb-0"><span
                            class="fe fe-arrow-down fe-12 text-danger"></span><span>-18.9% Last week</span></p>
                      </div>
                      <div class="col-4 text-right">
                        <span class="sparkline inlineline"></span>
                      </div>
                    </div> <!-- /. row -->
                  </div> <!-- /. card-body -->
                </div> <!-- /. card -->
              </div> <!-- /. col -->
              <div class="col-md-4">
                <div class="card shadow mb-4">
                  <div class="card-body">
                    <div class="row align-items-center">
                      <div class="col">
                        <small class="text-muted mb-1">Total Pendapatan</small>
                        <h3 class="card-title mb-0">
                        
                        <?php
                        require ("./config.php");
                          $query = "SELECT SUM(jumlah) AS total FROM income";
                          $querysum = mysqli_query($koneksi,$query);

                        while ($row = mysqli_fetch_array($querysum)) {
                          $total = $row['total'];
                          // echo '<h3> ' . $total . '</h3>';
                        
                        ?>
                          <?php
                          if ($total == '') {
                            echo "<h3>Rp. 0</h3>";
                          } else {
                            echo "Rp. " . number_format($total, 2, ',', '.');
                          }
                          ?>
                          <?php
                        }
                          ?>
                    
                        </h3>
                        <small class="text-muted mb-1">Bulan Ini</small>
                        
                      </div>
                      <div class="col-4 text-right">
                        <span class="sparkline inlinepie"></span>
                      </div>
                    </div> <!-- /. row -->
                  </div> <!-- /. card-body -->
                </div> <!-- /. card -->
              </div> <!-- /. col -->
              <div class="col-md-4">
                <div class="card shadow mb-4">
                  <div class="card-body">
                    <div class="row align-items-center">
                      <div class="col">
                        <small class="text-muted mb-1">Visitors</small>
                        <h3 class="card-title mb-0">108</h3>
                        <p class="small text-muted mb-0"><span
                            class="fe fe-arrow-up fe-12 text-success"></span><span>37.7% Last week</span></p>
                      </div>
                      <div class="col-4 text-right">
                        <span class="sparkline inlinebar"></span>
                      </div>
                    </div> <!-- /. row -->
                  </div> <!-- /. card-body -->
                </div> <!-- /. card -->
              </div> <!-- /. col -->
            </div> <!-- end section -->
            <!-- linechart -->
            <div class="my-4">
              <div id="lineChart"></div>
            </div>
            
          </div> <!-- /.col -->
        </div> <!-- .row -->
      </div> <!-- .container-fluid -->
    </main> <!-- main -->
  </div> <!-- .wrapper -->
  <script src="js/jquery.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/moment.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/simplebar.min.js"></script>
  <script src='js/daterangepicker.js'></script>
  <script src='js/jquery.stickOnScroll.js'></script>
  <script src="js/tinycolor-min.js"></script>
  <script src="js/config.js"></script>
  <script src="js/d3.min.js"></script>
  <script src="js/topojson.min.js"></script>
  <script src="js/datamaps.all.min.js"></script>
  <script src="js/datamaps-zoomto.js"></script>
  <script src="js/datamaps.custom.js"></script>
  <script src="js/Chart.min.js"></script>
  <script>
    /* defind global options */
    Chart.defaults.global.defaultFontFamily = base.defaultFontFamily;
    Chart.defaults.global.defaultFontColor = colors.mutedColor;
  </script>
  <script src="js/gauge.min.js"></script>
  <script src="js/jquery.sparkline.min.js"></script>
  <script src="js/apexcharts.min.js"></script>
  <script src="js/apexcharts.custom.js"></script>
  <script src="js/apps.js"></script>
</body>

</html>