<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" type="text/css"href="CSS/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="CSS/styles.css">
        <title>Urbana</title>
    </head>

    <body>

        <header>

            <?php include 'Extends/menu.php'
		    ?>

            <div id="carousel1" class="carousel slide mt-0" data-ride="carousel">

              <div class="carousel-inner">
                <div class="carousel-item active carouselitem1">
                  <!-- <img class="d-block w-100 img-fluid" src="Images/paisaje1.jpg" alt="First slide"> -->
                </div>
                <div class="carousel-item carouselitem2">
                  <!-- <img class="d-block w-100 img-fluid" src="Images/paisaje2.jpg" alt="Second slide"> -->
                </div>
                <div class="carousel-item carouselitem3">
                  <!-- <img class="d-block w-100 img-fluid" src="Images/paisaje3.jpg" alt="Third slide"> -->
                </div>
              </div>
              <a class="carousel-control-prev" href="#carousel1" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carousel1" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
              <ol class="carousel-indicators">
                <li data-target="#carousel1" data-slide-to="0" class="active"></li>
                <li data-target="#carousel1" data-slide-to="1"></li>
                <li data-target="#carousel1" data-slide-to="2"></li>
              </ol>
            </div>

        </header>

        <a href="#"class="btn btn-outline-success btn-lg">LEARN MORE</button>


        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>
</html>
