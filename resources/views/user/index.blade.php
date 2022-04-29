<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css')}}">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/botman-web-widget@0/build/assets/css/chat.min.css">

    <title>Home Page</title>
    <link rel="shortcut icon" href="{{ asset('assets/img/logo.ico')}}" type="image/x-icon">
	<style>
		html, body {
			background-color: #f9f9f9;
			background-image: none;
			font-family: 'Ubuntu', "Helvetica Neue", Arial, sans-serif;
			font-size: 14px;
			margin: 0;
			padding: 0;
		}
	</style>
</head>
    <body>
    
    <!-- #### START HERE #####-->

    <nav class="navbar navbar-expand-sm navbar-dark fixed-top" style="background-color:#fc9139; color: white;">
        <div class="container">
            <a href="index.html" class="navbar-brand">
                <span style="font-family:Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif; font-size: 20px"> Mango Expert System</span>
            </a>
            <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a href="index.php" class="nav-link">Home</a>
                    </li>
                    @if (session('verfied_user_id'))
                        <li class="nav-item">
                            <a href="user" class="nav-link"><i class="fas fas fa-user-circle"></i> User</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>
                        </li>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    @elseif(session('verfied_admin_id'))
                        <li class="nav-item">
                            <a href="admin" class="nav-link"><i class="fas fas fa-user-circle"></i> Admin</a>
                        </li>
                    @else
                        <li class="nav-item">
                            <a href="/login" class="nav-link"><i class="fas fas fa-user-circle"></i> Login</a>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>
    <br>

    <!-- ### SLIDER ### -->
    <div id="showcase" class="carousel slide bg-light" data-ride="carousel" style="margin-top: 30px; ">
        <img class="img-fluid d-none d-sm-block" width= '100%' src="{{ asset('assets/img/mango.png')}}" alt="Mango First">
        <img class="img-fluid d-sm-none" width= '100%' src="{{ asset('assets/img/mangom.png')}}" alt="Mango First">
    </div>

    <!-- ### WELCOME Head Section ### -->
    <section id="welcome-section" class="text-white" style="background-color: #fc9139;">
        <div class="container">
            <div class="row">
                <div class="col text-center py-5 " >
                    <h1 class="display-4 d-none d-sm-block">What is Mango Expert System?</h1>
                    <h1 class=" d-sm-none">What is Mango Expert System?</h1>
                    <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit.ipsum dolor sit amet consectetur adipisicing elit.ipsum dolor sit amet consectetur adipisicing elit. Ut quibusdam maxime accusantium saepe fugiat molestias minima dolores recusandae fugit magni. <br>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Praesentium, fugiat facilis suscipit dolorem atque necessitatibus.<br>Lorem ipsum dolor sit amet.</p>
                </div>
            </div>
        </div>
    </section>


    <!-- ### Explore Section ### -->
    <section id="explore-section" class="bg-light text-muted py-4 mt-4">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-center" >
                    <img src="{{ asset('assets/img/mango1.png')}}" alt="" style="max-width: 60%;">
                </div>
                <div class="col-md-6 mt-5" >
                    <h3>Why IS Mango Expert System Important?</h3>
                     <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quis tenetur dolore placeat amet quo? Quos minus quas atque quasi provident minima illum laboriosam non? Iusto qui consequatur harum corrupti modi atque veniam nesciunt illo consequuntur error minima est iure cupiditate distinctio eveniet, quo repellendus enim maiores assumenda repellat quibusdam expedita.</p>
                     
                </div>
            </div>
        </div>
    </section>

    <section id="explore-section" class="bg-light text-muted py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6 d-sm-none text-center ">
                    <img src="{{ asset('assets/img/mango2.png')}}" alt="" style="max-width: 60%;">
                </div>

                <div class="col-md-6 mt-5">
                     <h3>Why IS Mango Expert System Important?</h3>
                     <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quis tenetur dolore placeat amet quo? Quos minus quas atque quasi provident minima illum laboriosam non? Iusto qui consequatur harum corrupti modi atque veniam nesciunt illo consequuntur error minima est iure cupiditate distinctio eveniet, quo repellendus enim maiores assumenda repellat quibusdam expedita.</p>
                </div>
                <div class="col-md-6 text-center d-none d-sm-block">
                    <img src="{{ asset('assets/img/mango2.png')}}" alt="" style="max-width: 60%;">
                </div>

            </div>
        </div>
    </section>

    <section id="explore-section" class="bg-light text-muted py-4">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-center">
                    <img src="{{ asset('assets/img/mango3.png')}}" alt="" style="max-width: 60%;">
                </div>
                <div class="col-md-6 mt-5">
                    <h3>Why IS Mango Expert System Important?</h3>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quis tenetur dolore placeat amet quo? Quos minus quas atque quasi provident minima illum laboriosam non? Iusto qui consequatur harum corrupti modi atque veniam nesciunt illo consequuntur error minima est iure cupiditate distinctio eveniet, quo repellendus enim maiores assumenda repellat quibusdam expedita.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ### BOXES ###-->
    <section id="boxes" class="py-5" style="background-color: #fc9139;" >
        <div class="container">
        <div class="row">

            <div class="col-md-4 mb-2">
            <div class="card text-center mb-resp" style="border:2px #fc9139 solid;">
                <div class="card-body">
                    <i class="fas fa-solid fa-leaf fa-3x my-3 " style="color:#fc9139"></i>
                    <h2 class="text" style="color:#fc9139;"> Organic Product</h2>
                    <p>Learn new words to understand and express yourself clearly</p>
                </div>
            </div>
            </div>

            <div class="col-md-4 mb-2">
                <div class="card text-center mb-resp" style="border:2px #fc9139 solid;">
                    <div class="card-body">
                        <i class="fas fa-solid fa-shield-check fa-3x my-3" style="color:#fc9139"></i>
                        <h2 class="text" style="color:#fc9139;"> Best Quality</h2>
                        <p>Learn new words to understand and express yourself clearly</p>
                    </div>
            </div>
            </div>

            <div class="col-md-4">
                <div class="card text-center mb-resp" style="border:2px #fc9139 solid;">
                    <div class="card-body">
                        <i class="fas fa-solid fa-award fa-3x my-3" style="color:#fc9139"></i>
                        <h2 class="text" style="color:#fc9139;"> Certified Product</h2>
                        <p>Learn new words to understand and express yourself clearly</p>
                    </div>
            </div>
            </div>

        </div>
        </div>
    </section>

    <!-- ### Details Box ### -->
    <section id="detail-section" class="pt-4 " >
        <div class="container">
            <div class="row"> 
                <div class="col-md-3">
                    <h5>Quick Links</h5>
                    <a class="detail_link" href="about.html" ><h6>About Us</h6></a>
                    <a class="detail_link" href="faq.html" ><h6>FAQ</h6><br></a>
                    <a class="detail_link" href="privacy.html" ><h6>Privacy Policy</h6></a>
                    <a class="detail_link" href="refund.html" ><h6>Refund Policy</h6></a>
                    <a class="detail_link" href="term.html" ><h6>Terms and Conditions</h6></a>
                </div>

                <hr class="ml-3 d-block d-sm-none" style="width: 75%; background-color: white;" >

                <div class="col-md-3 ">
                    <div>
                        <i class="fas fa-map-marker-alt fa-2x"></i>
                        <h6 class="mt-2">407/1 Prince Of Wales Avenue,<br>street 14,Colombo</h6>
                    </div>
                    <div class="mt-4">
                        <i class="fas fa-phone-square-alt fa-2x"></i>
                        <h6 class="mt-2">call  : +94 269 4819 <br>Hot line  : +94 754 2842</h6>
                    </div>
                </div>
                <hr class="ml-3 d-block d-sm-none" style="width: 75%; background-color: white;" >

                <div class="col-md-6 ">
                     <h3>NEWSLETTER</h3>
                     <p class="my-4 text-justify">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Tempora mollitia beatae ipsum magnam? Suscipit perferendis quo aut fugit.</p>
                    <div class="input-group mb-4 col-md-9 pl-0">
                        <input type="text" class="form-control" placeholder="Your Email Address"/>
                        <button class="btn btn-danger" type="button">Subscribe</button>
                    </div>
                </div>
                <hr class="ml-3 d-block d-sm-none" style="width: 75%; background-color: white;">
                <hr class="ml-3 d-none d-md-block" style="width: 90%; background-color: white;">
            </div>
        </div>
    </section>

    <!-- FOOTER -->
    <footer id="main-footer" class="py-2 text-white" style="background-color: #fc9139;">
        <div class="container">
        <div class="row">
            <div class="col">
            <p>Copyright &copy;
                <span id="year"></span> Mango Expert System | All Rights Reserved</p>
            </div>
        </div>
        </div>
    </footer>

<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>

</body>
    @if (session('verfied_user_id'))
		<script>
			var d = new Date();
			var time = d.getHours();
			var greeting = '';
			if (time < "12") {
				greeting = "Morning!";
			} else if (time >= "12" && time < "17") {
				greeting = "Afternoon!";
			} else if (time >= "17" && time < "19") {
				greeting = "Evening!";
			} else if (time >= "19") {
				greeting = "Night!";
			}
			var botmanWidget = {
				aboutText: 'Write Something',
				introMessage: "✋ Hello! Good "+ greeting,
			};
		</script>

		<script src='https://cdn.jsdelivr.net/npm/botman-web-widget@0/build/js/widget.js'></script>
	@endif
</html>