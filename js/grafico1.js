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
  var url_base64jp = document.getElementById("lineChart").toDataURL("image/png",1.0);
  /*get download button (tag: <a></a>) */
  var a =  document.getElementById("download");
  /*insert chart image url to download button (tag: <a></a>) */
  a.href = url_base64jp;
});