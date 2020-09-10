// Load google charts
google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);

// Draw the chart and set the chart values
function drawChart() {
  var data = google.visualization.arrayToDataTable([
  ['Kategoria', 'Kwota [zł]'],
  ['Jedzenie', 134],
  ['Mieszkanie', 580],
  ['Transport', 0],
  ['Telekomunikacja', 0],
  ['Opieka zdrowotna', 0],
  ['Ubranie', 0],
  ['Higiena', 18],
  ['Dzieci', 0],
  ['Rozrywka', 0],
  ['Wycieczka', 0],
  ['Szkolenia', 0],
  ['Książki', 0],
  ['Oszczędności', 0],
  ['Na emeryturę', 0],
  ['Spłata długów', 0],
  ['Darowizna', 0],
  ['Inne', 0],
]);

  // Optional; add a title and set the width and height of the chart
  var options = {
        title:'Wydatki:',
        backgroundColor:'transparent',
        legend:'none',
        pieSliceText:'label',
        'width':'100%',
        'height':700,
        'chartArea':{'width':'80%','height':'80%'}

    };

  // Display the chart inside the <div> element with id="piechart"
  var chart = new google.visualization.PieChart(document.getElementById('piechart'));
  chart.draw(data, options);
}

$(window).resize(function(){
  drawChart();
});