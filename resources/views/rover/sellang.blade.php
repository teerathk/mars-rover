<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>DC TV BROADCAST</title>

        <meta name="description" content="">
        <meta name="author" content="">

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

        <link href="{{ asset("css/style.css") }}" rel="stylesheet">

    </head>
    <body>
        <div class="wrapper-page">
            <div class="container-fluid nopadding">
                <div class="row no-gutters">
                    <div class="col-md-12 ">
                        <div class="pageContent">
                            <div class="page-insid-img">
                                <div class="mainTitle"><h2>Please select your language:</h2></div>
                                <div class="btn-box mb-5">
                                    <a class="btn primary wid-350" href="{{ route('howto') }}"> English </a>
                                </div>
                                <div class="btn-box">
                                    <a class="btn primary wid-350" href="{{ route('howto') }}"> Spanish </a>
                                </div>

                                <div class="videoTutorial-ex" style="display:none">
                                    <div class="videoTutorial-bx">
                                        <iframe src="https://player.vimeo.com/video/678361808?h=aea475ea27" width="100%" height="100%" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>

                                    </div>
                                    <button class="secondary float-right mt-2">Skip</button>
                                </div>
                            </div>
                        </div>
                        <footer class="footer-img">
                            <img src="img/footer-bg.png" class="img-fluid">
                        </footer>
                    </div>
                </div>	
            </div>
        </div>


        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script> 
        <script src="js/scripts.js"></script>
    </body>
</html>