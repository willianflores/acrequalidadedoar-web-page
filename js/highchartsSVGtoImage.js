/**
  * Highcharts exportation functions
  * @author Our Code World
  */

highchartsSVGtoImage = function(chart,callback) {
    let svg = chart.highcharts().getSVG();
    let canvas = document.createElement('canvas');
    canvas.width = chart.width();
    canvas.height = chart.height();
    let ctx = canvas.getContext('2d');

    let img = document.createElement('img');

    img.onload = function() {
        ctx.drawImage(img, 0, 0);
        callback(canvas.toDataURL('image/png'));
    };

    img.setAttribute('src', 'data:image/svg+xml;base64,' + btoa(unescape(encodeURIComponent(svg))));
};

const a = document.querySelector('[wm-exportchart]')
       a.onclick = navegarEm5s