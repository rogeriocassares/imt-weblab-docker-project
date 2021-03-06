


<!DOCTYPE html>
<html lang="en">
<head>

    <!-- CSS LINKS -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <!-- CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.10/css/mdb.min.css" rel="stylesheet">
    <link rel="stylesheet" href="vendor/fortawesome/font-awesome/css/all.css">
    <link rel="stylesheet" href="lib/perfect-scrollbar-master/css/perfect-scrollbar.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/roundSlider/1.3.3/roundslider.min.css">
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@8.18.4/dist/sweetalert2.min.css">

    <link rel="stylesheet" href="frontend/assets/css/main.css">
    <title>Document</title>
</head>
<body class="body body-original">
	<div class="d-flex" id="wrapper">

        <!-- INICIO SIDEBAR -->
        <!-- sidebar -->
		<div class="sidebar sidebar-original">
			<!-- sidebar menu -->
			<div class="sidebar-menu">
				<!-- menu -->
				<ul class="list list-unstyled list-scrollbar">

					<!-- multi-level dropdown menu -->
					<li class="list-item list-text">
						<p class="list-title text-uppercase">WEBLAB 2019</p>
						<ul class="list-unstyled pt-4">
							<li><a href="index-teste.html" class="list-link "><span class="list-icon"><i class="fa fa-user-tie" aria-hidden="true"></i></span>Minha Conta</a></li>
							<li><a href="#" class="list-link link-arrow"><span class="list-icon"><i class="fas fa-file-signature" aria-hidden="true"></i></span>Experiências</a>
								<ul class="list-unstyled list-hidden">
									<li><a href="xp-led.html" class="list-link"><span class="list-icon"><i class="far fa-lightbulb"></i></span>LED Piloto</a></li>
									<li><a href="xp-pot.html" class="list-link"><span class="list-icon"><i class="fas fa-weight"></i></span>Potenciometro Piloto</a></li>
									<li><a href="xp-pcnt.html" class="list-link"><span class="list-icon"><i class="fas fa-temperature-low"></i></span>Planta de Controle 1</a></li>
								</ul>
                            </li>
                            <li><a href="#" class="list-link link-arrow active"><span class="list-icon"><i class="fas fa-file-invoice"></i></span>Iniciativa Weblab</a>
								<ul class="list-unstyled list-hidden">
									<li><a href="xp-led.html" class="list-link"><span class="list-icon"><i class="fas fa-laptop-code"></i></span>Sobre a Iniciativa</a></li>
									<li><a href="xp-pot.html" class="list-link"><span class="list-icon"><i class="fas fa-university"></i></span>Instituto Mauá</a></li>
									<li><a href="xp-pcnt.html" class="list-link"><span class="list-icon"><i class="far fa-copy"></i></span>Documentação</a></li>
								</ul>
							</li>
                        </ul>
					</li>
				</ul>
			</div>
		</div>
		
        <!-- FIM SIDEBAR -->

        <!-- website content -->
		<div class="content">
			<!-- content container -->
			<div class="container-fluid">
                <!-- INICIO NAVBAR -->
                <!-- navbar top fixed -->
                <nav id="nav" class="navbar navbar-expand-lg fixed-top navbar-original">
                    <div id="nav-left" class="left left-original">
                        <a href="" class="nav-logo pl-3">
                            <img src="frontend/assets/img/logo2.png" height="80" alt="">
                        </a>
                    </div>
                    <div class="right right-original">
                        <div class="collapse navbar-collapse">
                            <div class="m-0 d-flex justify-content-end w-100">
                                <div class="col-md-4 col-sm-3 mr-auto pt-3">
                                    <span class="page-title">Weblab - 2019</span>
                                    <a href="#" class="nav-bars pl-3">
                                        <span id="sidebar-toggle"><i class="fas fa-bars"></i></span>
                                    </a>
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item text-default">Minha conta</li>
                                        </ol>
                                    </nav>
                                </div>
                                <div class="col-md-4 col-3">
                                    <div class="search input-group md-form form-sm">
                                        <input class="form-control" type="text" placeholder="Search" aria-label="Search">
                                        <div class="input-group-append">
                                            <span class="input-group-text bg-white border border-0" id="basic-text1"><i class="fas fa-search text-grey" aria-hidden="true"></i></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-1 col-2 ml-3">
                                    <div class="nav-square">
                                        <span class="nav-square-icon"><i class="far fa-envelope"></i></span>
                                    </div>
                                </div>
                                <div class="col-md-1 col-2">
                                    <div class="nav-square">
                                        <span class="nav-square-icon"><i class="fas fa-tasks"></i></span>
                                    </div>
                                </div>
                                <div class="col-md-1 col-2">
                                    <div class="dropdown dropdown-logged dropdown-logged-original mt-3">
                                        <a href="#" data-toggle="dropdown" class="dropdown-logged-toggle dropdown-link">
                                            <img src="frontend/assets/img/avatar.png" alt="avatar" class="dropdown-avatar">
                                        </a>
                                        <div class="dropdown-menu dropdown-logged-menu dropdown-menu-right border-0 dropdown-menu-original">
                                            <div class="dropdown-menu-arrow"></div>
                                            <a class="dropdown-item dropdown-logged-item" href="#"><i class="fa fa-user-o" aria-hidden="true"></i>Your profile</a>
                                            <a class="dropdown-item dropdown-logged-item" href="#"><i class="fa fa-comments-o" aria-hidden="true"></i>Your comments</a>
                                            <a class="dropdown-item dropdown-logged-item" href="#"><i class="fa fa-key" aria-hidden="true"></i>Change password</a>
                                            <div class="dropdown-divider border-light"></div>
                                            <a class="dropdown-item dropdown-logged-item" href="#"><i class="fa fa-sign-out" aria-hidden="true"></i>Logout</a>
                                        </div>
                                    </div>
                                </div>                
                            </div>
                        </div>
                    </div>
                </nav>
                <!-- FIM SIDEBAR -->
                
                <!-- INICIO LOADER -->
                <div class="row" id="loader-wrapper">
                    <div class="col-12 text-center">
                        <div class="loader" id="loader">
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </div>
                </div>        
                <!-- FIM LOADER -->
                
                <div class="d-none" id="container">
                    <div class="row">
                        <div class="col-sm-6 mb-3 col-md-6">
                            <div class="content-box content-original widget-single">
                                <h3>Leitrua do Resistor e Luminosidade</h3>
                                <div class="row justify-content-center pt-4">
                                    <div class="col-5 text-center pt-4">
                                        <span class=""><i id="situation" class="far fa-4x"></i></span>
                                        <h3 id="situation-text" class="pt-3"></h3>
                                    </div>
                                    <div class="col-5 text-center pt-4">
                                        <div id="light" class="ml-5"></div>
                                        <h3 id="onoff" class="pt-3">OFF</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 mb-3 col-md-6">
                            <div class="content-box content-original widget-single">
                                <h3>Situação</h3>
                                <div class="row pl-4">
                                    <div class="container-fluid">
                                        <video width="500" height="180" autoplay="true" id="videoElement"></video>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 mb-3 col-md-6">
                            <div class="content-box content-original widget-single">
                                <h3>Controle Circuito LDR</h3>
                                <div class="container">
                                    <div class="row justify-content-center pt-3">
                                        <div class="col-6">
                                            <div class="md-form md-outline mb-3">
                                                <input type="text" id="form1" class="form-control" aria-label="Recipient's username" aria-describedby="MaterialButton-addon2">
                                                <label for="form1">SetPoint Lux</label>
                                            </div>

                                        </div>
                                        <div class="col-6 pt-4">
                                            <button id="lux" class="btn btn-sm btn-outline-primary"><i class="fas fa-paper-plane"></i></button>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 mb-3 col-md-6">
                            <div class="content-box content-original widget-single">
                                <h3>Resistencia do LDR   no Tempo</h3>
                                <div class="row pl-4">
                                    <canvas id="mychart" style="max-height: 190px !important; "></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
			</div>
		</div>
	</div>

    <!-- Javascript library -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="lib/perfect-scrollbar-master/dist/perfect-scrollbar.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.10/js/mdb.min.js"></script>
    <script src="https://kit.fontawesome.com/a1d05124c7.js"></script>
    <script src="frontend/assets/js/sidebar.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/roundSlider/1.3.3/roundslider.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8.18.4/dist/sweetalert2.js"></script>

    <script src="frontend/assets/js/fade-load.js"></script>
    <script src="frontend/assets/js/video.js"></script>

    <?php 


        
    ?>
    <script>

    // SET INTERVAL PARA MUDAR O SOLZINHO REALTIME 1 SEC
    setInterval(function () {
        $.get({
            type: 'get',
            url: 'controlerStatus.php',
            data: {'load': 'true' },
            success: function(data) {
                console.log(data);
                if(data >= 40){
                    $("#situation").removeClass("fa-sun text-warning").addClass("fa-moon");
                    $("#situation-text").removeClass("text-warning").text("Escuro");
                    $('#light').removeClass("active");
                    $('#onoff').addClass("text-warning").text("ON");
                
                }else{
                    $("#situation").removeClass("fa-moon").addClass("fa-sun text-warning");
                    $("#situation-text").text("Claro").addClass("text-warning");
                    $('#light').addClass("active");
                    $('#onoff').text("OFF");

                    console.log("Passei pelo else");
                }
            }
        });        
    }, 1000);

    $("#lux").click(function(){

        var variable = $("#form1").val();

        $.post({
            type: 'post',
            url: 'controlerStatus.php',
            data: {'lux': variable },
            success: function(data) {
                console.log(data);
            }
        });     
    });

    </script>
	<script>
        new PerfectScrollbar('.list-scrollbar');
        var ctxL = document.getElementById("mychart").getContext('2d');
        var myLineChart = new Chart(ctxL, {
            type: 'line',
            data: {
                labels: ["13:10", "13:15", "13:20", "13:25", "13:30", "13:35", "13:40"],
                datasets: [{
                    label: "Led x Tempo",
                    data: [0, 800, 700, 350, 480, 0, 500],
                    backgroundColor: ['rgba(105, 0, 132, .2)'],
                    borderColor: ['rgba(200, 99, 132, .7)'],
                    borderWidth: 2
                }]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            suggestedMin: 0,
                            suggestedMax: 1000
                        }
                    }]
                },
                elements: {
                    line: {
                        tension: .5 // disables bezier curves
                    }
                },
                responsive: true
            }
        });

        $("#slider").roundSlider({
            radius: 80,
            width: 14,
            circleShape: "pie",
            startAngle: 315,
            handleSize: "+8",
            handleShape: "dot",
            sliderType: "min-range",
            value: 55
        });
	</script>
</body>
</html>