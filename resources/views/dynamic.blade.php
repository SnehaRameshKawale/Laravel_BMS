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
                      <a class="navbar-brand" href=""> 
                        <img src="https://www.vilacvetka.com/wp-content/uploads/2015/04/booking-logo.png" width="30" height="30" alt="Logo">
                      </a>
                      <a class="nav-item nav-link" href="#aboutusSection">About Us</a>
                      <a class="nav-item nav-link" href="#contactusSection">Contact Us</a>
                  </div>
              </div>           
          </div> 
      </nav>
  </div>
  <main class="m-5">
    {{-- {!! isset($data->html)?$data->html :'page not found!!} --}}
  </main>
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