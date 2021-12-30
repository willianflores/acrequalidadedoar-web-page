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

  <link rel="stylesheet" href="./css/style.css" />
  <link rel="stylesheet" href="./css/academicons.min.css" />

  <script src="./assets/js/plugins/moment.js"></script>
  <script src="./assets/js/plugins/Chart.bundle.min.js"></script>
  <script type="text/javascript" src="./chartjs-plugin-annotation-master/chartjs-plugin-annotation.min.js"></script>
</head>

<body class="">
<!-- Modal -->
<!-- Modal -->
<div class="modal fade" id="aqModal" tabindex="-1" role="dialog" aria-labelledby="TituloModalCentralizado" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="TituloModalCentralizado">Aviso</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Foi aplicado aos dados contidos nesta página <a href="https://apps.who.int/iris/handle/10665/345329?locale-attribute=pt&" target="_blank">o novo padrão</a> da <a href="#" data-toggle="tooltip" data-placement="top" title="Organização Mundial da Saúde">OMS</a> para limite máximo aceitável da média de 24 horas da concentração de <a href="#" data-toggle="tooltip" data-placement="top" title="Material Particulado de até 2,5 &mu;m de diâmetro">PM2,5</a>. Ese limite diminuiu de 25 &mu;g/m<sup>3</sup>, estabelecido em 2005, para 15 &mu;g/m<sup>3</sup>. 
        Por esse motivo houve um aumento significativo no número de dias com valores de PM2,5 acima do que recomenda a OMS nos gráficos dessa página.
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Fechar</button>
      </div>
    </div>
  </div>
</div>

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
          <li class="active">
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
      <!-- Cards -->
      <div class="content">
        <div class="row">
          <div class="col-md-12">
            <h5 class="card-title">Concentraçao de Material Particulado (PM2,5) nos principais municípios do Acre</h5>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-2 col-md-6 col-sm-6">
            <?php include "php/purpleair_rbr.php" ?>
            <div class="card card-stats" style="background-color: <?php echo GetColorPm(GetZero(calculate($aq)))[0]; ?>;">
              <div class="card-body ">
                <div class="row">
                  <div class="col-md-12">
                    <div class="numbers">
                      <p class="card-category text-left" style="color: <?php echo GetColorFont(GetZero(calculate($aq)))[0]; ?>;">Rio Branco</p>
                      <p class="card-title mx-auto " style="color: <?php echo GetColorFont(GetZero(calculate($aq)))[0]; ?>;"><?php echo round(GetZero(calculate($aq))); ?> &#181;g/m&#179</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-footer ">
                <hr>
                <div class="stats" style="color: <?php echo GetColorFont(GetZero(calculate($aq)))[0]; ?>;">
                  <i class="fa fa-refresh" style="color: <?php echo GetColorFont(GetZero(calculate($aq)))[0]; ?>;"></i>
                  <?php echo $sensorstamp; ?>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-2 col-md-6 col-sm-6">
            <?php include "php/purpleair_czs.php" ?>
            <div class="card card-stats" style="background-color: <?php echo GetColorPmCzs(GetZeroCzs(calculateCzs($aqczs)))[0]; ?>;">
              <div class="card-body ">
                <div class="row">
                  <div class="col-md-12">
                    <div class="numbers">
                      <p class="card-category text-left" style="color: <?php echo GetColorFontCzs(GetZeroCzs(calculateCzs($aqczs)))[0]; ?>;">Cruzeiro do Sul</p>
                      <p class="card-title mx-auto " style="color: <?php echo GetColorFontCzs(GetZeroCzs(calculateCzs($aqczs)))[0]; ?>;"><?php echo round(GetZeroCzs(calculateCzs($aqczs))); ?> &#181;g/m&#179</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-footer ">
                <hr>
                <div class="stats" style="color: <?php echo GetColorFontCzs(GetZeroCzs(calculateCzs($aqczs)))[0]; ?>;">
                  <i class="fa fa-refresh" style="color: <?php echo GetColorFontCzs(GetZeroCzs(calculateCzs($aqczs)))[0]; ?>;"></i>
                  <?php echo $sensorstampczs; ?>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-2 col-md-6 col-sm-6">
            <?php include "php/purpleair_brl.php" ?>
            <div class="card card-stats" style="background-color: <?php echo GetColorPmBrl(GetZeroBrl(calculateBrl($aqbrl)))[0]; ?>;">
              <div class="card-body ">
                <div class="row">
                  <div class="col-md-12">
                    <div class="numbers">
                      <p class="card-category text-left" style="color: <?php echo GetColorFontBrl(GetZeroBrl(calculateBrl($aqbrl)))[0]; ?>;">Brasiléia</p>
                      <p class="card-title mx-auto " style="color: <?php echo GetColorFontBrl(GetZeroBrl(calculateBrl($aqbrl)))[0]; ?>;"><?php echo round(GetZeroBrl(calculateBrl($aqbrl))); ?> &#181;g/m&#179</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-footer ">
                <hr>
                <div class="stats" style="color: <?php echo GetColorFontBrl(GetZeroBrl(calculateBrl($aqbrl)))[0]; ?>;">
                  <i class="fa fa-refresh" style="color: <?php echo GetColorFontBrl(GetZeroBrl(calculateBrl($aqbrl)))[0]; ?>;"></i>
                  <?php echo $sensorstampbrl; ?>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-2 col-md-6 col-sm-6">
            <?php include "php/purpleair_abr.php" ?>
            <div class="card card-stats" style="background-color: <?php echo GetColorPmAbr(GetZeroAbr(calculateAbr($aqabr)))[0]; ?>;">
              <div class="card-body ">
                <div class="row">
                  <div class="col-md-12">
                    <div class="numbers">
                      <p class="card-category text-left" style="color: <?php echo GetColorFontAbr(GetZeroAbr(calculateAbr($aqabr)))[0]; ?>;">Assis Brasil</p>
                      <p class="card-title mx-auto " style="color: <?php echo GetColorFontAbr(GetZeroAbr(calculateAbr($aqabr)))[0]; ?>;"><?php echo round(GetZeroAbr(calculateAbr($aqabr))); ?> &#181;g/m&#179</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-footer ">
                <hr>
                <div class="stats" style="color: <?php echo GetColorFontAbr(GetZeroAbr(calculateAbr($aqabr)))[0]; ?>;">
                  <i class="fa fa-refresh" style="color: <?php echo GetColorFontAbr(GetZeroAbr(calculateAbr($aqabr)))[0]; ?>;"></i>
                  <?php echo $sensorstampabr; ?>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-2 col-md-6 col-sm-6">
            <?php include "php/purpleair_snm.php" ?>
            <div class="card card-stats" style="background-color: <?php echo GetColorPmSnm(GetZeroSnm(calculateSnm($aqsnm)))[0]; ?>;">
              <div class="card-body ">
                <div class="row">
                  <div class="col-md-12">
                    <div class="numbers">
                      <p class="card-category text-left" style="color: <?php echo GetColorFontSnm(GetZeroSnm(calculateSnm($aqsnm)))[0]; ?>;">Sena Madureira</p>
                      <p class="card-title mx-auto " style="color: <?php echo GetColorFontSnm(GetZeroSnm(calculateSnm($aqsnm)))[0]; ?>;"><?php echo round(GetZeroSnm(calculateSnm($aqsnm))); ?> &#181;g/m&#179</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-footer ">
                <hr>
                <div class="stats" style="color: <?php echo GetColorFontSnm(GetZeroSnm(calculateSnm($aqsnm)))[0]; ?>;">
                  <i class="fa fa-refresh" style="color: <?php echo GetColorFontSnm(GetZeroSnm(calculateSnm($aqsnm)))[0]; ?>;"></i>
                  <?php echo $sensorstampsnm; ?>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-2 col-md-6 col-sm-6">
            <?php include "php/purpleair_fij.php" ?>
            <div class="card card-stats" style="background-color: <?php echo GetColorPmFij(GetZeroFij(calculateFij($aqfij)))[0]; ?>;">
              <div class="card-body ">
                <div class="row">
                  <div class="col-md-12">
                    <div class="numbers">
                      <p class="card-category text-left" style="color: <?php echo GetColorFontFij(GetZeroFij(calculateFij($aqfij)))[0]; ?>;">Feijó</p>
                      <p class="card-title mx-auto " style="color: <?php echo GetColorFontFij(GetZeroFij(calculateFij($aqfij)))[0]; ?>;"><?php echo round(GetZeroFij(calculateFij($aqfij))); ?> &#181;g/m&#179</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-footer ">
                <hr>
                <div class="stats" style="color: <?php echo GetColorFontFij(GetZeroFij(calculateFij($aqfij)))[0]; ?>;">
                  <i class="fa fa-refresh" style="color: <?php echo GetColorFontFij(GetZeroFij(calculateFij($aqfij)))[0]; ?>;"></i>
                  <?php echo $sensorstampfij; ?>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- End Cards -->
        <!-- gráficos -->
        <div class="row">
          <div class="col-md-12">
            <div class="card style=" position: relative; height:40vh; width:80vw"">
              <div class="card-header ">
                <h5 class="card-title">Concentração de material particulado no Acre</h5>
                <p class="card-category">Série Histórica</p>
              </div>
              <div class="card-body ">
                <?php include "./graficos/grafico1.php" ?>
              </div>
              <div class="card-footer ">
                <div class="legend">
                  <i class="fa fa-circle " style="color:rgba(0,0,0)"></i> Dias com PM2,5 superior a 15 &#181;g/m&#179
                  <i class="fa fa-circle " style="color:rgba(255,48,48)"></i> Mediana
                  <i class="fa fa-circle " style="color:rgb(192,192,192)"></i> Municípios
                  <i class="fa fa-circle" style="color:rgba(255,165,79,85)"></i> Limite de média diária da OMS
                </div>
                <hr>
                <div class="stats icon-big">
                  <a id="download1" href="" class="btn btn-primary btn-fab btn-icon btn-round btn-sm" title="Salvar Gráfico">
                    <i class="fa fa-download" style="font-size:20px;color:white"></i>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-7">
            <div class="card ">
              <div class="card-header ">
                <h5 class="card-title">Concentração Material Particulado no Ar por Municípios</h5>
                <p class="card-category" style="text-transform:inherit;">Dias com Valores Maiores Que 15 &#181;g/m&#179</p>
              </div>
              <div class="card-body " id="card">
                <iframe title="" aria-label="Split bars" id="datawrapper-chart-P78sH" src="https://datawrapper.dwcdn.net/P78sH/9/" scrolling="no" frameborder="0" style="width: 0; min-width: 100% !important; border: none;" height="606"></iframe>
                <script type="text/javascript">
                  ! function() {
                    "use strict";
                    window.addEventListener("message", (function(a) {
                      if (void 0 !== a.data["datawrapper-height"])
                        for (var e in a.data["datawrapper-height"]) {
                          var t = document.getElementById("datawrapper-chart-" + e) || document.querySelector("iframe[src*='" + e + "']");
                          t && (t.style.height = a.data["datawrapper-height"][e] + "px")
                        }
                    }))
                  }();
                </script>
              </div>
            </div>
          </div>
          <div class="col-md-5">
            <div class="card">
              <div class="card-header">
                <h5 class="card-title">Críticidade da Qualidade do Ar</h5>
                <p class="card-category" style="text-transform:inherit;">Horas do Dia, Meses do Ano e n. de horas com PM2.5 > 15 &#181;g/m&#179</p>
              </div>
              <div class="card-body ml-1">
              <iframe style="width: 0; min-width: 100% !important; border: none;" height="606" frameborder="0" scrolling="no" src="//plotly.com/~willianflores/1.embed"></iframe>
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

  <!-- Trigger modal -->
  <script>$('#aqModal').modal({show: true})</script>

</body>

</html>