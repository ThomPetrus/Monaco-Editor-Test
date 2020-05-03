<!DOCTYPE html>
<html lang="en">

<head>
    <title>Testing Monaco</title>
    <meta charset="utf-8">

    <!--My CSS-->
    <link rel="stylesheet" href="assets/css/reset.css">

    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/style.css">

    <!--BootStrap-->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>

    <!-- jQuery and Related JavaScript-->
    <script src="https://code.jquery.com/jquery-3.4.1.js"
        integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
    <script type="text/javascript">
        window.jQuery || document.write('<script src="assets/js/jquery-3.4.1.min.js"><\/script>')
    </script>

</head>

<body>

    <!-- Simple boot strap nav bar , why not -->
    <nav class="navbar navbar-expand-md navbar-light bg-light" id="nav-bar">
        <a class="navbar-brand" href="<?php echo ROOT_PATH?>">Hey Guys</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault"
            aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsExampleDefault">

            <ul class="navbar-nav mr-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">Menu</a>
                    <div class="dropdown-menu" aria-labelledby="dropdown01">
                        <a class="dropdown-item" href="<?php echo ROOT_PATH; ?>">Home</a>
                        <a class="dropdown-item" href="<?php echo ROOT_PATH; ?>editor">Editor</a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container">
        <?php Messages::display()?>
        <?php require($view); ?>
    </div>
</body>
<!--
<footer>
    <p>
        <i><small>Copyright &copy; UBC-O - May 2020</small></i>
    </p>
</footer>
-->
</html>