@extends('layouts.main', ['lang' => 'en'])

@section('title', 'Entertainment - Port Nature Luxury Resort Hotel')
@section('description', 'Entertainment Port Nature Luxury Resort Hotel. Best 5 star family hotel with entertainment in Side. Reserve your room and dont miss our 2024 Events.')

@section('header-lang')

<li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="{{ route('entertainment') }}"
       aria-expanded="false">EN</a>
    <ul class="dropdown-menu dropdownmobile language">
        <li><a class="dropdown-item" href="{{ route('tr-entertainment') }}">TR</a></li>
        <li><a class="dropdown-item" href="{{ route('ru-entertainment') }}">RU</a></li>
        <li><a class="dropdown-item first-item" href="{{ route('de-entertainment') }}">DE</a></li>
    </ul>
</li>

@endsection

@section('content')

<div class="entertainmentHero">
    <div class="heroImage">
      <figure>
        <img src="{{ asset('assets/frontend/images/entertainment/entertainment.webp') }}" alt="entertainment"/>
      </figure>
    </div>
    <article>
      <h1>Entertainment</h1>
      <span>Port Nature offers a tantalizing glimpse into the world of pure enjoyment. <br>Providing a worry-free oasis for both children and adults.</span>
    </article>
  </div>
  {{-- Hero Part End --}}
  
  <div class="entertainmentSection activities">
    <div class="row">
      <div class="col-12 col-md-12 col-lg-7">
          <figure>
            <img src="{{ asset('assets/frontend/images/entertainment/activities.webp') }}" alt="activities"/>
          </figure>
      </div>
      <div class="col-12 col-md-12 col-lg-5">
        <article class="leftText">
          <h2>ACTIVITIES</h2>
          <p>Whether you're a seasoned athlete or just starting out on your fitness journey, our extensive range of facilities will help you achieve your goals. From a fully-equipped gym to indoor and outdoor sports fields, we have everything you need to stay active and healthy.</p>
          <div class="moreButton">
            <a href="{{ route('activity') }}">More About</a>
          </div>
        </article>
      </div>
    </div>
  </div>
  
  <div class="entertainmentSection">
    <div class="row reverse">
      <div class="col-12 col-md-12 col-lg-5">
        <article class="rightText">
          <h2>Concerts</h2>
          <p>Attending a live concert can be a breathtaking experience, with the stunning performances, dazzling lights, and immersive sound creating an unforgettable atmosphere. From the energy of the crowd to the incredible artistry of the musicians for our guests.</p>
          <div class="moreButton">
            <a href="{{ route('concert') }}">More About</a>
          </div>
        </article>
      </div>
      <div class="col-12 col-md-12 col-lg-7">
          <figure>
            <img src="{{ asset('assets/frontend/images/entertainment/concerts.webp') }}" alt="concerts"/>
          </figure>
      </div>
    </div>
  </div>
  
{{-- Contact --}}
@include('frontend.en.layouts.contact')
{{-- Contact End --}}

@endsection

@section('javascript-imports')
<script src="{{ asset('assets/frontend/js/entertainment.js') }}"></script>
@endsection

@section('css-imports')
<link rel="stylesheet" href="{{ asset('assets/frontend/css/entertainment.css') }}"/>
@endsection