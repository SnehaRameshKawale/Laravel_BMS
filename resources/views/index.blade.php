<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

     {{-- own css --}}
     <link rel="stylesheet" href="{{asset('css/style.css')}}">
     <style>
      /* Custom CSS to hide horizontal scrollbar */
      html, body {
        overflow-x: hidden;
      }
    </style>
  
    <title>Booking Managmnet System!</title>
  </head>
  <body>
  {{-- Navbar Section --}}
  <div class="navContainer fixed-top">
      <nav class="navbar navbar-expand-lg navbar-light bg-light text-dark">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
          <div class="container"> <!-- Added container class for better alignment -->
              <div class="collapse navbar-collapse justify-content-center" id="navbarNavAltMarkup">
                  <div class="navbar-nav">
                      <a class="nav-item nav-link active" href="#homeSection">Home</a>
                      <a class="nav-item nav-link mr-3" href="#teamSection">Team</a>
                      <a class="navbar-brand" href="{{url('/login')}}"> 
                        <img src="https://www.vilacvetka.com/wp-content/uploads/2015/04/booking-logo.png" width="30" height="30" alt="Logo">
                      </a>
                      <a class="nav-item nav-link" href="#aboutusSection">About Us</a>
                      <a class="nav-item nav-link" href="#contactusSection">Contact Us</a>
                  </div>
              </div>           
          </div> 
      </nav>
  </div>
  {{-- Navbar Section End Here --}}

  {{-- Home Section --}}
  <div id="homeSection">
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        {{-- <img src="https://wallpapercave.com/wp/wp3598832.jpg" alt="..." height="650px" width="100%"> --}}
        <img src="https://cdnb.artstation.com/p/assets/images/images/030/560/705/large/ryan-wai-kin-lam-w070-hotelroom01-v001-2k.jpg?1600963982" alt="..." height="650px" width="100%">
        <div class="carousel-caption d-none d-md-block">
          <h4>Discover Your Perfect Getaway</h4>
          <p>Explore our curated selection of exquisite accommodations, each offering unparalleled comfort, stunning views, and top-notch service. Whether you're planning a romantic retreat, a family vacation, or a business trip, our diverse range of hotels ensures that there's something for every traveler. Book now and embark on your next unforgettable journey!</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="https://wallpapercave.com/wp/wp1874171.jpg" alt="..." height="650px" width="100%">
        <div class="carousel-caption d-none d-md-block">
          <h4>Savor Culinary Excellence</h4>
          <p>Indulge your senses in a culinary journey like no other. Our restaurant offers a delectable array of dishes crafted with the finest ingredients, complemented by a warm and inviting ambiance. Whether you're craving gourmet cuisine or comforting classics, our menu has something to satisfy every palate. Join us for an unforgettable dining experience that will leave you craving more!</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="http://pegasusevents.in/wp-content/uploads/2019/01/disco.jpg" alt="..." height="650px" width="100%">
        <div class="carousel-caption d-none d-md-block">
          <h4>Experience Unforgettable Events</h4>
          <p>Step into a world of excitement and entertainment with our spectacular events. From live music performances and cultural festivals to thrilling sports events and immersive experiences, there's always something happening to captivate your interest. Join us and create memories that will last a lifetime. Book your tickets now and be part of the magic!</p>
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
  </div>
  {{-- Home Section End Here --}}

  {{-- team Section --}}
  <div class="text-center bg-light text-dark pt-5 pb-5" id="teamSection">
    {{-- <h2 class="text-light pt-5">Team<h2> --}}
      <h2>Team</h2>
    <div class="row pt-2 justify-content-center pt-4">
      <div class="col-lg-4">
        <img src="https://cdn.pixabay.com/photo/2023/02/24/04/28/ai-generated-7810162_1280.jpg" class="bd-placeholder-img rounded-circle" width="150px" height="150px" role="img" aria-label="Placeholder" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="var(--bs-secondary-color)"></rect></img>
        <h4 class="fw-normal ">Member 1</h4>
        <p>Some representative placeholder content for the three columns of text below the carousel. This is the first column.</p>
        <p><a class="btn btn-secondary bg-primary" href="#">View details »</a></p>
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4">
        <img src="https://tse3.mm.bing.net/th?id=OIP.PPto1n9o63NX8ypEDWqNNgAAAA&pid=Api&P=0&h=180" class="bd-placeholder-img rounded-circle" width="150px" height="150px" role="img" aria-label="Placeholder" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="var(--bs-secondary-color)"></rect></img>
        <h4 class="fw-normal">Member 2</h4>
        <p >Another exciting bit of representative placeholder content. This time, we've moved on to the second column.</p>
        <p><a class="btn btn-secondary bg-primary" href="#">View details »</a></p>
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4">
        <img src="https://img.freepik.com/premium-photo/cropped-shot-female-business-executive-office-created-with-generative-ai_762026-25284.jpg" class="bd-placeholder-img rounded-circle" width="140" height="140" role="img" aria-label="Placeholder" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="var(--bs-secondary-color)"></rect></img>
        <h4 class="fw-normal">Member 3</h4>
        <p>And lastly this, the third column of representative placeholder content.</p>
        <p><a class="btn btn-secondary bg-primary" href="#">View details »</a></p>
      </div><!-- /.col-lg-4 -->
    </div>
  </div>
  {{-- team Section End Here --}}

  {{-- About Us Section --}}
  <div class="aboutus bg-dark pt-5 pb-5" id="aboutusSection">
    <h2 class="text-center text-light ">About Us</h2>
    <div class="container pt-4">
    <div class="row featurette">
      <div class="col-md-5 order-md-1 border p-1">
        <img class="featurette-image img-fluid mx-auto" data-src="holder.js/500x500/auto" alt="500x500" src="https://www.jcount.com/wp-content/uploads/2015/07/team.jpg" data-holder-rendered="true" style="width: 500px; height: 500px;">
      </div>
      <div class="col-md-7 order-md-2 d-flex align-items-center">
        <div>
        <h2 class="featurette-heading text-light">Discover Seamless Booking. <span class="text-muted h5 text-light">Experience Excellence.</span></h2>
        <p class="lead text-light">Book with confidence. Our platform ensures hassle-free reservations, impeccable service, and unforgettable experiences. Whether you're planning a getaway, event, or dining experience, we've got you covered. Let us take care of the details while you focus on making memories.</p>
      </div>
      </div>
    </div>
    </div>
  </div>
  {{-- About Us Section End Here--}}

  {{-- Contact Us Section --}}
  <div class="contactus bg-light text-dark pt-5 pb-5" id="contactusSection">
    <h2 class="text-center">Contact Us</h2>
    <div class="container pt-4">
        <div class="row featurette">
            <div class="col-md-7 border border-dark rounded p-3">
                <!-- Contact Form -->
                <div class="formdiv">
                    <form>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Email address</label>
                            <input type="email" class="form-control border border-dark" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
                            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Message</label>
                            <input type="text" class="form-control border border-dark" id="exampleInputPassword1" name="message">
                        </div>
                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Check me out</label>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-5 d-flex align-items-center p-4">
                <!-- Contact Information -->
                <div class="contactinfo">
                    <h2 class="">Our Contact Information</h2>
                    <!-- Add your contact information here -->
                    <p class="lead">123 Main Street, City, Country</p>
                    <p class="lead">Phone: +1234567890</p>
                    <p class="lead">Email: example@example.com</p>
                </div>
            </div>
        </div>
    </div>
  </div>


  {{-- Contact Us section End Here --}}

  {{-- footer section --}}
  <div class="pt-4">
    <div class="footer bg-dark text-light border-top">
    <div class="container ">
      <footer class="py-5">
        <div class="row">
          <div class="col-6 col-md-2 mb-3 text-center">
            <h5>Section</h5>
            <ul class="nav flex-column">
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Home</a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Features</a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Pricing</a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">FAQs</a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">About</a></li>
            </ul>
          </div>
    
          <div class="col-6 col-md-2 mb-3 text-center">
            <h5>Section</h5>
            <ul class="nav flex-column">
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Home</a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Features</a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Pricing</a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">FAQs</a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">About</a></li>
            </ul>
          </div>
    
          <div class="col-6 col-md-2 mb-3 text-center">
            <h5>Section</h5>
            <ul class="nav flex-column">
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Home</a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Features</a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Pricing</a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">FAQs</a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">About</a></li>
            </ul>
          </div>
    
          <div class="col-md-5 offset-md-1 mb-3">
            <form>
              <h5>Subscribe</h5>
              <p>Monthly digest of what's new and exciting from us.</p>
              <div class="d-flex flex-column flex-sm-row w-100 gap-2">
                <label for="newsletter1" class="visually-hidden">Email address</label>
                <input id="newsletter1" type="text" class="form-control" placeholder="Email address" fdprocessedid="4hfxm6">
                <button class="btn btn-primary" type="button" fdprocessedid="7ko8p9">Subscribe</button>
              </div>
            </form>
          </div>
        </div>
      </footer>
    </div>
    </div>
  </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>