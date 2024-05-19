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
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('bloodbankindex') }}" method="POST">
    <div class="row gy-3 gy-md-4 overflow-hidden">

        @csrf
        <div class="row gy-3 gy-md-4">
            <div class="col-12">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" class="form-control" required>
            </div>
            <div class="col-12">
                <label for="address">Address:</label>
                <input type="text" id="address" name="address" class="form-control" required>
            </div>
            <div class="col-12">
                <label for="ownership">Ownership:</label>
                <input type="text" id="ownership" name="ownership" class="form-control" required>
            </div>
            <div class="col-12">
                <label for="licence_number">Licence Number:</label>
                <input type="text" id="licence_number" name="licence_number" class="form-control" required>
            </div>
            <div class="col-12">
                <label for="licence_address">Licence Address:</label>
                <input type="text" id="licence_address" name="licence_address" class="form-control" required>
            </div>
            <div class="col-12">
                <label for="validity">Validity:</label>
                <input type="date" id="validity" name="validity" class="form-control" required>
            </div>
            <div class="col-12">
                <label for="telephone_number">Telephone Number:</label>
                <input type="text" id="telephone_number" name="telephone_number" class="form-control" required>
            </div>
            <div class="col-12">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" class="form-control" required>
            </div>
            <div class="col-12">
                <label for="status">Status:</label>
                <input type="text" id="status" name="status" class="form-control" required>
            </div>
            <div class="col-12">
                <label for="medical_officer">Medical Officer:</label>
                <input type="text" id="medical_officer" name="medical_officer" class="form-control" required>
            </div>
            <div class="col-12">
                <button type="submit" class="btn btn-primary mt-3">Register Blood Bank</button>
            </div>
        </div>
</div>
    </form>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
