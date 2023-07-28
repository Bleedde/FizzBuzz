<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Fizzbuzz</title>
  <link rel="stylesheet" href="style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<body class="bg-black">

  <div class="container-fluid text-center">

    <form class="row justify-content-center" method="post" action="">

      <h1 class="title text-center p-3 text-white col-4 fw-bolder">Fizz - Buzz</h1>

      <div class="container">
        <input class="" type="text" id="dato" name="dato" aria-label="cantidad que desea" placeholder="">
        <br>
        <button class="btn btn-outline-light mt-3 mb-4 px-4" type="submit">Generar</button>
      </div>

      <ul class="number-list px-5 text-white">

        <?php

          $n = $_POST['dato'];

          function Fizzbuzz($n)
          {
            if ($n <= 0) {
              return;
            }

            $fizz = "Fizz";
            $buzz = "Buzz";
            $fizzbuzz = "FizzBuzz";

            Fizzbuzz($n - 2);  // Recursividad

            if ($n % 3 == 0 && $n % 5 == 0) {
              echo "<li class='fizzbuzz fw-bolder'>$fizzbuzz</li>\n";
            } elseif ($n % 3 == 0) {
              echo "<li class='fizz fw-bolder'>$fizz</li>\n";
            } elseif ($n % 5 == 0) {
              echo "<li class='buzz fw-bolder'>$buzz</li>\n";
            } else {
              echo "<li>$n</li>\n";
            }
          }
          
          Fizzbuzz($n);

        ?>

      </ul>

    </form>

  </div>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>

</html>