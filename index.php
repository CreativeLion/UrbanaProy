<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css"href="CSS/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="CSS/styles.css">
        <title>Urbana</title>
    </head>

    <body>
        <!--Navbar reference-->
        <?php include 'Extends/menu.php' ?>

        <header>
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
        <section>
            <div class="container">
                <div class="row pt-5 pb-5">
                    <div class="offset-lg-1 col-sm-12 col-lg-3 col-md-4 pt-lg-3 pt-md-5 d-flex justify-content-center">
                        <img src="Images/urbana-image1.png" alt="Icono Urbana">
                    </div>
                    <div class="col-sm-12 col-md-7 offset-md-1">
                        <h3 class="mt-4 mb-4">ABOUT</h3>
                        <p class="text-justify mb-4">
                            Nosotros somos los expertos, los crativos, los que incursionamos para llevar
                            nuevas sensaciones y experincias
                        </p>
                        <p class="text-justify mb-5">
                            Amamos lo que hacemos, amamos las nuevas experiencias y los nuevos retos.
                            Creamos experiencias, y a partir de ellas, somos Urbana.
                        </p>
                        <button class="btn btn-lg btn-outline-success">LEARN MORE</button>
                    </div>
                </div>
        </section>
        <section id="section2">
            <div class="container">
                <div class="row pt-5 pb-5 d-flex justify-content-center text-white">
                    <h3 class="display-4 font-weight-bold">"</h3>

                    <p class="text-center text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    <p class="mt-4">JANE GALANDRIEL</p>
                </div>
            </div>
        </section>
        <section id="section3">
            <div class="container">
                <form class="" action="index.html" method="post">
                    <div class="row pt-5 pb-5">
                        <div class="offset-lg-1 col-lg-4">
                            <h5 class="mt-4 font-weight-bold text-white">CONTACTANOS</h5>
                            <div class="form-group">
                                <input class="form-control mt-4 general-input" id="nombre" type="text" placeholder="Name">
                            </div>
                            <div class="form-group">
                                <input class="form-control general-input" id="email" type="text" placeholder="Email">
                            </div>
                            <div class="form-group">
                                <input class="form-control general-input" id="subject" type="text" placeholder="Subject">
                            </div>
                            <div class="form-group">
                                <textarea class="form-control general-input" id="massage" name="name" rows="8" cols="80" placeholder="Your Massage"></textarea>
                            </div>
                            <button class="btn btn-md btn-outline-success px-4">SUBMIT</button>
                        </div>
                        <div class="offset-1 col-lg-6">
                            <h5 class="mt-4 text-center font-weight-bold text-white">TRABAJAMOS CON LOS MEJORES</h5>
                            <img class="img-fluid mt-5" src="Images/clientes-logos.png" alt="Clientes">
                        </div>
                    </div>
                </form>
            </div>
        </section>

        <?php include 'Extends/footer.php' ?>




        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <script type="text/javascript" src="JS/animations.js"></script>
    </body>
</html>
