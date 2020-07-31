<?php include 'config.php'; ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Home - Awesome link shortener name here</title>
    <meta name="description" content="Shorten your long url's.">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic">
</head>

<body>
    <nav class="navbar navbar-light navbar-expand bg-light navigation-clean">
        <div class="container"><a class="navbar-brand" href="#"><?php echo $shortenerName; ?></a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"></button>
            <div class="collapse navbar-collapse" id="navcol-1"></div>
        </div>
    </nav>
    <header class="masthead text-white text-center" style="background:url('assets/img/bg-masthead.jpg')no-repeat center center;background-size:cover;">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-xl-9 mx-auto">
                    <h1 class="mb-5">Shorten Your url</h1>
                </div>
                <div class="col-md-10 col-lg-8 col-xl-7 mx-auto">
                    <form class="" action="shortenlink.php" method="get">
                        <div class="form-row">
                         <input type="URL" name="Url" value="URL">
                         <input type="submit">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </header>
    <section class="showcase"></section>
    <footer class="footer bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 my-auto h-100 text-center text-lg-left">
                    <ul class="list-inline mb-2"></ul>
                    <p class="text-muted small mb-4 mb-lg-0">created by: Manssimba in 72 minutes</p>
                </div>
                <div class="col-lg-6 my-auto h-100 text-center text-lg-right">
                    <ul class="list-inline mb-0">
                        <li class="list-inline-item"></li>
                        <li class="list-inline-item"><a href="#"></a></li>
                        <li class="list-inline-item"><a href="#"></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>
