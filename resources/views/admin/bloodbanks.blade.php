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
<div class="container mt-5">
    <h1>Blood Banks</h1>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Name</th>
                <th>Address</th>
                <th>Ownership</th>
                <th>Licence Number</th>
                <th>Licence Address</th>
                <th>Validity</th>
                <th>Telephone Number</th>
                <th>Email</th>
                <th>Status</th>
                <th>Medical Officer</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($bloodBanks as $bloodBank)
                <tr>
                    <td>{{ $bloodBank->name }}</td>
                    <td>{{ $bloodBank->address }}</td>
                    <td>{{ $bloodBank->ownership }}</td>
                    <td>{{ $bloodBank->licence_number }}</td>
                    <td>{{ $bloodBank->licence_address }}</td>
                    <td>{{ $bloodBank->validity }}</td>
                    <td>{{ $bloodBank->telephone_number }}</td>
                    <td>{{ $bloodBank->email }}</td>
                    <td>{{ $bloodBank->status }}</td>
                    <td>{{ $bloodBank->medical_officer }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
