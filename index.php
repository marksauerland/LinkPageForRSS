<!DOCTYPE html>
<html lang="de">
<!-- AStA Linktree V1.0
(c) 2021 Lukas Röther
-->
<title><?php
        $name = file_get_contents("./config/name.txt");
        echo $name; ?></title>
<meta name="author" content="Lukas Röther">
<meta name="description" content="Linkzugänge">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

<link rel='stylesheet' id='linktree' href='./misc/style.css' type='text/css' media='all' />
</header>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6" id="logo-box">
                <img id="logo" src="./misc/01_AStA-Logo.png">
            </div>
            <div class="col-md-6" id="logo-box">
                <h1 id="headline">
                    <?php
                    $name = file_get_contents("./config/name.txt");
                    echo $name; ?>
                </h1>
            </div>

        </div>
        <div class="row">
            <div class="col-md-12">
                <div id="info-box">
                    <?php
                    $info = file_get_contents("./config/info.txt");
                    echo $info; ?></div>
            </div>
        </div>

        <div id="links">
            <div class="d-grid gap-2">
                <?php require 'links.php'; ?>
            </div>
        </div>
    </div>
    <!-- Footer -->
    <footer class="bg-light text-center text-lg-start">
        <!-- Grid container -->
        <div class="container p-4">
            <!--Grid row-->
            <div class="row">
                <!--Grid column-->
                <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
                    <h5 class="text">Wir für Euch. AStA.</h5>
                    <p>AStA Hochschule Heilbronn<br \>
                        Max-Planck-Str. 39<br \>
                        74081 Heilbronn
                    </p>
                </div>
                <!--Grid column-->


                <!--Grid column-->
                <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                    <ul class="list-unstyled">
                        <li>
                            <a href="https://asta.hs-heilbronn.de/impressum/" class="text-dark">Impressum</a>
                        </li>
                        <li>
                            <a href="https://asta.hs-heilbronn.de/datenschutzerklarung/" class="text-dark">Datenschutz</a>
                        </li>
                        <li>
                            <a href="https://asta.hs-heilbronn.de/kontakt/" class="text-dark">Kontakt</a>
                        </li>

                    </ul>
                </div>
                <!--Grid column-->
            </div>
            <!--Grid row-->
        </div>
        <!-- Grid container -->

        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            © 2021
            <a class="text-dark" href="https://asta.hs-heilbronn.de">AStA Hochschule Heilbronn</a>
        </div>
        <!-- Copyright -->
    </footer>
    <!-- Footer -->
</body>

</html>