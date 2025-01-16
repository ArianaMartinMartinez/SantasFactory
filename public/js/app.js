         

var options = {
        series: [44, 55, 13, 43, 22],
        chart: {
        width: 380,
        type: 'pie',
            },
        colors: ['#025940', '#025905', '#30E373', '#7BE3A2','#77E635'],        labels: ['0-3 years', '3-7 years', '7-12 years', '12-16 years', '+18 years'],
        responsive: [{
            breakpoint: 480,
            options: {
            chart: {
                width: 200
            },
            legend: {
                position: 'bottom'
            }
            }
      }]
      };

      var chart = new ApexCharts(document.querySelector("#chart"), options);
      chart.render();
    