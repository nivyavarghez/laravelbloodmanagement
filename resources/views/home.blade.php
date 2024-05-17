
@include('layout.header')
<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>

      .row{
        display:initial !important;
      }
    </style>
</head>
<body>
        <div class="row justify-content-center"> -->
            <!-- <nav class="navbar navbar-light bg-danger">
              <div class="container">
                <form class="form-inline">
                    <button class="btn btn-outline-light" type="button">Home</button>
                    <button class="btn btn-outline-light" type="button" onclick="window.location.href='{{ route('donor.donorreg') }}'">Donor</button>
                    <button class="btn btn-outline-light" type="button" onclick="window.location.href='{{ route('bloodbank.banklist') }}'">Blood Bank</button>
                    <button class="btn btn-outline-light" type="button">Contact Us</button>
                </form>
            </nav>
        </div> -->

        <!-- Hero section -->
        <section class="hero image-fluid" style="background-image: url('{{ asset('images/Blood-Donation-1.webp') }}'); background-size: cover; background-position: inherit;">
    <div class="container-fluid h-100">
        <div class="row h-100 align-items-center">
            <div class="col-md-8 offset-md-2 text-center text-white">
                <h1 class="display-4">Welcome to our Blood Donation Portal</h1>
                <p class="lead">Help save lives by donating blood today!</p>
                <div class="mt-4">
                    <a href="{{ route('donor.donorreg') }}" class="btn btn-danger btn-lg mr-2" >Donate Blood</a>
                    <a href="#" class="btn btn-secondary btn-lg">Find a Camp</a>
                </div>
            </div>
        </div>
    </div>
</section>



        <!-- About Us section -->
       <!-- Container (About Section) -->
       <!-- About Us section -->
<!-- Container (About Section) -->
<div id="about" class="container-fluid">
  <div class="row">
    <div class="col-sm-8 d-flex flex-column">
      <div>
        <h2>About Us</h2>
        <h4>A blood donation occurs when a person voluntarily has blood drawn and used for transfusions and/or made into biopharmaceutical medications by a process called fractionation (separation of whole blood components). Donation may be of whole blood, or of specific components directly (apheresis). Blood banks often participate in the collection process as well as the procedures that follow it.</h4>
        <p>The system manages all the activities from blood collection both from camps & hospitals till the issue of blood units. It includes donor screening, blood donating, blood purification.</p>
        <p>We ensure that everything is going ok.</p>
        <br>
        <button class="btn btn-success btn-lg">Get in Touch</button>
      </div>
    </div>    
  </div>
</div>







</body>
</html>
