// Edit the initial year and number of tabs to match your GeoJSON data and tabs in index.html
let year1 = "2019";
let tabs1 = 1;

// Edit the center point and zoom level
let map1 = L.map('map1', {
  center: [-9.21, -70.47],
  zoom: 7.4,
  scrollWheelZoom: false
});

// Edit links to your GitHub repo and data source credit
map1.attributionControl
.setPrefix('Veja <a href="https://github.com/willianflores" target="_blank">os codigos da página no GitHub</a>, criado com <a href="http://leafletjs.com" target="_blank" title="A JS library for interactive maps">Leaflet</a>; desenvolvido por <a href="https://www.facebook.com/labgamaufac/" target="_blank">LabGAMA</a>');

// Basemap layer
new L.tileLayer('http://{s}.basemaps.cartocdn.com/light_nolabels/{z}/{x}/{y}.png', {
  attribution: '&copy; <a href="http://www.openstreetmap.org/copyright" target="_blank">OpenStreetMap</a> contributors, &copy; <a href="http://cartodb.com/attributions" target="_blank">CartoDB</a>'
}).addTo(map1);

// Edit to upload GeoJSON data file from your local directory
$.getJSON("./json/acreDef.geojson", function (data) {
  geoJsonLayer1 = L.geoJson(data, {
    style: style1,
    onEachFeature: onEachFeature1
  }).addTo(map1);
});

// Edit range cutoffs and colors to match your data; see http://colorbrewer.org
// Any values not listed in the ranges below displays as the last color
function getColor1(d) {
  return d > 1000 ? '#800026' :
         d > 600  ? '#E31A1C' :
         d > 400  ? '#FC4E2A' :
         d > 200  ? '#FD8D3C' :
         d > 100  ? '#FEB24C' :
         d >= 0   ? '#FED976' :
                    'white';
}

// Edit the getColor property to match data properties in your GeoJSON file
// In this example, columns follow this pattern: index1910, index1920...
function style1(feature) {
  return {
    fillColor: getColor1(feature.properties["index" + year1]),
    weight: 1,
    opacity: 1,
    color: 'black',
    fillOpacity: 0.9
  };
}

// This highlights the polygon on hover, also for mobile
function highlightFeature1(e) {
  resetHighlight1(e);
  let layer = e.target;
  layer.setStyle({
    weight: 4,
    color: 'black',
    fillOpacity: 0.7
  });
  info1.update(layer.feature.properties);
}

// This resets the highlight after hover moves away
function resetHighlight1(e) {
  geoJsonLayer1.setStyle(style1);
  info1.update();
}

// This instructs highlight and reset functions on hover movement
function onEachFeature1(feature, layer) {
  layer.on({
    mouseover: highlightFeature1,
    mouseout: resetHighlight1,
    click: highlightFeature1
  });
}

// Creates an info box on the map
let info1 = L.control();
info1.onAdd = function (map) {
    this._div = L.DomUtil.create('div', 'info');
    this.update();
    return this._div;
};

// Edit info box labels (such as props.town) to match properties of the GeoJSON data
info1.update = function (props) {
  let ha = ' ha'
  let winName = 
  this._div.innerHTML = (props ?
    '<div class="areaName">' + props.NOME + '</div>' : '<div class="areaName faded"><small>Passe o mouse sobre<br> o município</small></div>') + '<div class="areaLabel"><div class="areaValue">Desmatamento:</div>' +(props ? '' + (checkNull1(props["index" + year1])) : '--') + ' ' + 'ha' + '</div>';
};
info1.addTo(map1);

// When a new tab is selected, this changes the year displayed
$(".tabItem").click(function() {
  $(".tabItem").removeClass("selected");
  $(this).addClass("selected");
  year1 = $(this).html();
  // year = $(this).html().split("-")[1];  /* use for school years, eg 2010-11 */
  geoJsonLayer1.setStyle(style1);
});

// Edit grades in legend to match the range cutoffs inserted above
// In this example, the last grade will appear as "2+"
let legend1 = L.control({position: 'bottomright'});
legend1.onAdd = function (map) {
  let div = L.DomUtil.create('div', 'info legend'),
    grades = [0, 100, 200, 400, 600, 1000],
    labels = [],
    from, to;
  for (let i = 0; i < grades.length; i++) {
    from = grades[i];
    to = grades[i + 1];
    // manually inserted from + 0.1 to start one step above default 0 = white color
    labels.push(
      '<i style="background:' + getColor1(from + 0.1) + '"></i> ' +
      from + (to ? '&ndash;' + to : '+'));
  }
  div.innerHTML = labels.join('<br>');
  return div;
};
legend1.addTo(map1);

// In info.update, this checks if GeoJSON data contains a null value, and if so displays "--"
function checkNull1(val) {
  if (val != null || val == "NaN") {
    return comma1(val);
  } else {
    return "--";
  }
}

// Use in info.update if GeoJSON data needs to be displayed as a percentage
function checkThePct1(a,b) {
  if (a != null && b != null) {
    return Math.round(a/b*1000)/10 + "%";
  } else {
    return "--";
  }
}

// Use in info.update if GeoJSON data needs to be displayed with commas (such as 123,456)
function comma1(val){
  while (/(\d+)(\d{3})/.test(val.toString())){
    val = val.toString().replace(/(\d+)(\d{3})/, '$1'+'.'+'$2');
  }
  return val;
}

// This watches for arrow keys to advance the tabs
$("body").keydown(function(e) {
    let selectedTab1 = parseInt($(".selected").attr('id').replace('tab', ''));
    let nextTab1;

    // previous tab with left arrow
    if (e.keyCode == 37) {
        nextTab1 = (selectedTab1 == 1) ? tabs1 : selectedTab1 - 1;
    }
    // next tab with right arrow
    else if (e.keyCode == 39)  {
        nextTab1 = (selectedTab1 == tabs1) ? 1 : selectedTab1 + 1;
    }

    $('#tab' + nextTab1).click();
});
