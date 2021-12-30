<!DOCTYPE html>
<html lang="pt-br">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png">
  <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport" />
  <link rel="icon" type="image/png" href="./img/labgama-favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Qualidade do Ar no Acre
  </title>

  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />

  <!-- CSS Files -->
  <link href="./assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="./assets/css/paper-dashboard.css?v=2.1.0" rel="stylesheet" />

  <!-- Leaflet Maps -->
  <link rel="stylesheet" href="./leaflet/leaflet.css" />
  <link rel="stylesheet" href="./css/styleMap.css" />
</head>

<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="default" data-active-color="danger">
      <div class="logo">
        <a href="#" class="simple-text logo-normal ">
          <div class="logo-image-normal ">
            <img src="./img/aq_acre_300x200.png">
          </div>
        </a>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li>
            <a href="./index.php">
              <i class="fa fa-home" style="font-size:28px;"></i>
              <p style="font-size: 16px;">Home</p>
            </a>
          </li>
          <li>
            <a href="./graficos1.php">
              <i class="fa fa-line-chart"></i>
              <p>Gráficos Gerais</p>
            </a>
          </li>
          <li>
            <a href="./graficos2.php">
              <i class="fa fa-area-chart"></i>
              <p>Gráficos Municipais</p>
            </a>
          </li>
          <li class="active">
            <a href="./mapas.php">
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
            <a class="navbar-brand" href="javascript:;">Qualidade do Ar no Acre</a>
          </div>
        </div>
      </nav>
      <div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card ">
              <div class="card-header ">
                Número de dias com qualiade do ar acima do padrão recomendado pela OMS nos Municípios do Acre. Em 2021 os dados foram atualizados até 10/09/2021.
                <div class="tabBar">
                  <!-- Edit the labels for each tab, such as "1910" -->
                  <div id="tab1" class="tabItem selected">2019</div>
                  <div id="tab2" class="tabItem">2020</div>
                  <div id="tab3" class="tabItem">2021</div>
                </div>
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
                Total de focos de calor nos Municípios do Acre. Em 2021 os dados foram atualizados até 10/09/2021.
                <div class="tabBar2">
                  <!-- Edit the labels for each tab, such as "1910" -->
                  <div id="tab1" class="tabItem2 selected2">2019</div>
                  <div id="tab2" class="tabItem2">2020</div>
                  <div id="tab3" class="tabItem2">2021</div>
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
                Total de hectares (ha) de desmatamento nos Municípios do Acre
                <div class="tabBar3">
                  <!-- Edit the labels for each tab, such as "1910" -->
                  <div id="tab1" class="tabItem3 selected3">2019</div>
                  <div id="tab2" class="tabItem3">2020</div>
                </div>
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
  <script src="./assets/js/core/jquery.min.js" type="text/javascript"></script>
  <script src="./assets/js/core/popper.min.js" type="text/javascript"></script>
  <script src="./assets/js/core/bootstrap.min.js" type="text/javascript"></script>
  <script src="./assets/js/plugins/perfect-scrollbar.jquery.min.js" type="text/javascript"></script>

  <!--  Plugin for Sweet Alert -->
  <script src="./assets/js/plugins/sweetalert2.min.js"></script>

  <!-- Forms Validations Plugin -->
  <script src="./assets/js/plugins/jquery.validate.min.js"></script>

  <!--  Plugin for the Wizard, full documentation here: https://github.com/VinceG/twitter-bootstrap-wizard -->
  <script src="./assets/js/plugins/jquery.bootstrap-wizard.js"></script>

  <!--	Plugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select -->
  <script src="./assets/js/plugins/bootstrap-selectpicker.js" type="text/javascript"></script>

  <!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
  <script src="./assets/js/plugins/bootstrap-switch.js"></script>

  <!--  Plugin for the DateTimePicker, full documentation here: https://eonasdan.github.io/bootstrap-datetimepicker/ -->
  <script src="./assets/js/plugins/bootstrap-datetimepicker.js"></script>

  <!--  DataTables.net Plugin, full documentation here: https://datatables.net/    -->
  <script src="./assets/js/plugins/jquery.dataTables.min.js"></script>

  <!--	Plugin for Tags, full documentation here: https://github.com/bootstrap-tagsinput/bootstrap-tagsinputs  -->
  <script src="./assets/js/plugins/bootstrap-tagsinput.js"></script>

  <!-- Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
  <script src="./assets/js/plugins/jasny-bootstrap.min.js"></script>

  <!--  Full Calendar Plugin, full documentation here: https://github.com/fullcalendar/fullcalendar    -->
  <script src="./assets/js/plugins/fullcalendar.min.js"></script>

  <!-- Vector Map plugin, full documentation here: http://jvectormap.com/documentation/ -->
  <script src="./assets/js/plugins/jquery-jvectormap.js"></script>

  <!--  Plugin for the Bootstrap Table -->
  <script src="./assets/js/plugins/bootstrap-table.js"></script>

  <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
  <script src="./assets/js/plugins/nouislider.min.js" type="text/javascript"></script>

  <!-- Chart JS -->
  <script src="./assets/js/plugins/chartjs.min.js"></script>

  <!--  Notifications Plugin    -->
  <script src="./assets/js/plugins/bootstrap-notify.js"></script>

  <!-- Control Center for Paper Dashboard -->
  <script src="./assets/js/paper-dashboard.js" type="text/javascript"></script>
  
  <!-- Leaflet Maps -->
  <script src="./leaflet/leaflet.js"></script>
  <script src="http://leaflet.github.io/Leaflet.label/leaflet.label.js"></script>
  <script type="text/javascript" src="./js/leafletMap1.js"></script>
  <script type="text/javascript" src="./js/leafletMap2.js"></script>
  <script type="text/javascript" src="./js/leafletMap3.js"></script>
</body>

</html>