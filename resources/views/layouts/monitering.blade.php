<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Monitoring Dashboard</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Feather Icons -->
    <link href="https://unpkg.com/feather-icons/dist/feather.min.js">
    <!-- Custom CSS -->
    <style>
        body {
            font-size: 0.875rem;
        }

        .sidebar {
            position: fixed;
            top: 0;
            bottom: 0;
            left: 0;
            z-index: 100;
            padding: 48px 0 0;
            width: 240px;
            background-color: #343a40;
        }

        .sidebar-sticky {
            position: relative;
            top: 0;
            height: calc(100vh - 48px);
            padding-top: 0.5rem;
            overflow-x: hidden;
            overflow-y: auto;
        }

        .main-content {
            margin-left: 240px;
            padding: 20px;
        }

        .nav-link {
            color: #ffffff;
        }

        .nav-link.active {
            background-color: #007bff;
            color: #ffffff;
        }
    </style>
</head>

<body>
    <!-- Sidebar -->
    {{-- <nav id="sidebar" class="sidebar">
        <div class="sidebar-sticky">
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link active" href="#">
                        <span data-feather="activity"></span>
                        Overview
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <span data-feather="cpu"></span>
                        CPU Usage
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <span data-feather="hard-drive"></span>
                        Disk Usage
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <span data-feather="wifi"></span>
                        Network Activity
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <span data-feather="alert-triangle"></span>
                        Alerts
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <span data-feather="settings"></span>
                        Settings
                    </a>
                </li>
            </ul>
        </div>
    </nav> --}}
    @extends('sidebar')
    <!-- Main Content -->
    <div class="main-content">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Monitoring Dashboard</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="#">Profile</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Logout</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <!-- Dashboard Header -->
        <div
            class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Overview</h1>
            <div class="btn-toolbar mb-2 mb-md-0">
                <div class="btn-group me-2">
                    <button type="button" class="btn btn-sm btn-outline-secondary">Refresh</button>
                    <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
                </div>
            </div>
        </div>

        <!-- Monitoring Cards -->
        <div class="row">
            <div class="col-md-3">
                <div class="card text-white bg-primary mb-3">
                    <div class="card-header">CPU Usage</div>
                    <div class="card-body">
                        <h5 class="card-title">65%</h5>
                        <p class="card-text">Current CPU load</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card text-white bg-success mb-3">
                    <div class="card-header">Memory Usage</div>
                    <div class="card-body">
                        <h5 class="card-title">4.3 GB</h5>
                        <p class="card-text">Used memory</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card text-white bg-danger mb-3">
                    <div class="card-header">Disk Usage</div>
                    <div class="card-body">
                        <h5 class="card-title">80%</h5>
                        <p class="card-text">Disk space used</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card text-white bg-warning mb-3">
                    <div class="card-header">Network Activity</div>
                    <div class="card-body">
                        <h5 class="card-title">1.2 Mbps</h5>
                        <p class="card-text">Current traffic</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Charts Section -->
        <div class="row">
            <div class="col-md-6">
                <div class="card mb-4">
                    <div class="card-header">
                        CPU Usage Over Time
                    </div>
                    <div class="card-body">
                        <canvas id="cpuChart"></canvas>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card mb-4">
                    <div class="card-header">
                        Network Traffic
                    </div>
                    <div class="card-body">
                        <canvas id="networkChart"></canvas>
                    </div>
                </div>
            </div>
        </div>

        <!-- Logs Section -->
        <div class="row">
            <div class="col-md-12">
                <div class="card mb-4">
                    <div class="card-header">
                        System Logs
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Timestamp</th>
                                        <th>Message</th>
                                        <th>Severity</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>2024-08-31 10:23:54</td>
                                        <td>System rebooted successfully</td>
                                        <td><span class="badge bg-success">Info</span></td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>2024-08-31 11:15:42</td>
                                        <td>CPU usage spiked above 90%</td>
                                        <td><span class="badge bg-warning">Warning</span></td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>2024-08-31 12:30:22</td>
                                        <td>Network latency detected</td>
                                        <td><span class="badge bg-danger">Critical</span></td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>2024-08-31 13:45:10</td>
                                        <td>Disk space running low</td>
                                        <td><span class="badge bg-danger">Critical</span></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Bootstrap and Feather Icons JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/feather-icons"></script>
    <script>
        feather.replace();
    </script>

    <!-- Chart.js for creating charts -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        // Example of creating charts using Chart.js
        var ctx1 = document.getElementById('cpuChart').getContext('2d');
        var cpuChart = new Chart(ctx1, {
            type: 'line',
            data: {
                labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
                datasets: [{
                    label: 'CPU Usage (%)',
                    data: [65, 59, 80, 81, 56, 55, 40],
                    backgroundColor: 'rgba(0, 123, 255, 0.5)',
                    borderColor: 'rgba(0, 123, 255, 1)',
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true,
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });

        var ctx2 = document.getElementById('networkChart').getContext('2d');
        var networkChart = new Chart(ctx2, {
            type: 'bar',
            data: {
                labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
                datasets: [{
                    label: 'Network Traffic (Mbps)',
                    data: [28, 48, 40, 19, 86, 27, 90],
                    backgroundColor: 'rgba(255, 193, 7, 0.5)',
                    borderColor: 'rgba(255, 193, 7, 1)',
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true,
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>
</body>

</html>
