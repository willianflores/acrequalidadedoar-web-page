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
<?php

include "php/conexao.php";

$sql1 = "select date, pm2_5
from day 
where municipio = 'media'";
$sql2 = "select pm2_5
from day 
where municipio = 'Rio Branco'";
$sql3 = "SELECT IFNULL(pm2_5,'NaN') as pm2_5
from day 
where municipio = 'Cruzeiro do Sul'";
$sql4 = "SELECT IFNULL(pm2_5,'NaN') as pm2_5
from day 
where municipio = 'Acrelandia'";
$sql5 = "SELECT IFNULL(pm2_5,'NaN') as pm2_5
from day
WHERE municipio = 'Assis Brasil';";
$sql6 = "SELECT IFNULL(pm2_5,'NaN') as pm2_5
from day 
where municipio = 'Brasileia'";
$sql7 = "SELECT IFNULL(pm2_5,'NaN') as pm2_5
from day 
where municipio = 'Bujari'";
$sql8 = "SELECT IFNULL(pm2_5,'NaN') as pm2_5
from day 
where municipio = 'Capixaba'";
$sql9 = "SELECT IFNULL(pm2_5,'NaN') as pm2_5
from day 
where municipio = 'Epitaciolandia'";
$sql10 = "SELECT IFNULL(pm2_5,'NaN') as pm2_5
from day
where municipio = 'Feijo'";
$sql11 = "SELECT IFNULL(pm2_5,'NaN') as pm2_5
from day 
where municipio = 'Jordao'";
$sql12 = "SELECT IFNULL(pm2_5,'NaN') as pm2_5
from day 
where municipio = 'Mancio Lima'";
$sql13 = "SELECT IFNULL(pm2_5,'NaN') as pm2_5
from day 
where municipio = 'Manoel Urbano'";
$sql14 = "SELECT IFNULL(pm2_5,'NaN') as pm2_5
from day 
where municipio = 'Marechal Thaumaturgo'";
$sql15 = "SELECT IFNULL(pm2_5,'NaN') as pm2_5
from day 
where municipio = 'Placido de Castro'";
$sql16 = "SELECT IFNULL(pm2_5,'NaN') as pm2_5
from day 
where municipio = 'Porto Acre'";
$sql17 = "SELECT IFNULL(pm2_5,'NaN') as pm2_5
from day 
where municipio = 'Porto Walter'";
$sql18 = "SELECT IFNULL(pm2_5,'NaN') as pm2_5
from day 
where municipio = 'Rodrigues Alves'";
$sql19 = "SELECT IFNULL(pm2_5,'NaN') as pm2_5
from day 
where municipio = 'Santa Rosa do Purus'";
$sql20 = "SELECT IFNULL(pm2_5,'NaN') as pm2_5
from day 
where municipio = 'Sena Madureira'";
$sql21 = "SELECT IFNULL(pm2_5,'NaN') as pm2_5
from day 
where municipio = 'Senador Guiomard'";
$sql22 = "SELECT IFNULL(pm2_5,'NaN') as pm2_5
from day 
where municipio = 'Tarauaca'";
$sql23 = "SELECT IFNULL(pm2_5,'NaN') as pm2_5
from day 
where municipio = 'Xapuri'";
$sql24 = "SELECT IFNULL(pm2_5,'NaN') as pm2_5
from day 
where municipio = 'up_pm2_5'";

$buscar1 = mysqli_query($conexao,$sql1);
$buscar2 = mysqli_query($conexao,$sql2);
$buscar3 = mysqli_query($conexao,$sql3);
$buscar4 = mysqli_query($conexao,$sql4);
$buscar5 = mysqli_query($conexao,$sql5);
$buscar6 = mysqli_query($conexao,$sql6);
$buscar7 = mysqli_query($conexao,$sql7);
$buscar8 = mysqli_query($conexao,$sql8);
$buscar9 = mysqli_query($conexao,$sql9);
$buscar10 = mysqli_query($conexao,$sql10);
$buscar11 = mysqli_query($conexao,$sql11);
$buscar12 = mysqli_query($conexao,$sql12);
$buscar13 = mysqli_query($conexao,$sql13);
$buscar14 = mysqli_query($conexao,$sql14);
$buscar15 = mysqli_query($conexao,$sql15);
$buscar16 = mysqli_query($conexao,$sql16);
$buscar17 = mysqli_query($conexao,$sql17);
$buscar18 = mysqli_query($conexao,$sql18);
$buscar19 = mysqli_query($conexao,$sql19);
$buscar20 = mysqli_query($conexao,$sql20);
$buscar21 = mysqli_query($conexao,$sql21);
$buscar22 = mysqli_query($conexao,$sql22);
$buscar23 = mysqli_query($conexao,$sql23);
$buscar24 = mysqli_query($conexao,$sql24);

#chart.js - Preparando valores#

$date  = '';
$media = '';
$rbr   = '';
$czs   = '';
$acl   = '';
$abr   = '';
$brl   = '';
$bjr   = '';
$cpx   = '';
$epl   = '';
$fij   = '';
$jrd   = '';
$mnl   = '';
$mur   = '';
$mth   = '';
$plc   = '';
$ptc   = '';
$ptw   = '';
$rda   = '';
$srp   = '';
$snm   = '';
$sng   = '';
$trc   = '';
$xap   = '';
$up    = '';

while ($dados1 = mysqli_fetch_array($buscar1)) {
        
     $date = $date . '"' . $dados1['date'] . '",';
     $media = $media . '"' . $dados1['pm2_5'] . '",';
   
   $date = trim($date); #tira os espaços da variável
   $media= trim($media);
  
}
while ($dados2 = mysqli_fetch_array($buscar2)) {
                
     $rbr = $rbr . '"' . $dados2['pm2_5'] . '",';

     $rbr = trim($rbr); #tira os espaços da variável
 
}
while ($dados3 = mysqli_fetch_array($buscar3)) {
                
     $czs = $czs . '"' . $dados3['pm2_5'] . '",';

     $czs = trim($czs); #tira os espaços da variável
 
}
while ($dados4 = mysqli_fetch_array($buscar4)) {
                
     $acl = $acl . '"' . $dados4['pm2_5'] . '",';

     $acl = trim($acl); #tira os espaços da variável
 
}
while ($dados5 = mysqli_fetch_array($buscar5)) {
                
     $abr = $abr . '"' . $dados5['pm2_5'] . '",';

     $abr = trim($abr); #tira os espaços da variável
 
}
while ($dados6 = mysqli_fetch_array($buscar6)) {
                
     $brl = $brl . '"' . $dados6['pm2_5'] . '",';

     $brl = trim($brl); #tira os espaços da variável
 
}
while ($dados7 = mysqli_fetch_array($buscar7)) {
                
     $bjr = $bjr . '"' . $dados7['pm2_5'] . '",';

     $bjr = trim($bjr); #tira os espaços da variável
 
}
while ($dados8 = mysqli_fetch_array($buscar8)) {
                
     $cpx = $cpx . '"' . $dados8['pm2_5'] . '",';

     $cpx = trim($cpx); #tira os espaços da variável
 
}
while ($dados9 = mysqli_fetch_array($buscar9)) {
                
     $epl = $epl . '"' . $dados9['pm2_5'] . '",';

     $epl = trim($epl); #tira os espaços da variável
 
}
while ($dados10 = mysqli_fetch_array($buscar10)) {
                
     $fij = $fij . '"' . $dados10['pm2_5'] . '",';

     $fij = trim($fij); #tira os espaços da variável
 
}
while ($dados11 = mysqli_fetch_array($buscar11)) {
                
     $jrd = $jrd . '"' . $dados11['pm2_5'] . '",';

     $jrd = trim($jrd); #tira os espaços da variável
 
}
while ($dados12 = mysqli_fetch_array($buscar12)) {
                
     $mnl = $mnl . '"' . $dados12['pm2_5'] . '",';

     $mnl = trim($mnl); #tira os espaços da variável
 
}
while ($dados13 = mysqli_fetch_array($buscar13)) {
                
     $mur = $mur . '"' . $dados13['pm2_5'] . '",';

     $mur = trim($mur); #tira os espaços da variável
 
}
while ($dados14 = mysqli_fetch_array($buscar14)) {
                
     $mth = $mth . '"' . $dados14['pm2_5'] . '",';

     $mth = trim($mth); #tira os espaços da variável
 
}
while ($dados15 = mysqli_fetch_array($buscar15)) {
                
     $plc = $plc . '"' . $dados15['pm2_5'] . '",';

     $plc = trim($plc); #tira os espaços da variável
 
}
while ($dados16 = mysqli_fetch_array($buscar16)) {
                
     $ptc = $ptc . '"' . $dados16['pm2_5'] . '",';

     $ptc = trim($ptc); #tira os espaços da variável
 
}
while ($dados17 = mysqli_fetch_array($buscar17)) {
                
     $ptw = $ptw . '"' . $dados17['pm2_5'] . '",';

     $ptw = trim($ptw); #tira os espaços da variável
 
}
while ($dados18 = mysqli_fetch_array($buscar18)) {
                
     $rda = $rda . '"' . $dados18['pm2_5'] . '",';

     $rda = trim($rda); #tira os espaços da variável
 
}
while ($dados19 = mysqli_fetch_array($buscar19)) {
                
     $srp = $srp . '"' . $dados19['pm2_5'] . '",';

     $srp = trim($srp); #tira os espaços da variável
 
}
while ($dados20 = mysqli_fetch_array($buscar20)) {
                
     $snm = $snm . '"' . $dados20['pm2_5'] . '",';

     $snm = trim($snm); #tira os espaços da variável
 
}
while ($dados21 = mysqli_fetch_array($buscar21)) {
                
     $sng = $sng . '"' . $dados21['pm2_5'] . '",';

     $sng = trim($sng); #tira os espaços da variável
 
}
while ($dados22 = mysqli_fetch_array($buscar22)) {
                
     $trc = $trc . '"' . $dados22['pm2_5'] . '",';

     $trc = trim($trc); #tira os espaços da variável
 
}
while ($dados23 = mysqli_fetch_array($buscar23)) {
                
     $xap = $xap . '"' . $dados23['pm2_5'] . '",';

     $xap = trim($xap); #tira os espaços da variável
 
}
while ($dados24 = mysqli_fetch_array($buscar24)) {
                
     $up = $up . '"' . $dados24['pm2_5'] . '",';

     $up = trim($up); #tira os espaços da variável
 
}

?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="./assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Paper Dashboard 2 by Creative Tim
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
  <!-- CSS Files -->
  <link href="./assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="./assets/css/paper-dashboard.css?v=2.0.1" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="./assets/demo/demo.css" rel="stylesheet" />
  <!-- Js file of Chart.js -->
  <script type="text/javascript">
   
    var ctx = document.getElementById('lineChart').getContext('2d');
    var myLineChart = new Chart(ctx, {
    type: 'line',
    connectNullData: false,
    data: {
            labels:[<?php echo $date; ?>],
            datasets:
            [{
                label:'Dias com PM2,5 > 25 \xB5g/m3',
                data:[<?php echo $up; ?>],
                backgroundColor: 'black',
                borderColor: 'black',
                borderWidth: 2,
                pointBackgroundColor: 'black',
                showLine: false,
                pointRadius: 2.5,
                
            },
            {
                label:'Média',
                data:[<?php echo $media; ?>],
                backgroundColor: 'transparent',
                borderColor: 'rgba(255,48,48)',
                borderWidth: 2,
                pointStyle: 'line',
                //pointBackgroundColor: 'black',
                //showLine: false,
                //pointRadius: 5
            },
            {
                label:'Municípios',
                data:[<?php echo $rbr; ?>],
                backgroundColor: 'transparent',
                borderColor: 'rgb(192,192,192)',
                borderWidth: 1.5,
                pointStyle: 'line',

            },
            {
                label:'Cruzeiro do Sul',
                data:[<?php echo $czs; ?>],
                backgroundColor: 'transparent',
                borderColor: 'rgb(192,192,192)',
                borderWidth: 1.5,

            },
            {
                label:'Acrelândia',
                data:[<?php echo $acl; ?>],
                backgroundColor: 'transparent',
                borderColor: 'rgb(192,192,192)',
                borderWidth: 1.5,

            },
            {
                label:'Assi Brasil',
                data:[<?php echo $abr; ?>],
                backgroundColor: 'transparent',
                borderColor: 'rgb(192,192,192)',
                borderWidth: 1.5,
                
            },
            {
                label:'Brasiléia',
                data:[<?php echo $brl; ?>],
                backgroundColor: 'transparent',
                borderColor: 'rgb(192,192,192)',
                borderWidth: 1.5,
               
            },
            {
                label:'Bujari',
                data:[<?php echo $bjr; ?>],
                backgroundColor: 'transparent',
                borderColor: 'rgb(192,192,192)',
                borderWidth: 1.5,
               
            },
            {
                label:'Capixaba',
                data:[<?php echo $cpx; ?>],
                backgroundColor: 'transparent',
                borderColor: 'rgb(192,192,192)',
                borderWidth: 1.5,
               
            },
            {
                label:'Epitaciolândia',
                data:[<?php echo $epl; ?>],
                backgroundColor: 'transparent',
                borderColor: 'rgb(192,192,192)',
                borderWidth: 1.5,
               
            },
            {
                label:'Feijó',
                data:[<?php echo $fij; ?>],
                backgroundColor: 'transparent',
                borderColor: 'rgb(192,192,192)',
                borderWidth: 1.5,
               
            },
            {
                label:'Jordão',
                data:[<?php echo $jrd; ?>],
                backgroundColor: 'transparent',
                borderColor: 'rgb(192,192,192)',
                borderWidth: 1.5,
               
            },
            {
                label:'Mâncio Lima',
                data:[<?php echo $mnl; ?>],
                backgroundColor: 'transparent',
                borderColor: 'rgb(192,192,192)',
                borderWidth: 1.5,
               
            },
            {
                label:'Manoel Urbano',
                data:[<?php echo $mur; ?>],
                backgroundColor: 'transparent',
                borderColor: 'rgb(192,192,192)',
                borderWidth: 1.5,
               
            },
            {
                label:'Marechal Thaumaturgo',
                data:[<?php echo $mth; ?>],
                backgroundColor: 'transparent',
                borderColor: 'rgb(192,192,192)',
                borderWidth: 1.5,
               
            },
            {
                label:'Plácido de Castro',
                data:[<?php echo $plc; ?>],
                backgroundColor: 'transparent',
                borderColor: 'rgb(192,192,192)',
                borderWidth: 1.5,
               
            },
            {
                label:'Porto Acre',
                data:[<?php echo $ptc; ?>],
                backgroundColor: 'transparent',
                borderColor: 'rgb(192,192,192)',
                borderWidth: 1.5,
               
            },
            {
                label:'Porto Walter',
                data:[<?php echo $ptw; ?>],
                backgroundColor: 'transparent',
                borderColor: 'rgb(192,192,192)',
                borderWidth: 1.5,
               
            },
            {
                label:'Rodrigues Alves',
                data:[<?php echo $rda; ?>],
                backgroundColor: 'transparent',
                borderColor: 'rgb(192,192,192)',
                borderWidth: 1.5,
               
            },
            {
                label:'Santa Rosa do Purus',
                data:[<?php echo $srp; ?>],
                backgroundColor: 'transparent',
                borderColor: 'rgb(192,192,192)',
                borderWidth: 1.5,
               
            },
            {
                label:'Sena Madureira',
                data:[<?php echo $snm; ?>],
                backgroundColor: 'transparent',
                borderColor: 'rgb(192,192,192)',
                borderWidth: 1.5,
               
            },
            {
                label:'Senador Guiomard',
                data:[<?php echo $sng; ?>],
                backgroundColor: 'transparent',
                borderColor: 'rgb(192,192,192)',
                borderWidth: 1.5,
               
            },
            {
                label:'Tarauacá',
                data:[<?php echo $trc; ?>],
                backgroundColor: 'transparent',
                borderColor: 'rgb(192,192,192)',
                borderWidth: 1.5,
               
            },
            {
                label:'Xapuri',
                data:[<?php echo $xap; ?>],
                backgroundColor: 'transparent',
                borderColor: 'rgb(192,192,192)',
                borderWidth: 1.5,
               
            }]

    },
    options: {
                responsive: true,
                legend: {
                    labels: {
                        fontColor: 'black',
                        usePointStyle: true,
                        fontSize: 16,
                        filter: function(legendItem, chartData) {
                                    if (legendItem.datasetIndex > 2 ) {
                                        return false;
                                    }
                                    return true;
                        }
                    }
                },
                elements: {
                    point:{
                        radius: 0
                    }
                },
                scales: {
                    yAxes: [{
                        display: true,
                        scaleLabel: {
                            display:true,
                            labelString: 'Média diária de MP2,5 (\xB5g/m3)',
                            fontColor: 'black',
                            fontSize: 16

                        },
                        ticks: {
                            fontColor:'black',
                            fontSize: 14

                        }
                        
                    }],

                    xAxes: [{
                        type: 'time',
                        time: {
                                unit: 'month'
                        },
                        distribution: 'series',
                        display: true,
                        scaleLabel: {
                            display:true,
                            labelString: 'Meses',
                            fontColor: 'black',
                            fontSize: 16

                        },
                        ticks: {
                            fontColor:'black',
                            fontSize: 14

                        }

                    }]

                },
                annotation: {
                    annotations: [{
                        type: 'line',
                        mode: 'horizontal',
                        scaleID: 'y-axis-0',
                        value: 25,
                        borderColor: 'rgba(255,165,79,85)',
                        borderWidth: 2,
                        borderDash: [3, 3],
                        label: {
                          enabled: true,
                          content: 'Limite máximo da OMS'
                        }
                    }]
                }
                
            }

});

//chart.render();

//Download Chart Image
document.getElementById("download").addEventListener('click', function(){
  /*Get image of canvas element*/
  var url_base64jp = document.getElementById("lineChart").toDataURL("image/jpg",1.0);
  /*get download button (tag: <a></a>) */
  var a =  document.getElementById("download");
  /*insert chart image url to download button (tag: <a></a>) */
  a.href = url_base64jp;
});

</script>


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
          <li class="active ">
            <a href="javascript:;">
              <i class="nc-icon nc-chart-bar-32"></i>
              <p>Gráficos gerais</p>
            </a>
          </li>
          <li>
            <a href="#;">
              <i class="nc-icon nc-chart-bar-32"></i>
              <p>Gráficos municipais</p>
            </a>
          </li>
          <li>
            <a href="javascript:;">
              <i class="nc-icon nc-paper"></i>
              <p>Relatórios</p>
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
      <!-- Cards -->
      <div class="content">
        <div class="row">
          <div class="col-md-12">
            <h5 class="card-title">Concentraçao de Marterial Parculado (MP2.5) nos princpais municípios do Acre</h5>
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
                      <p class="card-category text-left" style="color: white;">Rio Branco</p>
                      <p class="card-title mx-auto " style="color: white;"><?php echo round(GetZero(calculate($aq))); ?> &#181;g/m&#179<p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-footer ">
                <hr>
                <div class="stats" style="color: white;">
                  <i class="fa fa-refresh" style="color: white;"></i>
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
                      <p class="card-category text-left" style="color: white;">Cruzeiro do Sul</p>
                      <p class="card-title mx-auto " style="color: white;"><?php echo round(GetZeroCzs(calculateCzs($aqczs))); ?> &#181;g/m&#179<p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-footer ">
                <hr>
                <div class="stats" style="color: white;">
                  <i class="fa fa-refresh" style="color: white;"></i>
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
                      <p class="card-category text-left" style="color: white;">Brasiléia</p>
                      <p class="card-title mx-auto " style="color: white;"><?php echo round(GetZeroBrl(calculateBrl($aqbrl))); ?> &#181;g/m&#179<p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-footer ">
                <hr>
                <div class="stats" style="color: white;">
                  <i class="fa fa-refresh" style="color: white;"></i>
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
                      <p class="card-category text-left" style="color: white;">Assis Brasil</p>
                      <p class="card-title mx-auto " style="color: white;"><?php echo round(GetZeroAbr(calculateAbr($aqabr))); ?> &#181;g/m&#179<p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-footer ">
                <hr>
                <div class="stats" style="color: white;">
                  <i class="fa fa-refresh" style="color: white;"></i>
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
                      <p class="card-category text-left" style="color: white;">Sena Madureira</p>
                      <p class="card-title mx-auto " style="color: white;"><?php echo round(GetZeroSnm(calculateSnm($aqsnm))); ?> &#181;g/m&#179<p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-footer ">
                <hr>
                <div class="stats" style="color: white;">
                  <i class="fa fa-refresh" style="color: white;"></i>
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
                      <p class="card-category text-left" style="color: white;">Feijó</p>
                      <p class="card-title mx-auto " style="color: white;"><?php echo round(GetZeroFij(calculateFij($aqfij))); ?> &#181;g/m&#179<p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-footer ">
                <hr>
                <div class="stats" style="color: white;">
                  <i class="fa fa-refresh" style="color: white;"></i>
                  <?php echo $sensorstampfij; ?>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- End Cards -->
        <!-- Chartsjs -->
        <div class="row">
          <div class="col-md-12">
            <div class="card ">
              <div class="card-header ">
                <h5 class="card-title">Users Behavior</h5>
                <p class="card-category">24 Hours performance</p>
              </div>
              <div class="card-body ">
                <canvas id="lineChart"></canvas>
              </div>
              <div class="card-footer ">
                <hr>
                <div class="stats icon-big">
                  <a id="download" download="ChartImage.png" href="" class="btn btn-primary btn-fab btn-icon btn-round" title="Salvar Gráfico">
                    <i class="fa fa-download" style="font-size:24px;color:white"></i>
                  </a>               
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4">
            <div class="card ">
              <div class="card-header ">
                <h5 class="card-title">Email Statistics</h5>
                <p class="card-category">Last Campaign Performance</p>
              </div>
              <div class="card-body ">
                <canvas id="chartEmail"></canvas>
              </div>
              <div class="card-footer ">
                <div class="legend">
                  <i class="fa fa-circle text-primary"></i> Opened
                  <i class="fa fa-circle text-warning"></i> Read
                  <i class="fa fa-circle text-danger"></i> Deleted
                  <i class="fa fa-circle text-gray"></i> Unopened
                </div>
                <hr>
                <div class="stats">
                  <i class="fa fa-calendar"></i> Number of emails sent
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-8">
            <div class="card card-chart">
              <div class="card-header">
                <h5 class="card-title">NASDAQ: AAPL</h5>
                <p class="card-category">Line Chart with Points</p>
              </div>
              <div class="card-body">
                <canvas id="speedChart" width="400" height="100"></canvas>
              </div>
              <div class="card-footer">
                <div class="chart-legend">
                  <i class="fa fa-circle text-info"></i> Tesla Model S
                  <i class="fa fa-circle text-warning"></i> BMW 5 Series
                </div>
                <hr />
                <div class="card-stats">
                  <i class="fa fa-check"></i> Data information certified
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <footer class="footer" style="position: absolute; bottom: 0; width: -webkit-fill-available;">
        <div class="container-fluid">
          <div class="row">
            <div class="credits mx-auto">
              <span class="copyright">
                Copyright © 2020 LabGAMA / UFAC
              </span>
            </div>
          </div>
        </div>
      </footer>
    </div>
  </div>
  <!--   Core JS Files   -->
  <script src="assets/js/core/jquery.min.js"></script>
  <script src="assets/js/core/popper.min.js"></script>
  <script src="assets/js/core/bootstrap.min.js"></script>
  <script src="assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chart JS -->
  <script src="assets/js/plugins/chartjs.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="assets/js/paper-dashboard.min.js?v=2.0.1" type="text/javascript"></script><!-- Paper Dashboard DEMO methods, don't include it in your project! -->
  <script src="assets/demo/demo.js"></script>
  <script>
    $(document).ready(function() {
      // Javascript method's body can be found in assets/assets-for-demo/js/demo.js
      demo.initChartsPages();
    });
  </script>
</body>

</html>
