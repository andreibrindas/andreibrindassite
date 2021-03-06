<?php

  $weather = "";
  $error = "";
  $city = "";

  if (array_key_exists ('city', $_GET)) {

      $city = str_replace(' ', '', $_GET['city']);

      $file_headers = @get_headers("http://www.weather-forecast.com/locations/".$city."/forecasts/latest");

        if(!$file_headers || $file_headers[0] == 'HTTP/1.1 404 Not Found') {

          $exists = false;

          $error = "That city could not be found.";

        } else {

      $forecastPage = file_get_contents("http://www.weather-forecast.com/locations/".$city."/forecasts/latest");

      $pageArray = explode('3 Day Weather Forecast Summary:</b><span class="read-more-small"><span class="read-more-content"> <span class="phrase">', $forecastPage);

      if (sizeof ($pageArray) > 1) {

      $secondPageArray = explode('</span></span></span>', $pageArray[1]);

        if (sizeof ($secondPageArray) > 1) {

          $weather = $secondPageArray[0];

    } else {

      $error = "That city could not be found.";

    }

    } else {

      $error = "That city could not be found.";

    }

    }

  }

?>



<!DOCTYPE html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Weather Scraper</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">

<style type="text/css">

    html {
      background: url(background.jpg) no-repeat center center fixed;
      -webkit-background-size: cover;
      -moz-background-size: cover;
      background-size: cover;
    }

    body {
      background: none;
    }

    .container {
      text-align: center;
      margin-top: 100px;
      width: 500px;
    }

    input {
      margin: 20px;
    }

    #weather {

      margin-top: 20px;

    }



</style>
  </head>

  <body>

<div class="container">

  <h1>What's the weather?</h1>

  <form>
  <div class="form-group" >
    <label for="city">Enter the name of a city</label>
    <input type="text" class="form-control" name="city" id="city"
      aria-describedby="emailHelp" placeholder="Eg. London, New York" value="<?php

        if (array_key_exists ('city', $_GET)) {

          echo $_GET['city'];

        }

      ?>">


  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

<div id="weather">

  <?php

    if ($weather) {

        echo '<div class="alert alert-success" role="alert">'.$weather.'</div>';

    } else {

      echo '<div class="alert alert-danger" role="alert">'.$error.'</div>';

    }

   ?>

</div>


</div>


    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
  </body>
</html>
