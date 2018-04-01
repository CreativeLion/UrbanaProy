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

            <?php include 'Extends/menu.php' ?>

            <!-- carousel elements -->
            <div id="carousel1" class="carousel slide mt-0" data-ride="carousel">

                <div class="carousel-inner">
                    <div class="carousel-item active carouselitem1"></div>
                    <div class="carousel-item carouselitem2"></div>
                    <div class="carousel-item carouselitem3"></div>
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

        <!--about section-->
        <section id="about">
            <div class="container">
                <div class="row">
                    <div class="col-md-1"></div>
                    <div class="col-md-3 "><img class="img-fluid" id="img1" src="Images/urbana-image1.png" alt="imagen1"></div>
                    <div class="col-md-1"></div>
                    <div class="col-md-7">
                        <h3 class="mt-4">ABOUT</h3>
                        <p class="mt-2 text-justify">
                            Nosotros somos los expertos, los crativos, los que incursionamos para llevar
                            nuevas sensaciones y experincias
                        </p>
                        <p>
                            Amamos lo que hacemos, amamos las nuevas experiencias y los nuevos retos.
                            Creamos experiencias, y a partir de ellas, somos Urbana.
                        </p>
                        <button id="custom-btn-about" name="button">LEARN MORE</button>
                    </div>
                </div>
        </section>

        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>
</html>
