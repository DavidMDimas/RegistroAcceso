	// LINE AND BARS CHARTS

$(function () {
  
  function generateNumber(min, max) {
    min = typeof min !== 'undefined' ? min : 1;
    max = typeof max !== 'undefined' ? max : 100;
    
    return Math.floor((Math.random() * max) + min);
  }
  
  var chart,
      datosArreglo = ['Categorie 1', 'Categorie 2'],
      serie1 = [13, 13, 46, 61, 23, 12, 24, 16, 14, 12, 12, 24, 19, 13, 11, 11, 14, 11, 11, 11, 11, 13, 22, 10, 18, 15, 24, 31, 19, 10],
      serie2 = [52, 41, 58, 63, 55, 46, 45, 41, 38, 54, 50, 39, 48, 70, 63, 60, 58, 63, 83, 89, 83, 79, 83, 100, 104, 108, 52, 46, 83, 89],
      $aapls;
  
  $(document).ready(function() {

    chart = new Highcharts.Chart({
      chart: {
        renderTo: 'importantchart',
        type: 'column',
        backgroundColor: 'transparent',
        height: 140,
        marginLeft: 3,
        marginRight: 3,
        marginBottom: 0,
        marginTop: 0
      },
      title: {
        text: 'Accesos a la biblioteca'
      },
      xAxis: {
        lineWidth: 0,
        tickWidth: 0,
        labels: { 
          enabled: false 
        },
        categories: datosArreglo
      },
      yAxis: {
        labels: { 
          enabled: false 
        },
        gridLineWidth: 0,
        title: {
          text: null,
        },
      },
      series: [{
        name: 'Promedio',
        data: serie1
      }, {
        name: 'Hombres',
        color: 'white',
        type: 'line',
        data: serie2
      }, {
        name: 'Mujeres',
        color: 'red',
        type: 'line',
        data: serie1
      }
              ],
      credits: { 
        enabled: false
      },
      legend: { 
        enabled: true 
      },
      plotOptions: {
        column: {
          borderWidth: 0,
          color: 'black',
          shadow: false
        },
        line: {
          marker: { 
            enabled: false 
          },
          lineWidth: 3
        }
      },
      tooltip: { 
        enabled: false
      }
    });
      
    setInterval(function() {
      chart.series[0].addPoint(generateNumber(), true, true);
      chart.series[1].addPoint(generateNumber(50, 150), true, true);
      chart.series[2].addPoint(generateNumber(10, 50), true, true);
    }, 1000);
    
    
  
    setInterval(function() {
      $('.info-aapl span').each(function(index, elem) {
        $(elem).animate({
          height: generateNumber(3,40 )
        });
      });

    }, 3000);
  });
  
});
