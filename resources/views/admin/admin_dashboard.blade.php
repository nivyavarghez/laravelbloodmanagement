<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Admin DashBoard</a>
        <div class="collapse navbar-collapse">
            <ul>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('admin.dashboard')}}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('admin.bloodbankadd')}}">Register Blood Bank</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="{{ route('admin.bloodbanks') }}">View Blood Banks</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('admin.users') }}">Manage Users</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container mt-4">
    <div class="row">
            <div class="col-md-12">
                <h1>Welcome to the Admin Dashboard</h1>
                <p>This is a simple dashboard to manage the blood bank system.</p>
            </div>
        </div>

        <div class="row mt-4">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">Quick Links</div>
                    <div class="card-body">
                        <ul class="list-group">
                            <li class="list-group-item"><a href="{{ route('admin.bloodbankadd') }}">Register Blood Bank</a></li>
                            <li class="list-group-item"><a href="#">View Blood Banks</a></li>
                            <li class="list-group-item"><a href="#">Manage Users</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">Statistics</div>
                    <div class="card-body">
                        <p>Total Blood Banks: {{ $totalBloodBanks }}</p>
                        <p>Total Users: {{ $totalUsers }}</p>
                        <p>Pending Registrations: {{ $pendingRegistrations }}</p>
                    </div>
                </div>
            </div>
        </div>
</div>
</body>
</html>