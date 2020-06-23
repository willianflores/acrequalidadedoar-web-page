  <canvas id="barChart" style="height: 10rem"></canvas>

  <script type="text/javascript">

    chartColor = "#FFFFFF";

      var ctx = document.getElementById('barChart').getContext('2d');

      var myBarChart = new Chart(ctx, {
      type: 'horizontalBar',
      data:{ 
          labels:[
                  'Assis Brasil',
                  'Sena Madureira',
                  'Brasiléia',
                  'Epitaciolândia',
                  'Porto Acre', 
                  'Santa Rosa do Purus',
                  'Bujari',
                  'Acrelândia',
                  'Plácido de Castro',
                  'Rio Branco',
                  'Manoel Urbano',
                  'Xapuri',
                  'Capixaba',
                  'Senador Guiomard',
                  'Feijó',
                  'Jordão',
                  'Marechal Thaumaturgo',
                  'Cruzeiro do Sul',
                  'Mâncio Lima',
                  'Tarauacá', 
                  'Porto Walter', 
                  'Rodrigues Alves',
          ],
          datasets:[{
                      label: 'Dias',
                      data:[32,32,30,28,28,26,25,24,24,24,21,21
                            ,18,16,13,11,8,3,3,3,1,0
                      ],
                      backgroundColor: 'rgba(252,122,87,.7)',
                      borderColor: 'rgba(252,122,87)',
                      borderWidth: 3
                  }]
          },
       
          options: {
                  responsive: true,
                  legend: {
                      display:false,
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
                              labelString: "Dias com PM2,5 > 25 \xB5g/m3",
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
                          display: true,
                          scaleLabel: {
                              display:true,
                              fontColor: 'black',
                              fontSize: 16

                          },
                          ticks: {
                              fontColor:'black',
                              fontSize: 14,
                              autoSkip: false,
                              maxRotation: 0,
                              minRotation: 0,
                              fontFamily: "Montserrat",

                          }

                      }]

                  }
                 
              }
                       
      });

  </script>
