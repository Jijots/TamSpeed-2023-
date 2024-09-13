<!DOCTYPE html>
<html lang="en">
    <head>
    <?PHP
header('Access-Control-Allow-Origin: *');
?>
        <div class="acc_ping">
</div>


        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>TamSpeed </title>
        <!-- Bootstrap Icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic" rel="stylesheet" type="text/css" />
        <!-- SimpleLightbox plugin CSS-->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
        <!--Bootstrap Icons-->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
        <link rel = "icon" href = "TAMSpeed.png" type = "image/x-icon">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
        
    </head>

    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
            <div class="container px-4 px-lg-5">
                <img src="TAMSpeed.png" alt="" width="50" height="50" class="logo d-inline-block align-text-top" style=" color: white; "><a class="navbar-brand" href="#page-top">&nbsp;TAMSpeed</a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto my-2 my-lg-0">
                        <li class="nav-item"><a class="nav-link" href="#About">About</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead">
            <div class="container-fluid px-4 px-lg-5 h-100">
                <div class="row gx-4 gx-lg-5 h-100 align-items-center justify-content-center text-center">
                    <div class="col-lg-8 align-self-end">
                        <h1 class="text-white font-weight-bold">TAMSpeed</h1>
                        <hr class="divider" />
                    </div>
                    <div class="col-lg-8 align-self-baseline">
                        <p class="text-white-75 mb-5">Use TAMSpeed on any device to determine your internet limit</p>
                        <a class="btn btn-lg btn-primary" href="#SpeedTest">Try it now!</a>
                    </div>
                </div>
            </div>
        </header>

        
        <section class="pt-5 mt-5 pb-5 mb-5" id="About">
            <div class="container">
              <h1 class="about fw-bold" >About</h1><br>
              <p class="fw-light fs-4" style="text-indent: 50px;">TAMSpeed is a web application that measures an individual's 
                internet speed. TAMSpeed is unique because it offers users with an 
                explanation of the factors detected in the speedtest (Upload, Download, Ping Jitter) 
                and explains why they may be low and how they might improve.</p>
            </div>
        </section>

        <div class="content">
        <section class="pt-5 mt-5 pb-5 mb-5" id="SpeedTest">
            <div class="container d-flex">

                <div class="card m-0 p-0" style="min-width: 300px;">
                    <div class="card-body">

                        <div class="row mt-2 mb-5">

                            <h1 class="text-center mb-5" style="text-decoration-line: underline; color: white; font-family: verdana;"><b>TAMSpeed</b></h1>

                            <div class="col align-items-center">
                                <div class="container-fluid">
                                    <div class="card">
                                        <div class="sm card-body">
                                            <div class="container d-flex justify-content-center align-items-center">
                                                <canvas class="speedometer d-none" id="speedometer"></canvas>
                                                <div class="canvas">
                                                    <button class="start btn btn-warning btn-md rounded-circle" id="start"><span class = "startText" style="font-size: 75px;"><i class="fa-solid fa-play"></i>&nbsp;GO</span></button>
                                                </div>  
                                            </div>

                                            <div class="container d-flex justify-content-center align-items-center">
                                                <button onClick="window.location.reload();" class="btn btn-warning d-none" id="restart"> <i class="fa fa-refresh"></i> &nbsp;RESTART</button>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col d-flex align-items-center">
                                           <div class="dl container shadow rounded text-center p-4">
                                            <h2 class="btn-link text-decoration-none" data-bs-placement="bottom" data-bs-toggle="tooltip" data-bs-title="This determines how fast you can receive information on the internet"><b>Download </b></h2><br>
                                            <div class="dlspeed"><h3>0 MBPS</h3></div>
                                        </div>
                                    </div>
                                    <div class="col d-flex align-items-center">
                                       <div class="dl container shadow rounded text-center p-4">
                                            <h2 class="btn-link text-decoration-none" data-bs-placement="bottom" data-bs-toggle="tooltip" data-bs-title="This determines how fast you can send information on the internet"><b>Upload</b></h2><br>
                                            <div class="upspeed"><h3>0 MBPS</h3></div>
                                        </div>
                                    </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col d-flex align-items-center">
                                            <div class="dl container shadow rounded text-center p-4">
                                                <h2 class="btn-link text-decoration-none" data-bs-placement="bottom" data-bs-toggle="tooltip" data-bs-title="This shows the time it takes for data to travel to and from your device"><b>Ping</b></h2><br>
                                                <div class="ping"><h3>0 MS</h3></div>
                                            </div>
                                        </div>
                                        <div class="col d-flex align-items-center">
                                            <div class="dl container shadow rounded text-center p-4">
                                                <h2 class="btn-link text-decoration-none" data-bs-placement="bottom" data-bs-toggle="tooltip" data-bs-title="This shows the delay in sending or receiving data"><b>Jitter</b></h2><br>
                                                <div class="jitter"><h3>0 MS</h3></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                            </div>

                            <div class="col flex-column" style="margin-top: 13%;">

                                <div class="ping_display card rounded  shadow mb-3">
                                    <div class="card-header text-center m-0 pb-0" style="background-color: #009900;">
                                        <h6>Ping Status</h6>
                                    </div>
                                    <div class="card-body p-0" style="background-color: #ffffff;">
                                        <div id="ping_display" style="height: 100%; padding: 0;"></div>
                                    </div>
                                </div>
        
                                <div class="ping_display card rounded shadow m-0 p-0">
                                    <div class="card-header text-center m-0 pb-0 text-dark" style="background-color: #edc206;">
                                        <h6>Jitter Status</h6>
                                    </div>
                                    <div class="card-body p-0" style="background-color: #ffffff;">
                                        <div id="jitter_display" style="height: 100%; padding: 0;"></div>
                                    </div>
                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>
        </section>

        <footer class="bg-dark text-center text-white">
            <!-- Grid container -->
            <div class="container p-4 pb-0">
              <!-- Section: Social media -->
              <section class="mb-4">
                <!-- Facebook -->
                <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
                  ><i class="fab fa-facebook-f"></i
                ></a>
          
                <!-- Twitter -->
                <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
                  ><i class="fab fa-twitter"></i
                ></a>
          
                <!-- Google -->
                <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
                  ><i class="fab fa-google"></i
                ></a>
          
                <!-- Instagram -->
                <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
                  ><i class="fab fa-instagram"></i
                ></a>
          
                <!-- Linkedin -->
                <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
                  ><i class="fab fa-linkedin-in"></i
                ></a>

                
              </section>
              <!-- Section: Social media -->
            </div>
            <!-- Grid container -->
          
            <!-- Copyright -->
            <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
              © 2023 TAMSpeed | Far Eastern University | All rights reserved
            </div>
            <!-- Copyright -->
          </footer>
    </div>
      <!-- Bootstrap core JS-->
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
      <!-- SimpleLightbox plugin JS-->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.js"></script>
      <!--Plotly CDN-->
      <script src="https://cdn.plot.ly/plotly-2.20.0.min.js" charset="utf-8"></script>
      <!--ChartJs-->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/4.3.0/chart.min.js"></script>
      <script src="https://bernii.github.io/gauge.js/dist/gauge.min.js"></script>
      <!-- Core theme JS-->
      <!-- Jquery -->
      <script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>

      <script src="scripts/scripts.js"></script>
      <script src="scripts/speedtest_logic.js"></script>
      <script src="scripts/ping_logic.js"></script>
</html>
