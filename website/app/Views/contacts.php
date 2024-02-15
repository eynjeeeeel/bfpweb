<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
  <style>
  body {
    background-color: #f8f9fa;
  }

  .navbar {
    background-color: #ff6347; 
  }
  .footer{
    background-color: #e0e0e0;
  }

  .navbar-brand {
    font-size: 1.5rem;
    color: #fff; 
  }

  .navbar-nav .nav-item {
    margin-right: 10px;
  }

  .navbar-nav .nav-link {
    color: #fff;
  }

  .navbar-nav .nav-link:hover {
    color: #17a2b8;
  }

  .nav-flex-icons .nav-item {
    margin-right: 0;
  }

  .nav-flex-icons .nav-link {
    color: #fff;
    font-size: 1.5rem;
  }

  .nav-flex-icons .nav-link:hover {
    color: #17a2b8;
  }
</style>
<body>
  <!-- First Navigation Bar -->
  <nav class="navbar navbar-expand-lg navbar-dark default-color">
    <a class="navbar-brand" href="#"><strong>BFP OFFICIAL WEBSITE</strong></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Use Bootstrap grid system for alignment -->
    <div class="ml-auto row align-items-center">
        <div class="col-auto">
            <button class="btn btn-success my-2 my-sm-0">Emergency Call</button>
        </div>
        <div class="col-auto text-white">
            <span class="font-weight-bold">Ph Standard Time:</span>
            <div id="philippineTime" class="ml-2"></div>
        </div>
    </div>
</nav>

<script>
    // Function to update Philippine time
    function updatePhilippineTime() {
        const options = { timeZone: 'Asia/Manila', hour12: true, hour: 'numeric', minute: 'numeric', second: 'numeric' };
        const philippineTime = new Date().toLocaleString('en-US', options);
        document.getElementById('philippineTime').innerText = philippineTime;
    }

    // Update time initially and set interval to update every second
    updatePhilippineTime();
    setInterval(updatePhilippineTime, 1000);
</script>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#additionalNav"
      aria-controls="additionalNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
        <a href="site" class="nav-item nav-link">Home</a>
        </li>
        <li class="nav-item">
        <a href="activities" class="nav-item nav-link">Activities</a>
        </li>
        <li class="nav-item">
        <a href="achievements" class="nav-item nav-link">Achievements</a>
        </li>
        <li class="nav-item active">
        <a class="nav-link" href="#">Contact Us <span class="sr-only">(current)</span></a>
        </li>
      </ul>
    </div>
  </nav>

  <body>
    <h1> Contact Us: </h1>
    <div class=" text-center ">
<br>
<br>

<h5>Line Numbers: </h5>
<h5>City Disaster Risk Reduction Management Department (Rescue/Fire)</h5>
(043) 288-611 
(043) 2887521
<br>
<h5> Calapan City Fire Station (BFP) </h5>
(043) 288-7777

<h5>Email Address:</h5>
ofc@bfp.gov.ph (Office of the Chief BFP)
pis@bfp.gov.ph (Public Information Service)
    </div>
  </body>

  <nav class="footer footer-expand-lg footer-dark default-color">
  <footer class="footer mt-auto py-3 mt-4">
    <div class="container text-center">
        <span class="text-muted">BFP CALAPAN CITY OFFICIAL WEBSITE &copy; 2024</span>
        <p>Bureau of Fire Protection</p>
        <p>Guinobatan, Calapan City, Oriental Mindoro</p>
        <p>#ValiantFirefightersOfCalapanCity</p>
        <p>ORIENTAL MINDORO, MIMAROPA</p>
    </div>
</footer>
</nav>



<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

