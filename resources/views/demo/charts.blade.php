@extends('layouts.app')

@section('title', 'Charts Demo - OTOD Web Layout UI')

@section('styles')
<style>
    .chart-container {
        position: relative;
        height: 400px;
        margin-bottom: 2rem;
    }
</style>
@endsection

@section('content')
<div class="row">
    <div class="col-12">
        <h1 class="mb-4">Charts & Graphs Demo</h1>
    </div>
</div>

<!-- Line Chart -->
<div class="row mb-4">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h5>Line Chart</h5>
            </div>
            <div class="card-body">
                <div class="chart-container">
                    <canvas id="lineChart"></canvas>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Bar Chart -->
<div class="row mb-4">
    <div class="col-md-6">
        <div class="card">
            <div class="card-header">
                <h5>Bar Chart</h5>
            </div>
            <div class="card-body">
                <div class="chart-container">
                    <canvas id="barChart"></canvas>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Pie Chart -->
    <div class="col-md-6">
        <div class="card">
            <div class="card-header">
                <h5>Pie Chart</h5>
            </div>
            <div class="card-body">
                <div class="chart-container">
                    <canvas id="pieChart"></canvas>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Doughnut Chart -->
<div class="row mb-4">
    <div class="col-md-6">
        <div class="card">
            <div class="card-header">
                <h5>Doughnut Chart</h5>
            </div>
            <div class="card-body">
                <div class="chart-container">
                    <canvas id="doughnutChart"></canvas>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Radar Chart -->
    <div class="col-md-6">
        <div class="card">
            <div class="card-header">
                <h5>Radar Chart</h5>
            </div>
            <div class="card-body">
                <div class="chart-container">
                    <canvas id="radarChart"></canvas>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- AJAX Chart -->
<div class="row mb-4">
    <div class="col-12">
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h5>AJAX Chart (Dynamic Data)</h5>
                <button class="btn btn-primary btn-sm" id="refreshChart">Refresh Data</button>
            </div>
            <div class="card-body">
                <div class="chart-container">
                    <canvas id="ajaxChart"></canvas>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script src="{{ asset('libs/chart_js/Chart.min.js') }}"></script>
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Line Chart
    const lineCtx = document.getElementById('lineChart').getContext('2d');
    const lineChart = new Chart(lineCtx, {
        type: 'line',
        data: {
            labels: ['January', 'February', 'March', 'April', 'May', 'June'],
            datasets: [{
                label: 'Sales',
                data: [12, 19, 3, 5, 2, 3],
                borderColor: 'rgb(75, 192, 192)',
                backgroundColor: 'rgba(75, 192, 192, 0.2)',
                tension: 0.1
            }, {
                label: 'Revenue',
                data: [8, 15, 7, 12, 9, 14],
                borderColor: 'rgb(255, 99, 132)',
                backgroundColor: 'rgba(255, 99, 132, 0.2)',
                tension: 0.1
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });

    // Bar Chart
    const barCtx = document.getElementById('barChart').getContext('2d');
    const barChart = new Chart(barCtx, {
        type: 'bar',
        data: {
            labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
            datasets: [{
                label: 'Dataset 1',
                data: [12, 19, 3, 5, 2, 3],
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(255, 159, 64, 0.2)'
                ],
                borderColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)',
                    'rgba(255, 159, 64, 1)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });

    // Pie Chart
    const pieCtx = document.getElementById('pieChart').getContext('2d');
    const pieChart = new Chart(pieCtx, {
        type: 'pie',
        data: {
            labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple'],
            datasets: [{
                data: [12, 19, 3, 5, 2],
                backgroundColor: [
                    'rgba(255, 99, 132, 0.8)',
                    'rgba(54, 162, 235, 0.8)',
                    'rgba(255, 206, 86, 0.8)',
                    'rgba(75, 192, 192, 0.8)',
                    'rgba(153, 102, 255, 0.8)'
                ],
                borderWidth: 2
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false
        }
    });

    // Doughnut Chart
    const doughnutCtx = document.getElementById('doughnutChart').getContext('2d');
    const doughnutChart = new Chart(doughnutCtx, {
        type: 'doughnut',
        data: {
            labels: ['Desktop', 'Mobile', 'Tablet'],
            datasets: [{
                data: [300, 150, 100],
                backgroundColor: [
                    'rgba(255, 99, 132, 0.8)',
                    'rgba(54, 162, 235, 0.8)',
                    'rgba(255, 206, 86, 0.8)'
                ],
                borderWidth: 2
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false
        }
    });

    // Radar Chart
    const radarCtx = document.getElementById('radarChart').getContext('2d');
    const radarChart = new Chart(radarCtx, {
        type: 'radar',
        data: {
            labels: ['Speed', 'Reliability', 'Comfort', 'Safety', 'Efficiency'],
            datasets: [{
                label: 'Car A',
                data: [65, 59, 90, 81, 56],
                fill: true,
                backgroundColor: 'rgba(255, 99, 132, 0.2)',
                borderColor: 'rgb(255, 99, 132)',
                pointBackgroundColor: 'rgb(255, 99, 132)',
                pointBorderColor: '#fff',
                pointHoverBackgroundColor: '#fff',
                pointHoverBorderColor: 'rgb(255, 99, 132)'
            }, {
                label: 'Car B',
                data: [28, 48, 40, 19, 96],
                fill: true,
                backgroundColor: 'rgba(54, 162, 235, 0.2)',
                borderColor: 'rgb(54, 162, 235)',
                pointBackgroundColor: 'rgb(54, 162, 235)',
                pointBorderColor: '#fff',
                pointHoverBackgroundColor: '#fff',
                pointHoverBorderColor: 'rgb(54, 162, 235)'
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            elements: {
                line: {
                    borderWidth: 3
                }
            }
        }
    });

    // AJAX Chart
    let ajaxChart;
    const ajaxCtx = document.getElementById('ajaxChart').getContext('2d');
    
    function loadAjaxChart() {
        fetch('{{ route("api.chart-data") }}')
            .then(response => response.json())
            .then(data => {
                if (ajaxChart) {
                    ajaxChart.destroy();
                }
                
                ajaxChart = new Chart(ajaxCtx, {
                    type: 'line',
                    data: {
                        labels: data.labels,
                        datasets: [{
                            label: 'Dynamic Data',
                            data: data.data,
                            borderColor: 'rgb(75, 192, 192)',
                            backgroundColor: 'rgba(75, 192, 192, 0.2)',
                            tension: 0.1
                        }]
                    },
                    options: {
                        responsive: true,
                        maintainAspectRatio: false,
                        scales: {
                            y: {
                                beginAtZero: true
                            }
                        }
                    }
                });
            })
            .catch(error => console.error('Error loading chart data:', error));
    }

    // Load initial AJAX chart
    loadAjaxChart();

    // Refresh button
    document.getElementById('refreshChart').addEventListener('click', loadAjaxChart);
});
</script>
@endsection
