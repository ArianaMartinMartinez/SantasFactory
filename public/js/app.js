         
document.addEventListener('DOMContentLoaded', function () {
      var options1 = {
        series: [44, 55],
        chart: {
        width: 380,
        type: 'pie',
            },
        colors: ['#E34F30','#DB807C'],        
        labels: ['Bad Children', 'Good Children'],
        legend: {
          position: 'bottom', 
          show: true,
        },
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
      }],
      };
      var options2 = {
        series: [23, 55, 13, 43, 22],
        chart: {
        width: 380,
        type: 'pie',
            },
        colors: ['#025940', '#025905', '#30E373', '#7BE3A2','#77E635'],
        labels: ['0-3 years', '3-7 years', '7-12 years', '12-16 years', '+18 years'],
        legend: {
          position: 'bottom', 
          show: true,
        },
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

    var chart1 = new ApexCharts(document.querySelector("#chart1"), options1);
    chart1.render();
    var chart2 = new ApexCharts(document.querySelector("#chart2"), options2);
    chart2.render();
    });