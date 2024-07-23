$(document).ready(() => {
    var ctx1 = document.getElementById('chart1').getContext('2d');
    var ctx2 = document.getElementById('chart2').getContext('2d');
    var ctx3 = document.getElementById('chart3').getContext('2d');

    var chart1 = new Chart(ctx1, {
        type: 'doughnut',
        data: {
            datasets: [{
                data: [85, 15],
                backgroundColor: ['', '']
            }],
            labels: ['Locations', 'Vacants']
        },
        options: {
            responsive: true,
            cutoutPercentage: 75
        }
    });

    var chart2 = new Chart(ctx2, {
        type: 'doughnut',
        data: {
            datasets: [{
                data: [60, 40],
                backgroundColor: ['rgba(0, 255, 0, 0.5)', 'rgba(255, 255, 255, 0.5)']
            }],
            labels: ['Positives', 'Negatives']
        },
        options: {
            responsive: true,
            cutoutPercentage: 75
        }
    });

    var chart3 = new Chart(ctx3, {
        type: 'doughnut',
        data: {
            datasets: [{
                data: [30, 70],
                backgroundColor: ['rgba(0, 255, 0, 0.5)', 'rgba(255, 255, 255, 0.5)']
            }],
            labels: ['Option 1', 'Option 2']
        },
        options: {
            responsive: true,
            cutoutPercentage: 75
        }
    });
});