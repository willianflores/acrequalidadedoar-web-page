
$('document').ready(function () {

    $.ajax({
        type: "POST",
        url: "./php/sqlQuery1.php",
        dataType: "json",
        success: function (data) {

            // for (var i in data) {
            //     console.log(data[i].vendas)
            // }
            var label = [];

            var media = [];

            for (var i = 0; i < data.length; i++) {

                label.push(data[i].data);
                media.push(data[i].media);
                
            }

            grafico(label,media);

        }
    });

})

function grafico(label,media) {

    var ctx = document.getElementById('lineChart3').getContext('2d');
    var myLineChart3 = new Chart(ctx, {
    type: 'line',
    connectNullData: false,
    data: {
            labels:label,
            datasets:
            [
            {
                label:'Média',
                data:media,
                backgroundColor: 'transparent',
                borderColor: 'rgba(255,48,48)',
                borderWidth: 2,
                pointStyle: 'line',
                //pointBackgroundColor: 'black',
                //showLine: false,
                //pointRadius: 5
            }]

    },
    options: {
                responsive: true,
                legend: {
                    display:false,
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
                            labelString: "Média diária de MP2,5 (\xB5g/m3)",
                            fontColor: 'black',
                            fontSize: 16,
                            fontFamily: "Montserrat",

                        },
                        ticks: {
                            fontColor:'black',
                            fontSize: 14,
                            fontFamily: "Montserrat",

                        }
                        
                    }],

                    xAxes: [{
                        type: 'time',
                        time: {
                                tooltipFormat: 'DD/MM/YYYY',
                                displayFormats: {
                                            quarter: 'D M YYYY'
                                },
                                unit: 'month'
                        },
                        distribution: 'linear',
                        display: true,
                        scaleLabel: {
                            display:true,
                            labelString: 'Meses',
                            fontColor: 'black',
                            fontSize: 16,
                            fontFamily: "Montserrat",

                        },
                        ticks: {
                            fontColor:'black',
                            fontSize: 14,
                            fontFamily: "Montserrat",

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
}    

