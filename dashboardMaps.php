<!--
=========================================================
* Paper Dashboard 2 - v2.0.1
=========================================================

* Product Page: https://www.creative-tim.com/product/paper-dashboard-2
* Copyright 2020 Creative Tim (https://www.creative-tim.com)

Coded by www.creative-tim.com

 =========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="./img/labgama-favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>Qualidade do Ar no Acre</title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
  <!-- CSS Files -->
  <link href="./assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="./assets/css/paper-dashboard.css?v=2.0.1" rel="stylesheet" />
  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.6.0/dist/leaflet.css" />
  <link rel="stylesheet" href="./css/styleMap.css" />

</head>

<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="white" data-active-color="danger">
      <div class="logo">
        <a href="https://www.creative-tim.com" class="simple-text logo-mini">
          <!-- <div class="logo-image-small">
            <img src="../assets/img/logo-small.png">
          </div> -->
          <!-- <p>CT</p> -->
        </a>
        <a href="#" class="simple-text logo-normal">
          Menu
          <!-- <div class="logo-image-big">
            <img src="../assets/img/logo-big.png">
          </div> -->
        </a>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li>
            <a href="index.php">
              <i class="fa fa-home" style="font-size:28px;"></i>
              <p style="font-size: 16px;">Home</p>
            </a>
          </li>
          <li>
            <a href="./dashboardGraficos.php">
              <i class="fa fa-line-chart"></i>
              <p>Gráficos Gerais</p>
            </a>
          </li>
          <li>
            <a href="./dashboardGraficos_mun.php">
              <i class="fa fa-area-chart"></i>
              <p>Gráficos Municipais</p>
            </a>
          </li>
          <li class="active" >
            <a href="./dashboardMaps.php">
              <i class="nc-icon nc-world-2"></i>
              <p>Mapas</p>
            </a>
          </li>
        </ul>
      </div>
    </div>
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-absolute fixed-top navbar-transparent">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <div class="navbar-toggle">
              <button type="button" class="navbar-toggler">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </button>
            </div>
            <a class="navbar-brand" href="./index.php">Qualidade do Ar no Acre</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navigation">
            <a class="nav-link" href="./index.php">Home</a>
            <form>
              <div class="input-group no-border">
                <input type="text" value="" class="form-control" placeholder="Search...">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <i class="nc-icon nc-zoom-split"></i>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
      <div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card ">
              <div class="card-header ">
                Número de dias com qualiade do ar acima do padrão recomendado pela OMS nos Municípios do Acre em 2019
              </div>
              <div class="card-body ">
                <div id="map" class="map"></div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="card ">
              <div class="card-header ">
                Total de focos de calor nos Municípios do Acre em 2019 e 2020
                <div class="tabBar2">
                    <!-- Edit the labels for each tab, such as "1910" -->
                    <div id="tab1" class="tabItem2 selected2">2019</div>
                    <div id="tab2" class="tabItem2">2020</div>
                </div>
              </div>
              <div class="card-body ">
                <div id="map2" class="map"></div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="card ">
              <div class="card-header ">
                Total de hectares (ha) de alertas de desmatamento nos Municípios do Acre em 2020  - Total no Acre de 10.385 ha em 25/06/2020
              </div>
              <div class="card-body ">
                <div id="map1" class="map"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <footer class="footer footer-black  footer-white ">
        <hr>
        <div class="container-fluid">
          <div class="row">
            <div class="credits mx-auto">
              <span class="copyright">
                Copyright © <script>
                  document.write(new Date().getFullYear())
                </script> LabGAMA - Todos os direitos reservados
              </span>
            </div>
          </div>
        </div>
      </footer>
    </div>
  </div>
  <!--   Core JS Files   -->
  <script src="./assets/js/core/jquery.min.js"></script>
  <script src="./assets/js/core/popper.min.js"></script>
  <script src="./assets/js/core/bootstrap.min.js"></script>
  <script src="./assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!-- Chart JS -->
  <script src="./assets/js/plugins/chartjs.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="./assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Leaflet Maps -->
  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script type="text/javascript" src="https://unpkg.com/leaflet@1.6.0/dist/leaflet.js"></script>
  <script type="text/javascript" src="./js/leafletMap1.js"></script>
  <script type="text/javascript" src="./js/leafletMap2.js"></script>
  <script type="text/javascript" src="./js/leafletMap3.js"></script>

</body>

</html>