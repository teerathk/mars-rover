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

                                <div class="mainTitle ">
                                    <input type="hidden" value="{{ asset("audio/reverse.mp3") }}" id="rev" />
                                    <h2 class="mb-0">Your Rover is Returning to Home Base. </h2>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>	
            </div>
        </div>


        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script> 
        <script src="js/scripts.js"></script>
        <script type="text/javascript">
            window.onload = function () {
                var truck = new Audio($("#rev").val());
                truck.play();
                setTimeout(function(){
                    window.location = "/run"
                },15000);
            }
        </script>
    </body>
</html>