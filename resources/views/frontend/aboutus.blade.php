<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="{{asset('css/footer.css')}}">
    <link rel="stylesheet" href="{{asset('css/aboutus.css')}}">

    <title>
        About us
    </title>
</head>

<body>
    <section id="header">
        <header>
            <!-- Navbar -->
              <nav class="navbar navbar-expand-lg navbar-dark">
                <a class="navbar-brand" href="{{ route('home') }}"></a>
                <button class="navbar-toggler custom-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse " id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('home') }}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('products') }}">catagories</a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link" href="{{ route('productsrecommend') }}">Recommend</a>
                        </li>
                        <li class="nav-item ">
                              <a class="nav-link" href="{{ route('viewcart') }}">Cart </a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link" href="{{ route('aboutus') }}">About us</a>
                        </li>
                    </ul>
                </div>
            </nav>
            <!--  -->

        </header>
    </section>

    <!-- Body  -->
    <section class="body">
        <div class="container">
            

    <!--  -->
   
            <section class="ourteam">
                <h3 class="our-team-head">Our Team</h3>
                <div class="container" style="padding-top: 10%;">
                    <div class="row">
                       <div class="col-lg-4 mx-auto" style="width: 18rem;">
                            <img class="card-img-top" src="{{asset('img/Vathanak.jpg')}}" alt="">
                            <p></p>
                            <h4 class="card-text text-center">Vatanak Tong</h4>
                            <br>
                      </div>
                      <div class="col-lg-4 mx-auto" style="width: 18rem;">
                        <img class="card-img-top" src="{{asset('img/chhay.jpg')}}" alt="">
                        <p></p>
                        <h4 class="card-text text-center">Lengchhay Tan</h4>
                        <br>
                  </div>
                  <div class="col-lg-4 mx-auto" style="width: 18rem;">
                    <img class="card-img-top" src="{{asset('img/Phorith.jpg')}}" alt="">
                        <p></p>
                        <h4 class="card-text text-center">Phorith Bun</h4>
                        <br>
              </div>
              <div class="col-lg-4 mx-auto" style="width: 18rem;">
                    <img class="card-img-top" src="{{asset('img/Ponita.jpg')}}" alt="">
                        <p></p>
                        <h4 class="card-text text-center">Ponita Tan</h4>
                        <br>
              </div>
                    </div>
                </div>
            </section>
     </div>
 </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="footer-dark">
          <footer>
              <div class="container">
                  <div class="row">
                      <div class="col-sm-6 col-md-3 item">
                         
                      </div>
                      <div class="col-sm-6 col-md-3 item">
                          <h3>Contact us</h3>
                          <ul>
                              <li><a href="mailto:info@damavey.com">info@rokkhas.com</a></li>
                              <li><a>012 345 678</a></li>
                          </ul>
                      </div>
                    
                      <div class="col item social"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-youtube"></i></a><a href="#"><i class="fa fa-instagram"></i></a></div>
                  </div>
                  <p class="copyright">&copy; Rokkhas</p>
              </div>
          </footer>
      </div>
      </footer>
      <!--  -->
  </body>
  </html>
