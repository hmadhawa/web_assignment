@extends('frontend.layouts.app')

@section('content')

    <!-- Page Content -->
    <header class="slider-main">
        <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-ride="carousel">
            <ol class="carousel-indicators">
               <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
               <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
               <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
               <!-- Slide One - Set the background image for this slide in the line below -->

               <div class="carousel-item active" style="background-image: url('frontend/images/slider-4.jpeg');height:800px;">
                  <div class="carousel-caption d-none d-md-block">
                     <h1>BEAUTY OF NATURE</h1>
                     <p>Every person has a duty save the mother nature.</p>
                  </div>
               </div>
              
               <!-- Slide Two - Set the background image for this slide in the line below -->
               <div class="carousel-item" style="background-image: url('frontend/images/slider-02.jpg');height:800px;">
                  <div class="carousel-caption d-none d-md-block">
                     <h1>MOTHER EARTH NEEDS YOU</h1>
                     <p>Protecting the planet is every person's duty</p>
                  </div>
               </div>
               <!-- Slide Three - Set the background image for this slide in the line below -->
               <div class="carousel-item " style="background-image: url('https://iaps-association.org/wp-content/uploads/2021/02/nature-3289812_1920.jpg');height:800px;">
                  <div class="carousel-caption d-none d-md-block">
                     <h1>PROTECT OUR EARTH...</h1>
                     <p>Do you part to save the planet. Every action count! </p>
                  </div>
               </div>
              
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
            </a>
        </div>
    </header>
   
    <div class="container">
        <div class="services-bar">
            <h1 class="my-4">Our Best Services </h1>
            <!-- Services Section -->
            <div class="row">
               <div class="col-lg-4 mb-4">
                  <div class="card h-100">
                     <h4 class="card-header">ECO</h4>
                     <div class="card-img">
                        <img class="img-fluid" src="{{ asset('frontend/images/services-img-01.jpg')}}" style="height:280px; width:100%" alt="" />
                     </div>
                     <div class="card-body">
                        <p class="card-text"> Let's be aware of volunteering organizations currently established to combat climate change </p>
                     </div>
                     <div class="card-footer">
                        <a href="/eco" class="btn btn-primary">Learn More</a>
                     </div>
                  </div>
               </div>
               <div class="col-lg-4 mb-4">
                  <div class="card h-100">
                     <h4 class="card-header">DONATION</h4>
                     <div class="card-img">
                        <img class="img-fluid" src="{{ asset('frontend/images/services-img-02.jpg')}}" alt="" />
                     </div>
                     <div class="card-body">
                        <p class="card-text">The earth is our priceless asset. Hence, to change its current state, Let's offer our assets</p>
                     </div>
                     <div class="card-footer">
                        <a href="/donation" class="btn btn-primary">Learn More</a>
                     </div>
                  </div>
               </div>
               <div class="col-lg-4 mb-4">
                  <div class="card h-100">
                     <h4 class="card-header">BLOG</h4>
                     <div class="card-img">
                        <img class="img-fluid" src="{{ asset('frontend/images/services-img-03.jpg')}}" alt="" />
                     </div>
                     <div class="card-body">
                        <p class="card-text">Join us with your creative and honest ideas by writing a blog in your point of perspective</p>
                     </div>
                     <div class="card-footer">
                        <a href="/blog" class="btn btn-primary">Learn More</a>
                     </div>
                  </div>
               </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- About Section -->
      
        <div class="about-main">
            <div class="row">
               <div class="col-lg-6">
                  <h2>Welcome to Earthwise</h2>
                  <p>Our objective from this website was to create a platform to educate the public while allowing them to connect with organisations trailblazing change</p>
                  <br>
                  <h5>Our smart approach</h5>
                  <ul>
                     <li>We have created the home page to give you introduction about our website</li>
                     <li>The ECO page will give you information that working to educate and combat the climate crisis</li>
                     <li>The Donations page will allow you to donate towards fighting climate change</li>
                     
                  </ul>
                  <p></p>
               </div>
               <div class="col-lg-6">
                  <img class="img-fluid rounded" src="{{ asset('frontend/images/climate3.jpeg')}}" alt="" />
               </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- Portfolio Section 
        <div class="portfolio-main">
            <h2>Our Portfolio</h2>
            <div class="row">
               <div class="col-lg-4 col-sm-6 portfolio-item">
                  <div class="card h-100">
                     <div class="card-img">
                        <a href="#">
                           <img class="card-img-top" src="{{ asset('frontend/images/portfolio-img-01.jpg')}}" alt="" />
                           <div class="overlay"><i class="fas fa-arrows-alt"></i></div>
                        </a>
                     </div>
                     <div class="card-body">
                        <h4 class="card-title">
                           <a href="#">Lawn & garden care</a>
                        </h4>
                     </div>
                  </div>
               </div>
               <div class="col-lg-4 col-sm-6 portfolio-item">
                  <div class="card h-100">
                     <div class="card-img">
                        <a href="#">
                           <img class="card-img-top" src="{{ asset('frontend/images/portfolio-img-02.jpg')}}" alt="" />
                           <div class="overlay"><i class="fas fa-arrows-alt"></i></div>
                        </a>
                     </div>
                     <div class="card-body">
                        <h4 class="card-title">
                           <a href="#">Lawn renovation</a>
                        </h4>
                     </div>
                  </div>
               </div>
               <div class="col-lg-4 col-sm-6 portfolio-item">
                  <div class="card h-100">
                     <div class="card-img">
                        <a href="#">
                           <img class="card-img-top" src="{{ asset('frontend/images/portfolio-img-03.jpg')}}" alt="" />
                           <div class="overlay"><i class="fas fa-arrows-alt"></i></div>
                        </a>
                     </div>
                     <div class="card-body">
                        <h4 class="card-title">
                           <a href="#">Tree planting</a>
                        </h4>
                     </div>
                  </div>
               </div>
               <div class="col-lg-4 col-sm-6 portfolio-item">
                  <div class="card h-100">
                     <div class="card-img">
                        <a href="#">
                           <img class="card-img-top" src="{{ asset('frontend/images/portfolio-img-04.jpg')}}" alt="" />
                           <div class="overlay"><i class="fas fa-arrows-alt"></i></div>
                        </a>
                     </div>
                     <div class="card-body">
                        <h4 class="card-title">
                           <a href="#">Water Baganig</a>
                        </h4>
                     </div>
                  </div>
               </div>
               <div class="col-lg-4 col-sm-6 portfolio-item">
                  <div class="card h-100">
                     <div class="card-img">
                        <a href="#">
                           <img class="card-img-top" src="{{ asset('frontend/images/portfolio-img-05.jpg')}}" alt="" />
                           <div class="overlay"><i class="fas fa-arrows-alt"></i></div>
                        </a>
                     </div>
                     <div class="card-body">
                        <h4 class="card-title">
                           <a href="#">Growing plants</a>
                        </h4>
                     </div>
                  </div>
               </div>
               <div class="col-lg-4 col-sm-6 portfolio-item">
                  <div class="card h-100">
                     <div class="card-img">
                        <a href="#">
                           <img class="card-img-top" src="{{ asset('frontend/images/portfolio-img-01.jpg')}}" alt="" />
                           <div class="overlay"><i class="fas fa-arrows-alt"></i></div>
                        </a>
                     </div>
                     <div class="card-body">
                        <h4 class="card-title">
                           <a href="#">Snow removal</a>
                        </h4>
                     </div>
                  </div>
               </div>
            </div>
            
          
        </div>
        -->
        <hr>
        <!-- Get In Touch Now Section -->
        <div class="row mb-4">
            <div class="col-md-8">
               <br>
               <p> <ensp>Contact us to get more information about you can be part of this fight against climate change</p>
            </div>
            <div class="col-md-4">
               <a class="btn btn-lg btn-secondary btn-block" href="https://www.linkedin.com/in/madhawa-dissanayake-310406195/">Get In Touch Now</a>
            </div>
        </div>
    </div>

@endsection