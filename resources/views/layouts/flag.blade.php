<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Flag Layout with Bootstrap 5</title>
  <!-- Bootstrap 5 CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    .flag-part {
      height: 150px; /* Adjust the height of each flag part as needed */
    }
    .flag-red {
      background-color: red;
    }
    .flag-white {
      background-color: white;
    }
    .flag-blue {
      background-color: blue;
    }
  </style>
</head>
<body>
    @extends('sidebar')
  <div class="container">
    <div class="row">
      <!-- Red part of the flag -->
      <div class="col-12 flag-part flag-red"></div>
      <!-- White part of the flag -->
      <div class="col-12 flag-part flag-white"></div>
      <!-- Blue part of the flag -->
      <div class="col-12 flag-part flag-blue"></div>
    </div>
  </div>

  <!-- Bootstrap 5 JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
