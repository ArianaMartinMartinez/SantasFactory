const header = document.querySelector("header");
const toggleClass = "is-sticky";

window.addEventListener("scroll", () => {
    const currentScroll = window.pageYOffset;
    if (currentScroll > 150) {
      header.classList.add(toggleClass);
    } else {
      header.classList.remove(toggleClass);
    }
  });
const goodChildrenText = document.getElementById("goodChildrenData").innerText;         
const goodChildren = parseInt(goodChildrenText.replace(/[^0-9]/g, ''), 10);

const badChildrenText = document.getElementById("badChildrenData").innerText;         
const badChildren = parseInt(badChildrenText.replace(/[^0-9]/g, ''), 10);


document.addEventListener('DOMContentLoaded', function () {
    var options1 = {
    series: [goodChildren, badChildren],
    chart: {
        width: 380,
        type: 'pie',
        },
    colors: ['#E34F30','#DB807C'],        
    labels: ['Bad Children', 'Good Children'],
    legend: {
        show: false,
        },
    responsive: [{
        breakpoint: 480,
        options: {
            chart: {
                width: 200
            }
        }
    }],
    };

const data0To3Text = document.getElementById("data0To3").innerText;         
const data0To3 = parseInt(data0To3Text.split(':')[1].trim(), 10);
const data3To7Text = document.getElementById("data3To7").innerText;         
const data3To7 = parseInt(data3To7Text.split(':')[1].trim(), 10);
const data7To12Text = document.getElementById("data7To12").innerText;         
const data7To12 = parseInt(data7To12Text.split(':')[1].trim(), 10);
const data12To16Text = document.getElementById("data12To16").innerText;         
const data12To16 = parseInt(data12To16Text.split(':')[1].trim(), 10);
const data16To18Text = document.getElementById("data16To18").innerText;         
const data16To18 = parseInt(data16To18Text.split(':')[1].trim(), 10);
const dataMore18Text = document.getElementById("dataMore18").innerText;         
const dataMore18 = parseInt(dataMore18Text.split(':')[1].trim(), 10);

    var options2 = {
    series: [data0To3, data3To7, data7To12, data12To16, data16To18,dataMore18],
    chart: {
        width: 380,
        type: 'pie',
        },
    colors: ['#025940', '#025905', '#30E373', '#7BE3A2','#77E635', '#1F742A'],
    labels: ['0-3 years', '3-7 years', '7-12 years', '12-16 years', '16-18 years', '+18 years'],
    legend: {
        show: false,
    },
    responsive: [{
        breakpoint: 480,
        options: {
            chart: {
                width: 200
            },
        }
    }]
    };

    var chart1 = new ApexCharts(document.querySelector("#chart1"), options1);
    chart1.render();
    var chart2 = new ApexCharts(document.querySelector("#chart2"), options2);
    chart2.render();
});
