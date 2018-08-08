      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Type', 'Ammount'],
          ['Pre-Production',     11],
          ['Production',      2],
          ['Finished',  2],
          ['Canceled', 2]
        ]);

        var options = {
          'width' :'auto', 
          'height' :'auto'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }