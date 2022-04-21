

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
        <!-- Modal -->
        <div class="modal fade alertMes" id="alertModal" tabindex="-1" aria-labelledby="alertModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-body">
                        Message here
                    </div>

                </div>
            </div>
        </div>
        <!-- Modal -->

        <input type="hidden" value="{{ $task1 }}" id="task_1" />
        <input type="hidden" value="{{ $task2 }}" id="task_2" />
        <input type="hidden" value="{{ $task3 }}" id="task_3" />
        <input type="hidden" value="{{ $task4 }}" id="task_4" />
        <div class="wrapper-page">
            <div class="container-fluid nopadding">
                <div class="row no-gutters">
                    <div class="col-md-12 ">
                        <div class="pageContent">
                            <div class="page-insid-img">

                                <div class="mainTitle text-center">
                                    <input type="hidden" value="{{ asset("audio/task.mp3") }}" id="task" />
                                    <input type="hidden" value="{{ asset("audio/truck.mp3") }}" id="truck" />
                                    <input type="hidden" value="{{ asset("audio/applause.mp3") }}" id="applause" />
                                    <div style="    position: absolute;
                                         /*background: black;*/
                                         width: 10%;
                                         height: 20%;
                                         text-align: center;" id="counter">
                                        
                                                                             <!--                                        <p style="top: 34%;
                                                                                 text-align: center;
                                                                                 position: relative;
                                                                                 margin: 0 auto;" id="counterI">Counter</p>-->
                                        <a href="{{ route('return') }}" onclick="return confirm_delete()" class="btn primary htp-fz-30">Cancel</a></div>
                                    <img id="rover_img" src="{{ asset("img/rover.gif") }}" />
                                    <!--                                    <audio id="my_audio" src="{{ asset("audio/truck.mp3") }}" loop="loop"></audio>-->

                                    <!--                                    <video loop muted autoplay id="my_audio">
                                                                            <source src="{{ asset("audio/truck.mp3") }}" type="audio/mp3">
                                                                        </video>-->
                                    <div id="success" style="display: none;">
                                        <h1 class="mb-0">Congratulations Junior Scientist!</h1>
                                        <h2>Your mission was a success!</h2>
                                        <a href="{{ route('return') }}" class="btn primary htp-fz-30"> Go Back </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>	
            </div>
        </div>


        <script src="{{ asset('js/jquery.min.js') }}"></script>
        <script src="{{ asset('js/bootstrap.min.js') }}"></script> 
        <script src="{{ asset('js/scripts.js') }}"></script>
        <script type="text/javascript">
                                            window.onload = function () {

                                                var truck = new Audio($("#truck").val());
                                                var task = new Audio($("#task").val());
                                                var applause = new Audio($("#applause").val());
                                                truck.loop = true;
                                                var task_c = 1;
                                                //setTimeout(function(){
                                                performTask();
                                                var interv = setInterval(performTask, 18000);
                                                //},1000);

                                                function performTask() {
                                                    if (task_c > 4) {
                                                        $("#rover_img").hide();
                                                        $("#counter").hide();
                                                        $("#success").show();
                                                        //alert("Congratulations, All tasks completed");
                                                        applause.play();
                                                        truck.pause();
                                                        truck.currentTime = 0;
                                                        clearInterval(interv);

                                                        //new Audio($("#applause").val()).play();
                                                    } else {

                                                        $(".modal-body").html($("#task_"+task_c).val());
                                                        $("#alertModal").modal('show');
                                                        setTimeout(function () {
                                                            $("#alertModal").modal('hide');
                                                        }, 4000);

                                                        //alert("Task# " + task_c + " Started");
                                                        //task.play();
                                                        truck.play();
                                                        task_c++;

                                                    }

                                                }
                                                function confirm_delete() {
                                                    return confirm('are you sure?');
                                                }
                                            }

        </script>
    </body>
</html>