<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blood Bank Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h2 class="mt-5 mb-4">Blood Bank Registration Form</h2>
        <form action="" method="POST">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Name:</label>
                <input type="text" class="form-control" id="name" name="name">
            </div>
            <div class="mb-3">
                <label for="address" class="form-label">Address:</label>
                <input type="text" class="form-control" id="address" name="address">
            </div>
            <div class="mb-3">
                <label for="ownership" class="form-label">Ownership:</label>
                <select class="form-select" id="ownership" name="ownership">
                    <option value="">Select Ownership</option>
                    <option value="public">Public</option>
                    <option value="private">Private</option>
                    <option value="government">Government</option>
                    <!-- Add more options as needed -->
                </select>
            </div>

            <div class="mb-3">
                <label for="licence_number" class="form-label">License Number:</label>
                <input type="text" class="form-control" id="licence_number" name="licence_number">
            </div>
            <div class="mb-3">
                <label for="licence_address" class="form-label">License Address:</label>
                <input type="text" class="form-control" id="licence_address" name="licence_address">
            </div>
            <div class="mb-3">
                <label for="validity" class="form-label">Validity:</label>
                <input type="date" class="form-control" id="validity" name="validity">
            </div>
            <div class="mb-3">
                <label for="telephone_number" class="form-label">Telephone Number:</label>
                <input type="text" class="form-control" id="telephone_number" name="telephone_number">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email:</label>
                <input type="email" class="form-control" id="email" name="email">
            </div>
            <div class="mb-3">
                <label for="status" class="form-label">Status:</label>
                <select class="form-select" id="status" name="status">
                    <option value="">Select Status</option>
                    <option value="active">Active</option>
                    <option value="inactive">Inactive</option>
                    <option value="under_maintenance">Under Maintenance</option>
                    <!-- Add more options as needed -->
                </select>
            </div>

            <div class="mb-3">
                <label for="medical_officer" class="form-label">Medical Officer:</label>
                <input type="text" class="form-control" id="medical_officer" name="medical_officer">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>
</html>
