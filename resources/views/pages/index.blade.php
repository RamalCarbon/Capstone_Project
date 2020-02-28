
@extends('layouts.app')

@section('content')
  <header>
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <!-- Slide One - Set the background image for this slide in the line below -->
        <div class="carousel-item active" style="background-image: url('{{asset('images/family 2.jpeg')}}')">
          <div class="carousel-caption d-none d-md-block">
            <h3 class="display-4">First Slide</h3>
            <p class="lead">This is a description for the first slide.</p>
          </div>
        </div>
        <!-- Slide Two - Set the background image for this slide in the line below -->
        <div class="carousel-item" style="background-image: url('{{asset('images/family 1.jpeg')}}')">
          <div class="carousel-caption d-none d-md-block">
            <h3 class="display-4">Second Slide</h3>
            <p class="lead">This is a description for the second slide.</p>
          </div>
        </div>
        <!-- Slide Three - Set the background image for this slide in the line below -->
        <div class="carousel-item" style="background-image: url('{{asset('images/children 1.jpeg')}}')">
          <div class="carousel-caption d-none d-md-block">
            <h3 class="display-4">Third Slide</h3>
            <p class="lead">This is a description for the third slide.</p>
          </div>
        </div>
        <div class="carousel-item" style="background-image: url('{{asset('images/make a donation.jpeg')}}')">
            <div class="carousel-caption d-none d-md-block">
              <h3 class="display-4">Fourth Slide</h3>
              <p class="lead">This is a description for the fourth slide.</p>
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
  
  <!-- Page Content -->
  <section class="py-5">
    <div class="container">
      <h1 class="font-weight-light">This is the header of the page</h1>
      <p class="lead">Some more information on the charity side will be placed here</p>
    </div>
  </section>
@endsection

