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
  <!-- Load plotly.js into the DOM -->
    <script src='https://cdn.plot.ly/plotly-latest.min.js'></script>

<body>


<div id="heatChart" width="400" height="150"></div>


<script type="text/javascript">

    chartColor = "#FFFFFF";

var xValues = ['Jan','Fev','Mar','Abr','Mai','Jun','Jul','Ago','Set','Out','Nov','Dez'];

var yValues = ['0 hora', '1 hora', '2 horas', '3 horas', '4 horas','5 horas','6 horas','7 horas','8 horas','9 horas','10 horas',
               '11 horas','12 horas','13 horas','14 horas','15 horas','16 horas','17 horas','18 horas','19 horas','20 horas','21 horas',
               '22 horas','23 horas'];

var zValues = [
    [ 0, 0, 0, 4, 4, 3, 29, 326, 264, 22, 1, 0],
    [ 2, 2, 0, 7, 6, 10, 37, 333, 269, 19, 0, 0],
    [ 3, 2, 0, 8, 12, 19, 44, 345, 263, 21, 1, 1],
    [ 3, 2, 0, 8, 12, 19, 44, 345, 263, 21, 1, 1],
    [ 3, 2, 0, 8, 12, 19, 44, 345, 263, 21, 1, 1],
    [ 3, 2, 0, 8, 12, 19, 44, 345, 263, 21, 1, 1],
    [ 3, 2, 0, 8, 12, 19, 44, 345, 263, 21, 1, 1],
    [ 3, 2, 0, 8, 12, 19, 44, 345, 263, 21, 1, 1],
    [ 3, 2, 0, 8, 12, 19, 44, 345, 263, 21, 1, 1],
    [ 3, 2, 0, 8, 12, 19, 44, 345, 263, 21, 1, 1],
    [ 3, 2, 0, 8, 12, 19, 44, 345, 263, 21, 1, 1],
    [ 3, 2, 0, 8, 12, 19, 44, 345, 263, 21, 1, 1],
    [ 3, 2, 0, 8, 12, 19, 44, 345, 263, 21, 1, 1],
    [ 3, 2, 0, 8, 12, 19, 44, 345, 263, 21, 1, 1],
    [ 3, 2, 0, 8, 12, 19, 44, 345, 263, 21, 1, 1],
    [ 3, 2, 0, 8, 12, 19, 44, 345, 263, 21, 1, 1],
    [ 3, 2, 0, 8, 12, 19, 44, 345, 263, 21, 1, 1],
    [ 3, 2, 0, 8, 12, 19, 44, 345, 263, 21, 1, 1],
    [ 3, 2, 0, 8, 12, 19, 44, 345, 263, 21, 1, 1],
    [ 3, 2, 0, 8, 12, 19, 44, 345, 263, 21, 1, 1],
    [ 3, 2, 0, 8, 12, 19, 44, 345, 263, 21, 1, 1],
    [ 3, 2, 0, 8, 12, 19, 44, 345, 263, 21, 1, 1],
    [ 3, 2, 0, 8, 12, 19, 44, 345, 263, 21, 1, 1],
    [ 3, 2, 0, 8, 12, 19, 44, 345, 263, 21, 1, 1],
];

var colorscaleValue = [
  [0, '#3D9970'],
  [1, '#001f3f']
];

var data = [{
  x: xValues,
  y: yValues,
  z: zValues,
  type: 'heatmap',
  colorscale: colorscaleValue,
  showscale: false
}];

var layout = {
  title: '',
  annotations: [],
  xaxis: {
    ticks: '',
    side: 'top'
  },
  yaxis: {
    ticks: '',
    ticksuffix: ' ',
    width: 700,
    height: 700,
    autosize: false
  }
};

for ( var i = 0; i < yValues.length; i++ ) {
  for ( var j = 0; j < xValues.length; j++ ) {
    var currentValue = zValues[i][j];
    if (currentValue != 0.0) {
      var textColor = 'white';
    }else{
      var textColor = 'black';
    }
    var result = {
      xref: 'x1',
      yref: 'y1',
      x: xValues[j],
      y: yValues[i],
      text: zValues[i][j],
      font: {
        family: 'Arial',
        size: 12,
        color: 'rgb(50, 171, 96)'
      },
      showarrow: false,
      font: {
        color: textColor
      }
    };
    layout.annotations.push(result);
  }
}

Plotly.newPlot('heatChart', data, layout);



      


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