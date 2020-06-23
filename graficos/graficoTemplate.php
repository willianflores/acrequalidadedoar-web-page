<?php

include "../php/conexao.php";

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
<!DOCTYPE html>
<html>
<head>
	<title>Gráfico Linha</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

	<!-- CDN do Chart.js -->
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.bundle.min.js"></script>
    <script type="text/javascript" src="../chartjs-plugin-annotation-master/chartjs-plugin-annotation.min.js"></script>
</head>
<body>

<div class="container" style="background-color: #F3F3F3">
<canvas id="lineChart"></canvas>
<a id="download"
        download="ChartImage.jpg" 
        href=""
        class="btn btn-primary float-right bg-flat-color-1"
        title="Descargar Gráfico">

        <!-- Download Icon -->
 <i class="fa fa-download"></i>
 </a>
</div>

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
<!-- https://expanssiva.com.br/pg/tabela-de-cores-html-hexadecimal-e-rgb -->
</body>
</html>