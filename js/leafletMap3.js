// Edit the initial year and number of tabs to match your GeoJSON data and tabs in index.html
let year2 = "2019";
let tabs2 = 3;

// Edit the center point and zoom level
let map2 = L.map('map2', {
  center: [-9.21, -70.47],
  zoom: 7.4,
  scrollWheelZoom: false
});

// Edit links to your GitHub repo and data source credit
map2.attributionControl
.setPrefix('Veja <a href="https://github.com/willianflores" target="_blank">os codigos da página no GitHub</a> &#124 Criado com <a href="http://leafletjs.com" target="_blank" title="A JS library for interactive maps" target="_blank">Leaflet</a> &#124 Desenvolvido por <a href="https://www.facebook.com/labgamaufac/" target="_blank">LabGAMA</a>');

// Basemap layer
new L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
	maxZoom: 19,
	attribution: '&copy; Contribuidores <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> &#124 Fonte: <a href="https://queimadas.dgi.inpe.br/queimadas/bdqueimadas" target="_blank">INPE</a> '
}).addTo(map2);

// Edit to upload GeoJSON data file from your local directory
$.getJSON("./json/acrePix.geojson", function (data) {
  geoJsonLayer2 = L.geoJson(data, {
    style: style2,
    onEachFeature: onEachFeature2
  }).addTo(map2);
});

// Edit range cutoffs and colors to match your data; see http://colorbrewer.org
// Any values not listed in the ranges below displays as the last color
function getColor2(d) {
  return d > 8000  ? '#860111' :
         d > 4000  ? '#B41E24' :
         d > 2000  ? ' #ff4605' :
         d > 1000  ? '#ff7621' :
         d > 500   ? '#ff9818' :
         d > 200   ? '#feb504' :
         d > 100   ? '#FECB4F' :
         d > 50    ? '#FFE9B4' :
         d >= 0    ? '#FFF8E6' :
                     'white';
}

// Edit the getColor property to match data properties in your GeoJSON file
// In this example, columns follow this pattern: index1910, index1920...
function style2(feature) {
  return {
    fillColor: getColor2(feature.properties["index" + year2]),
    weight: 1,
    opacity: 1,
    color: 'black',
    fillOpacity: 0.9
  };
}

// This highlights the polygon on hover, also for mobile
function highlightFeature2(e) {
  resetHighlight2(e);
  let layer = e.target;
  layer.setStyle({
    weight: 4,
    color: 'black',
    fillOpacity: 0.7
  });
  info2.update(layer.feature.properties);
}

// This resets the highlight after hover moves away
function resetHighlight2(e) {
  geoJsonLayer2.setStyle(style2);
  info2.update();
}

// This instructs highlight and reset functions on hover movement
function onEachFeature2(feature, layer) {
  layer.on({
    mouseover: highlightFeature2,
    mouseout: resetHighlight2,
    click: highlightFeature2
  });
}

// Creates an info box on the map
let info2 = L.control();
info2.onAdd = function (map) {
    this._div = L.DomUtil.create('div', 'info');
    this.update();
    return this._div;
};

// Edit info box labels (such as props.town) to match properties of the GeoJSON data
info2.update = function (props) {
  let winName = 
  this._div.innerHTML = (props ?
    '<div class="areaName">' + props.NOME + '</div>' : '<div class="areaName faded"><small>Passe o mouse sobre<br> o município</small></div>') + '<div class="areaLabel"><div class="areaValue">Focos de calor:</div>' +(props ? '' + (checkNull2(props["index" + year2])) : '--') + '</div>';
};
info2.addTo(map2);

// When a new tab is selected, this changes the year displayed
$(".tabItem2").click(function() {
  $(".tabItem2").removeClass("selected2");
  $(this).addClass("selected2");
  year2 = $(this).html();
  // year = $(this).html().split("-")[1];  /* use for school years, eg 2010-11 */
  geoJsonLayer2.setStyle(style2);
});

// Edit grades in legend to match the range cutoffs inserted above
// In this example, the last grade will appear as "2+"
let legend2 = L.control({position: 'bottomright'});
legend2.onAdd = function (map) {
  let div = L.DomUtil.create('div', 'info legend'),
    grades = [0, 50, 100, 200, 500, 1000, 2000, 4000, 8000],
    labels = [],
    from, to;
  for (let i = 0; i < grades.length; i++) {
    from = grades[i];
    to = grades[i + 1];
    // manually inserted from + 0.1 to start one step above default 0 = white color
    labels.push(
      '<i style="background:' + getColor2(from + 0.1) + '"></i> ' +
      from + (to ? '&ndash;' + to : '+'));
  }
  div.innerHTML = labels.join('<br>');
  return div;
};
legend2.addTo(map2);

// In info.update, this checks if GeoJSON data contains a null value, and if so displays "--"
function checkNull2(val) {
  if (val != null || val == "NaN") {
    return comma2(val);
  } else {
    return "--";
  }
}

// Use in info.update if GeoJSON data needs to be displayed as a percentage
function checkThePct2(a,b) {
  if (a != null && b != null) {
    return Math.round(a/b*1000)/10 + "%";
  } else {
    return "--";
  }
}

// Use in info.update if GeoJSON data needs to be displayed with commas (such as 123,456)
function comma2(val){
  while (/(\d+)(\d{3})/.test(val.toString())){
    val = val.toString().replace(/(\d+)(\d{3})/, '$1'+'.'+'$2');
  }
  return val;
}

// This watches for arrow keys to advance the tabs
$("body").keydown(function(e) {
    let selectedTab2 = parseInt($(".selected2").attr('id').replace('tab', ''));
    let nextTab2;

    // previous tab with left arrow
    if (e.keyCode == 37) {
        nextTab2 = (selectedTab2 == 1) ? tabs2 : selectedTab2 - 1;
    }
    // next tab with right arrow
    else if (e.keyCode == 39)  {
        nextTab2 = (selectedTab2 == tabs2) ? 1 : selectedTab2 + 1;
    }

    $('#tab' + nextTab2).click();
});
