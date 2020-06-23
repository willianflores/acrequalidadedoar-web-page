<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="./assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
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
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.bundle.min.js"></script>
    <script type="text/javascript" src="./chartjs-plugin-annotation-master/chartjs-plugin-annotation.min.js"></script></head>
  <!-- heatMap js files -->
    <script src="./Chart.HeatMap/Chart.Core.js"></script>
    <script src="./Chart.HeatMap/dst/Chart.HeatMap.js"></script>

<body>


<canvas id="sampleChart" width="400" height="150"></canvas>


<script src="./Chart.HeatMap/dst/Chart.HeatMap.S.js"></script>

<script type="text/javascript">

    chartColor = "#FFFFFF";

    (function(){
      function clone(obj){
        return JSON.parse(JSON.stringify(obj));
      }

      function ctx(elementId){
        return document.getElementById(elementId).getContext('2d');
      }

      // completely arbitrary data
      var sampleData = {
        labels: ['Jan','Fev','Mar','Abr','Mai','Jun','Jul','Ago','Set','Out','Nov','Dez' ],
        datasets: [
          {
            label: '23 horas',
            data: [ 0, 0, 0, 4, 4, 3, 29, 326, 264, 22, 1, 0]
          },
          {
            label: '22 horas',
            data: [ 2, 2, 0, 7, 6, 10, 37, 333, 269, 19, 0, 0]
          },
          {
            label: '21 horas',
            data: [ 3, 2, 0, 8, 12, 19, 44, 345, 263, 21, 1, 1]
          },
          {
            label: '20 horas',
            data: [0, 1, 2, 2, 3, 4, 3, 2, 2, 3, 0, 0]
          },
          {
            label: '19 horas',
            data: [0, 0, 0, 0, 0, 0, 2, 5, 9, 6, 5, 1]
          },
          {
            label: '18 horas',
            data: [0, 3, 2, 3, 6, 3, 4, 1, 2, 4, 8, 2]
          },
          {
            label: '17 horas',
            data: [0, 3, 2, 3, 6, 3, 4, 1, 2, 4, 8, 2]
          },
          {
            label: '16 horas',
            data: [0, 3, 2, 3, 6, 3, 4, 1, 2, 4, 8, 2]
          },
          {
            label: '15 horas',
            data: [0, 3, 2, 3, 6, 3, 4, 1, 2, 4, 8, 2]
          },
          {
            label: '14 horas',
            data: [0, 3, 2, 3, 6, 3, 4, 1, 2, 4, 8, 2]
          },
          {
            label: '13 horas',
            data: [0, 3, 2, 3, 6, 3, 4, 1, 2, 4, 8, 2]
          },
          {
            label: '12 horas',
            data: [0, 3, 2, 3, 6, 3, 4, 1, 2, 4, 8, 2]
          },
          {
            label: '11 horas',
            data: [0, 3, 2, 3, 6, 3, 4, 1, 2, 4, 8, 2]
          },
          {
            label: '10 horas',
            data: [0, 3, 2, 3, 6, 3, 4, 1, 2, 4, 8, 2]
          },
          {
            label: '9 horas',
            data: [0, 3, 2, 3, 6, 3, 4, 1, 2, 4, 8, 2]
          },
          {
            label: '8 horas',
            data: [0, 3, 2, 3, 6, 3, 4, 1, 2, 4, 8, 2]
          },
          {
            label: '7 horas',
            data: [0, 3, 2, 3, 6, 3, 4, 1, 2, 4, 8, 2]
          },
          {
            label: '6 horas',
            data: [0, 3, 2, 3, 6, 3, 4, 1, 2, 4, 8, 2]
          },
          {
            label: '5 horas',
            data: [0, 3, 2, 3, 6, 3, 4, 1, 2, 4, 8, 2]
          },
          {
            label: '4 horas',
            data: [0, 3, 2, 3, 6, 3, 4, 1, 2, 4, 8, 2]
          },
          {
            label: '3 horas',
            data: [0, 3, 2, 3, 6, 3, 4, 1, 2, 4, 8, 2]
          },
          {
            label: '2 horas',
            data: [0, 3, 2, 3, 6, 3, 4, 1, 2, 4, 8, 2]
          },
          {
            label: '1 hora',
            data: [0, 3, 2, 3, 6, 3, 4, 1, 2, 4, 8, 2]
          },
          {
            label: '0 hora',
            data: [0, 3, 2, 3, 6, 3, 4, 1, 2, 4, 8, 2]
          }
        ]
      };

      var sampleChart = new Chart(ctx('sampleChart')).HeatMap(sampleData, {responsive: true});

      var colorTestColors = ['green','blue', 'red'];

      var tooltipOptionsChart = new Chart(ctx('tooltipOptionsChart'))
        .HeatMap(sampleData, {
            responsive: true,
            tooltipTemplate: "xLabel: <%= xLabel %> | yLabel: <%= yLabel %> | value: <%= value %>"
          });

      var gradientChart = new Chart(ctx('gradientChart'))
        .HeatMap(sampleData, {
          responsive: true, 
          colors: colorTestColors,
          colorInterpolation: 'gradient',
          showLabels: false
        });

      var paletteChart = new Chart(ctx('paletteChart'))
        .HeatMap(sampleData, {
          responsive: true, 
          colors: colorTestColors,
          colorInterpolation: 'palette',
          showLabels: false
        });

      var scrollChart = new Chart(ctx('scrollChart')).HeatMap(sampleData, {responsive: false});


    })();


chart.render();

//Download Chart Image
document.getElementById("download").addEventListener('click', function(){
  /*Get image of canvas element*/
  var url_base64jp = document.getElementById("barChart").toDataURL("image/jpg",1.0);
  /*get download button (tag: <a></a>) */
  var a =  document.getElementById("download");
  /*insert chart image url to download button (tag: <a></a>) */
  a.href = url_base64jp;
});

</script>

<!--   Core JS Files   -->
  <script src="./assets/js/core/jquery.min.js"></script>
  <script src="./assets/js/core/popper.min.js"></script>
  <script src="./assets/js/core/bootstrap.min.js"></script>
  <script src="./assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chart JS -->
  <script src="./assets/js/plugins/chartjs.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="./assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="./assets/js/paper-dashboard.min.js?v=2.0.1" type="text/javascript"></script><!-- Paper Dashboard DEMO methods, don't include it in your project! -->
  <script src="./assets/demo/demo.js"></script>
  
  <script>
    $(document).ready(function() {
      // Javascript method's body can be found in assets/assets-for-demo/js/demo.js
      demo.initChartsPages();
    });
  </script>

<!-- https://expanssiva.com.br/pg/tabela-de-cores-html-hexadecimal-e-rgb -->
</body>
</html>