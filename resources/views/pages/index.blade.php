@extends('layouts.app')
@section('content')
<!-- Image Slider Begins-->

<div id="slides" class="carousel slide" data-ride="carousel">
        <ul class="carousel-indicators">
          <li data-target="#slides" data-slide-to="0" class="active"></li>
          <li data-target="#slides" data-slide-to="1"></li>
          <li data-target="#slides" data-slide-to="2"></li>
        </ul>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="images/R3.jpg">
            <div class="carousel-caption">
              <h2 class="display-2">Feel The Cooking</h2>
              <h3>Stream over 20 000 recepies in one click</h3>
              <!-- <button type="button" class="btn btn-outline-light btn-lg">View Demo</button> -->
             <a href="{{ route('register') }}"><button type="button" class="btn btn-primary btn-lg">Join Now</button></a>

            </div>

          </div>
          <div class="carousel-item avtive">
            <img src="images/R1.jpg">

          </div>
          <div class="carousel-item avtive">
            <img src="images/R2.jpg">

          </div>

        </div>


        </div>

        <!-- Image Slider ends-->

        <!-- Three Column Section begins-->

        <div class="container-fluid padding">
          <div class="div1">
            <div class="col-12 welcome text-center">
              <h1 class="display-4">3 easy way to use our web site</h1>

            </div>

           <div class="row text-center padding">

             <div class="col-xs-12 col-sm-6 col-md-4">
               <!--i class="fas fa-code"></i-->
               <img src="images/choose.png" class="padding">

               <h3>Choose Your Favorite food</h3>
               <p>Search among all recipes.</p>
             </div>
             <div class="col-xs-12 col-sm-6 col-md-4">
               <!--i class="fas fa-bold"></i-->
               <img src="images/Register.png" class="padding">
               <h3>Register</h3>
               <p>Join our chef community</p>
             </div>
             <div class="col-sm-12 col-md-4">
               <!--i class="fab fa-css3"></i-->
               <img src="images/cook.png" class="padding">
               <h3>Cook like a top chef!</h3>
               <p>Show your cooking skills and Your masterpieces</p>
             </div>
          </div>
          <div class="text-center">



          <button type="button" class="btn btn-primary btn-lg">Get Started</button>
          </div>
          <hr class="my-4">
        </div>
        </div>

        <!-- Three Column Section ends-->

        <!--div class="container-fluid padding">
          <img src="img/s.png" class="img-fluid" alt="Responsive image">
          <p>sdsfghj</p>

        </div-->

        <!-- Choose from begins-->

        <div class="container-fluid padding">
          <div class="col-12 welcome text-center">
              <h1 class="display-4">Choose From Others Favourit!</h1>

          </div>
        </div>

        <!-- Choose from ends-->

        <!-- Cards begins-->
          <section class="recipes-section spad pt-0">
                <div class="container">
                    <div class="section-title">
                        <h2>Latest recipes</h2>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 col-md-6">
                            <div class="recipe">
                                <img  src="images/recipes/1.jpg" alt="">
                                <div class="recipe-info-warp">
                                    <div class="recipe-info">
                                        <h3>Traditional Pizza</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-md-6">
                            <div class="recipe">
                                <img src="images/recipes/2.jpg" alt="">
                                <div class="recipe-info-warp">
                                    <div class="recipe-info">
                                        <h3>Italian home-made pasta</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="recipe">
                                <img src="images/recipes/3.jpg" alt="">
                                <div class="recipe-info-warp">
                                    <div class="recipe-info">
                                        <h3>Chesse Cake Tart</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="recipe">
                                <img src="images/recipes/4.jpg" alt="">
                                <div class="recipe-info-warp">
                                    <div class="recipe-info">
                                        <h3>Traditional Pizza</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="recipe">
                                <img src="images/recipes/5.jpg" alt="">
                                <div class="recipe-info-warp">
                                    <div class="recipe-info">
                                        <h3>Italian home-made pasta</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="recipe">
                                <img src="images/recipes/6.jpg" alt="">
                                <div class="recipe-info-warp">
                                        <div class="recipe-info">
                                        <h3>Chesse Cake Tart</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        <!-- Cards ends-->
@endsection




