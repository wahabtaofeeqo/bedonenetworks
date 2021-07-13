@extends('layouts.app')

@section('content')

  <div class="header">

    <div class="p-1 bg-light d-none d-md-block side-cap">
      <div class="media" style="align-items: center;">
          <i class="icofont-ui-dial-phone mr-2" style="font-size: 35px;"></i>
          <div class="media-body pr-3">
            <small class="py-0">More Information call us</small> <br class="mb-0 pb-0">
            <span class="small py-0 text-color font-weight-bold" style="font-size: 14px;">+234-07036974316</span>
          </div>
      </div>
    </div>

    <nav class="navbar navbar-expand-lg navbar-light bg-transparent fixed-top">
      <div class="container-fluid">

        <a class="navbar-brand" href="#">
          <img src="/assets/bh.png" alt="" width="60" height="60">
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0 ml-auto">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#about">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#rates">Rates</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#testimonials">Testiomials</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#page">Our Page</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <div class="col-lg-5 ml-auto bg-white h-100 px-md-5 right-side">
      <div class="text-right">
        
        <h1 class="mb-md-4">Better Solutions For 
          <br><span data-aos="fade-up" data-aos-delay="200">Cryptocurrency</span></h1>

        <p class="col-md-9 ml-auto px-0">
          Specialits in Bitcoin, Giftcard e.t.c. <br>
          Trade with <b class="text-color">Bedonenetworks</b> on Instagram, WhatsApp, Skype for safe Trading.
        </p>
      </div>

      <div class="mt-5">
          <a href="https://wa.me/2347036974316" class="btn btn-success py-2 px-md-5" data-aos="zoom-in" data-aos-delay="150">Whatsapp</a>
          <a href="https://www.instagram.com/bedonenetworks_" class="btn btn-info py-2 px-md-5" data-aos="fade-up" data-aos-delay="200">Instagram</a>
      </div>

      <p style="position: absolute; bottom: 10px;" class="text-color font-weight-bold"> #Bedondey4u </p>
    </div>
  </div>

  <div class="bg-bedon-info py-5" id="#about">
    <div class="container py-5">
       <h2 class="section-title">About Us</h2>
      <div class="row text-white">
        <div class="col-md-6">
          <p class="">
            <strong>Be Done Networks</strong> is a platform that enables customers to convert their bitcoins to preferred local currency. What will do mainly are:
          </p>

          <ul class="" style="list-style: none; padding-left: 0; margin-left: 0;">
            <li><i class="ri-check-double-line"></i> All crypto coins</li>
             <li><i class="ri-check-double-line"></i> Bitcoin Exchange</li>
            <li><i class="ri-check-double-line"></i> iTunes, Amazon, Google play, Ebay, Sephora, Nordstorm, Steam, Walmart and more.</li>
          </ul>
        </div>

        <div class="col-md-6">
          <p>
            Customers can however sell their bitcoins and have money from the sales of the btc sent to their bank account. Banks don’t support bitcoin but we offer a secure medium of exchange where bitcoins would be exchanged with local currency.
          </p>

          <a href="#page" class="btn btn-outline-light mt-4 px-5" data-aos="zoom-in" data-aos-delay="150">Contact Us</a>
        </div>
      </div>
    </div>
  </div>


  <div class="bg-light py-5">
    <div class="container">
      <h3 class="text-color mb-5">Crypto Exchange <strong>At ease</strong></h3>

      <div class="row">
        <div class="col-md-7 about">
          <div class="card mb-3">
            <div class="card-body">
              <h5 class="card-title text-color-info">01 Ease Access</h5>
              <p class="mb-0">
                Our service has been designed such that it becomes very easy for potential client and user to find it very convinience.
              </p>
            </div>
          </div>

          <div class="card mb-3"  data-aos="fade-down" data-aos-delay="150">
            <div class="card-body">
              <h5 class="card-title text-color-info">02 Good Rate</h5>
              <p class="mb-0">
                The rate of our exchange for all cryptocurrency related busness is of high quality and that is our market strategy.
              </p>
            </div>
          </div>

          <div class="card">
            <div class="card-body">
              <h5 class="card-title text-color-info">03 Fast Payment</h5>
              <p class="mb-0">
                Our payment is termed <b>Pay As You Go</b> which means no delay at all. Once the business is done, you get the alert.
              </p>
            </div>
          </div>
         
        </div>

        <div class="col-md-5 order-1 order-lg-2" data-aos="zoom-in" data-aos-delay="150" style='background: url("/assets/bh.png"); background-size: cover;'>
            
        </div>
      </div>
    </div>
  </div>

  <div class="py-5 bg-bedon-info" id="rates">
    <crypto-market></crypto-market>
  </div>

  <div class="py-5 bg-white" id="page">
    <h4 class="section-title">#Bedondey4u</h4>
    <bedone></bedone>
  </div>

  <div class="bg-light py-5" id="testimonials">
    <div class="container py-2">
      <h4 class="section-title">Testimonials</h4>

       <div class="owl-carousel testimonials col-md-8 mx-auto text-center">
          @foreach($testimonials as $key => $row)
            <div>
              <h4 class="text-color">{{ $row->name }}</h4>
              <p style="font-style: italic;">
                {{ $row->content }}
              </p>
          </div>
          @endforeach
      </div>

      <div class="py-5 bg-bedon-info rounded">
        <h2 class="text-white text-center my-3">Our newsletter</h2>
        <form class="col-md-7 mx-auto mb4 subscribe" action="/api/subscribe" method="POST" id="subscribeForm" data-aos="zoom-in" data-aos-delay="100">
          <div class="form-row">
            <div class="form-group col-md-10">
              <input type="email" name="email" class="form-control" placeholder="Email">
            </div>
            <div class="form-group col-md-2">
              <button class="btn btn-info">Submit</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
@endsection