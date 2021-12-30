<!DOCTYPE html>
<html lang="pt-br">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport" />
  <link rel="icon" type="image/png" href="./img/labgama-favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Qualidade do Ar no Acre
  </title>

  <!-- Fonts and Icons -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />

  <!-- CSS Files -->
  <link href="./assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="./assets/css/paper-dashboard.css?v=2.1.0" rel="stylesheet" />

  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.6.0/dist/leaflet.css" />
  <link rel="stylesheet" href="./css/style.css" />
  <link rel="stylesheet" href="./css/academicons.min.css" />

  <script src="./assets/js/plugins/moment.js"></script>
  <script src="./assets/js/plugins/Chart.bundle.min.js"></script>
  <script type="text/javascript" src="./chartjs-plugin-annotation-master/chartjs-plugin-annotation.min.js"></script>
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
          <li class="active">
            <a href="./graficos2.php">
              <i class="fa fa-area-chart"></i>
              <p>Gráficos Municipais</p>
            </a>
          </li>
          <li>
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
        <!-- gráficos -->
        <div class="row">
          <div class="col-md-12">
            <div class="card ">
              <div class="card-header ">
                <h5 class="card-title">Concentração de material particulado nos Municípios do Acre</h5>
                <div class="card-header">
                  <select name="changeMun" wm-changeMun id="changeMun">
                    <option selected>Selecione o Município</option>
                    <option value="Acrelandia">Acrelândia</option>
                    <option value="Assis Brasil">Assis Brasil</option>
                    <option value="Brasileia">Brasiléia</option>
                    <option value="Bujari">Bujari</option>
                    <option value="Capixaba">Capixaba</option>
                    <option value="Cruzeiro do Sul">Cruzeiro do Sul</option>
                    <option value="Epitaciolandia">Epitaciolândia</option>
                    <option value="Feijo">Feijó</option>
                    <option value="Jordao">Jordão</option>
                    <option value="Mancio Lima">Mâncio Lima</option>
                    <option value="Manoel Urbano">Manoel Urbano</option>
                    <option value="Marechal Thaumaturgo">Marechal Thaumaturgo</option>
                    <option value="Placido de Castro">Plácido de Castro</option>
                    <option value="Porto Acre">Porto Acre</option>
                    <option value="Porto Walter">Porto Walter</option>
                    <option value="Rio Branco">Rio Branco</option>
                    <option value="Rodrigues Alves">Rodrigues Alves</option>
                    <option value="Santa Rosa do Purus">Santa Rosa do Purus</option>
                    <option value="Sena Madureira">Sena Madureira</option>
                    <option value="Senador Guiomard">Senador Guiomard</option>
                    <option value="Tarauaca">Tarauacá</option>
                    <option value="Xapuri">Xapuri</option>
                  </select>
                </div>
              </div>
              <div class="card-body " id="myChartContainer">
                <?php include "./graficos/grafico5.php" ?>
              </div>
              <div class="card-footer ">
                <div class="legend">
                  <i class="fa fa-minus" style="color:rgba(255,165,79,85); font-size:10px;"></i> <i class="fa fa-minus" style="color:rgba(255,165,79,85); font-size:10px;"></i> Limite de média diária da OMS
                </div>
                <hr>
                <div class="stats icon-big">
                  <a id="download1" wm-btndownload href="" class="btn btn-primary btn-fab btn-icon btn-round btn-sm" title="Salvar Gráfico">
                    <i class="fa fa-download" style="font-size:20px;color:white"></i>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="card ">
              <div class="card-header ">
                <h5 class="card-title">Concentração Material Particulado no Ar por Municípios em 2021 (média diária)</h5>
                <!-- <p class="card-category" style="text-transform:inherit;">Valores Maiores Que 15 &#181;g/m&#179</p> -->
              </div>
              <div class="card-body " id="card">
                <?php include "./graficos/grafico6.php" ?>
              </div>
              <div class="card-footer ">
                <div class="legend">
                  <i class="fa fa-circle " style="color:rgba(0,0,0)"></i> Dias com PM2,5 superior a 15 &#181;g/m&#179
                  <i class="fa fa-circle " style="color:rgba(255,48,48)"></i> Mediana
                  <i class="fa fa-circle " style="color:rgb(192,192,192)"></i> Municípios
                  <i class="fa fa-circle" style="color:rgba(255,165,79,85)"></i> Limite de média diária da OMS
                </div>
                <hr>
                <div class="stats">
                  <a id="download2" href="" class="btn btn-primary btn-fab btn-icon btn-round btn-sm" title="Salvar Gráfico">
                    <i class="fa fa-download" style="font-size:20px;color:white"></i>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h5 class="card-title">Críticidade da Qualidade do Ar em 2021</h5>
                <p class="card-category">Horas do Dia e Meses do Ano</p>
              </div>
              <div class="card-body ml-1">
                <?php include "./graficos/grafico7.php" ?>
              </div>
              <div class="card-footer">
                <div class="legend">
                  <i class="fa fa-circle " style="color:rgba(0,0,0)"></i> Dias com PM2,5 superior a 15 &#181;g/m&#179
                  <i class="fa fa-circle " style="color:rgba(255,48,48)"></i> Mediana
                  <i class="fa fa-circle " style="color:rgb(192,192,192)"></i> Municípios
                  <i class="fa fa-circle" style="color:rgba(255,165,79,85)"></i> Limite de média diária da OMS
                </div>
                <hr>
                <div class="stat">
                  <a id="download3" ref="" class="btn btn-primary btn-fab btn-icon btn-round btn-sm" title="Salvar Gráfico">
                    <i class="fa fa-download" style="font-size:20px;color:white"></i>
                  </a>
                </div>
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
  <script src="./assets/js/plugins/moment.min.js"></script>

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
  <script src="./js/chartExport1.js"></script>


  <!--  Notifications Plugin    -->
  <script src="./assets/js/plugins/bootstrap-notify.js"></script>

  <!-- Control Center for Paper Dashboard -->
  <script src="./assets/js/paper-dashboard.js" type="text/javascript"></script>
</body>

</html>