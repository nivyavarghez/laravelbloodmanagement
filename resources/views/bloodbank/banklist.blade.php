@include('layout.header')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List of Blood Banks</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        /* Add custom styles here */
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        th, td {
            border: 1px solid #dee2e6;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f8f9fa;
            font-weight: bold;
        }

        tbody tr:nth-child(even) {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>List of Blood Banks</h1>
        <table class="table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Address</th>
                    <th>Ownership</th>
                    <th>License Number</th>
                    <th>License Address</th>
                    <th>Validity</th>
                    <th>Telephone Number</th>
                    <th>Email</th>
                    <th>Status</th>
                    <th>Medical Officer</th>
                </tr>
            </thead>
            <tbody>
                @foreach($bloodBanks as $key => $bloodbank)
                <tr>
                    <td>{{$bloodbank->name}}</td>
                    <td>{{$bloodbank->address}}</td>
                    <td>{{$bloodbank->ownership}}</td>
                    <td>{{$bloodbank->licence_number}}</td>
                    <td>{{$bloodbank->licence_address}}</td>
                    <td>{{$bloodbank->validity}}</td>
                    <td>{{$bloodbank->telephone_number}}</td>
                    <td>{{$bloodbank->email}}</td>
                    <td>{{$bloodbank->status}}</td>
                    <td>{{$bloodbank->medical_officer}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
