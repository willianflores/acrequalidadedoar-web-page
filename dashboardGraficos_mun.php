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
<html lang="pt-br">

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
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <!--<link href="../assets/demo/demo.css" rel="stylesheet" /> -->
    <!-- CDN do Chart.js -->  
      <!-- <script src="./js/exporting.js"></script> -->
      <!-- <script src="./assets/js/plugins/moment.js"></script> -->
      <!-- <script src="./node_modules/snapdragon/lib/utils.js"></script> -->
      <script src="./assets/js/plugins/Chart.bundle.min.js"></script>
      <link rel="stylesheet" href="./assets/js/plugins/Chart.css">
      <script type="text/javascript" src="./chartjs-plugin-annotation-master/chartjs-plugin-annotation.min.js"></script>
  
    
  </head>

  <body class="">
    <div class="wrapper ">
      <div class="sidebar" data-color="white" data-active-color="danger">
        <div class="logo">
          <a href="https://www.creative-tim.com" class="simple-text logo-mini">
            <!-- <div class="logo-image-small">
              <img src="./assets/img/logo-small.png">
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
              <a href="javascript:;">
                <i class="fa fa-home" style="font-size:28px;"></i>
                <p style="font-size: 16px;">Home</p>
              </a>
            </li>
            <li>
              <a href="dashboardGraficos.php">
                <i class="fa fa-line-chart"></i> 
                <p>Gráficos gerais</p>
              </a>
            </li>
            <li class="active ">
              <a href="dashboardGraficos_mun.php">
                <i class="fa fa-area-chart"></i>
                <p>Gráficos municipais</p>
              </a>
            </li>
            <li>
              <a href="./dashboardMaps.php">
                <i class="nc-icon nc-world-2"></i>
                <p>Mapas</p>
              </a>
            </li>
            <!--<li>
              <a href="javascript:;">
                <i class="nc-icon nc-pin-3"></i>
                <p>Third Item</p>
              </a>
            </li>-->
          </ul>
        </div>
      </div>
      <div class="main-panel">
        <!-- Navbar -->
      <div class="content">
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
              <a class="navbar-brand" href="index.php">Qualidade do Ar no Acre</a>
            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-bar navbar-kebab"></span>
              <span class="navbar-toggler-bar navbar-kebab"></span>
              <span class="navbar-toggler-bar navbar-kebab"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navigation">
              <a class="nav-link" href="http://www.acrequalidadedoar.info/">Home</a>
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
        <!-- gráficos -->
          <div class="row">
            <div class="col-md-12">
              <div class="card ">
                <div class="card-header ">
                  <h5 class="card-title">Concentração de material particulado nos Municípios do Acre</h5>
                  <div class="card-header">
                    <select name="changeMun" wm-changeMun  id="changeMun">
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
                  <h5 class="card-title">Concentração Material Particulado no Ar por Municípios em 2020 (média diária)</h5>
                  <!-- <p class="card-category" style="text-transform:inherit;">Valores Maiores Que 25 &#181;g/m&#179</p> -->
                </div>
                <div class="card-body " id="card">
                  <?php include "./graficos/grafico6.php" ?>
                </div>
                <div class="card-footer ">
                  <div class="legend">
                    <i class="fa fa-circle " style="color:rgba(0,0,0,.5"></i> Dias com PM2,5 superior a 25 &#181;g/m&#179
                    <i class="fa fa-circle " style="color:rgba(255,48,48)"></i> Média
                    <i class="fa fa-circle " style="color:rgb(192,192,192)"></i> Municípios 
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
                  <h5 class="card-title">Críticidade da Qualidade do Ar</h5>
                  <p class="card-category">Horas do Dia e Meses do Ano</p>
                </div>
                <div class="card-body ml-1">
                  <?php include "./graficos/grafico7.php" ?>
                </div>
                <div class="card-footer">
                  <div class="legend">
                      <i class="fa fa-circle " style="color:rgba(0,0,0,.5)"></i> Dias com PM2,5 superior a 25 &#181;g/m&#179
                      <i class="fa fa-circle " style="color:rgba(255,48,48)"></i> Média
                      <i class="fa fa-circle " style="color:rgb(192,192,192)"></i> Municípios 
                  </div>
                  <hr>
                  <div class="stat">
                    <a id="download3"  ref="" class="btn btn-primary btn-fab btn-icon btn-round btn-sm" title="Salvar Gráfico">
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
      <script src="./assets/js/core/jquery-3.5.1.min.js"></script>
      <script src="./assets/js/core/popper.min.js"></script>
      <script src="./assets/js/core/bootstrap.min.js"></script>
      <script src="./assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
      <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> -->
      <!-- <script src="./js/grafico7.js"></script> -->
      
    <!--  Google Maps Plugin    -->
      <!-- <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script> -->
    <!-- Chart JS -->
      <!-- <script src="../assets/js/plugins/chartjs.min.js"></script> -->
      <script src="./assets/js/chartExport.js"></script>
    <!--  Notifications Plugin    -->
      <script src="./assets/js/plugins/bootstrap-notify.js"></script>
      <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
      <!-- <script src="./assets/js/paper-dashboard.min.js?v=2.0.1" type="text/javascript"></script> Paper Dashboard DEMO methods, don't include it in your project! -->
      <!-- <script src="./assets/demo/demo.js"></script> -->
        
  </body>

</html>
