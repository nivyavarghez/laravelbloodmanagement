<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<div class="container">
<div class="row justify-content-center">
        <div class="col-md-6">
            <h3 >Register</h3>  

<form action="{{ route('register.custom') }}" method="POST">
    @csrf <!-- Add CSRF protection -->

    <!-- Name -->
    <div class="form-outline mb-4">
        <input type="text" id="name" class="form-control" name="name" />
        <label class="form-label" for="name">Name</label>
    </div>

    <!-- Email -->
    <div class="form-outline mb-4">
        <input type="email" id="email" class="form-control" name="email" />
        <label class="form-label" for="email">Email</label>
    </div>

    <!-- Gender -->
    <div class="mb-4">
        <select class="form-select" name="gender">
            <option value="female">Female</option>
            <option value="male">Male</option>
            <option value="other">Other</option>
        </select>
        <label class="form-label" for="email">Gender</label>

    </div>

    <!-- Password -->
    <div class="form-outline mb-4">
        <input type="password" id="password" class="form-control" name="password" />
        <label class="form-label" for="password">Password</label>
    </div>

    <!-- Confirm Password
    <div class="form-outline mb-4">
        <input type="password" id="password_confirmation" class="form-control" name="password_confirmation" />
        <label class="form-label" for="password_confirmation">Confirm Password</label>
    </div> -->

    <button type="submit" class="btn btn-success btn-lg mb-1">Submit</button>
</form>
</div>
</div>
</div> 
</body>
</html>


