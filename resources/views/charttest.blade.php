<?php 
    $months = ['Jan','Feb','Mar','Apr','May','Jun','Jul'];
    $data = [30, 10, 55, 12, 20, 30, 60];
    $jsonMonths = json_encode($months);
    $jsonData = json_encode($data);
   // echo $jsonMonths;
?>

<canvas id="myChart"></canvas>

<canvas id="myBarChart"></canvas>

<canvas id="myStackedBarChart"></canvas>
<canvas id="myPieChart"></canvas>
<canvas id="myDoughnutChart"></canvas>

<script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
<script>
    var x= new  Array(6);
    var mon = JSON.parse('<?= $jsonMonths; ?>');
    var data =JSON.parse('<?= $jsonData; ?>');
    var ctx = document.getElementById('myChart').getContext('2d');
    
    var chart = new Chart(ctx, {
    // The type of chart we want to create
    type: 'line',

    // The data for our dataset
     
    data: {
        labels : mon,
       // labels: [mon[0], mon[1], mon[2], mon[3], mon[4], mon[5], mon[6]],
        datasets: [{
            label: 'Dataset',
            backgroundColor: 'rgb(255, 99, 132)',
            borderColor: 'rgb(255, 99, 132)',
            data: data
        }]
    },

    // Configuration options go here
    options: {}


});

var mon = JSON.parse('<?= $jsonMonths; ?>');
var data =JSON.parse('<?= $jsonData; ?>');
var ctx = document.getElementById('myBarChart').getContext('2d');
var myBarChart = new Chart(ctx, {
    type: 'bar',
   
    data: {
        labels : mon,
       // labels: [mon[0], mon[1], mon[2], mon[3], mon[4], mon[5], mon[6]],
        datasets: [{
            label: 'Dataset',
            backgroundColor: 'rgb(255, 99, 132)',
            borderColor: 'rgb(255, 99, 132)',
            data: data
        }]
    },
    options: {
    scales: {
        xAxes: [{
            barPercentage: 0.5,
            barThickness: 55,
            maxBarThickness: 60,
            minBarLength: 2,
            gridLines: {
                offsetGridLines: true
            }
        }]
    }
}

});

var mon = JSON.parse('<?= $jsonMonths; ?>');
var data =JSON.parse('<?= $jsonData; ?>');
var ctx = document.getElementById('myStackedBarChart').getContext('2d');
var stackedBar = new Chart(ctx, {
    type: 'bar',
    data: data,
    labels : mon,
    options: {
        scales: {
            xAxes: [{
                stacked: true
            }],
            yAxes: [{
                stacked: true
            }]
        }
    }
});

var mon = JSON.parse('<?= $jsonMonths; ?>');
var data =JSON.parse('<?= $jsonData; ?>');

var ctx = document.getElementById('myPieChart').getContext('2d');
var myPieChart = new Chart(ctx, {
    type: 'pie',
    data: {
        labels: mon,
        datasets:[{
            label: "population (millions)",
            backgroundColor: ["#3e95cd", "#8e5ea2","#3cba9f","#e8c3b9","#c45850","#FF5733","#C70039"],
            data: data
        }]
    },
    options: {
      title: {
        display: true,
        text: 'Predicted world population (millions) in 2050'
      }
    }
    
});
// And for a doughnut chart
var mon = JSON.parse('<?= $jsonMonths; ?>');
var data =JSON.parse('<?= $jsonData; ?>');
var ctx = document.getElementById('myDoughnutChart').getContext('2d');
var myDoughnutChart = new Chart(ctx, {
    type: 'doughnut',
    data: {
        labels: mon,
        datasets:[{
            label: "population (millions)",
            backgroundColor: ["#3e95cd", "#8e5ea2","#3cba9f","#e8c3b9","#c45850","#FF5733","#C70039"],
            data: data
        }]
    },
    options: {
      title: {
        display: true,
        text: 'Predicted world population (millions) in 2050'
      }
    }
    
});
</script>