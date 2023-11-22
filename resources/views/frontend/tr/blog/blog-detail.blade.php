@extends('frontend.tr.layouts.master')

@section('title', $post_content->meta_title)
@section('description', $post_content->meta_description)

@section('content')

<section class="blog">

    <div class="container">
        <!-- Booking Section -->
        <div class="booking topBooking" id="blogBooking">
            <label for="checkin"></label><input id="checkin"
                                                data-defaultDate="today"
                                                value="Check-in">
            <label for="checkout"></label><input id="checkout"
                                                data-defaultDate="today"
                                                value="Check-Out">
                                                <div class="guestDiv"><span class="guests">Guests</span>
            <div class="guestMenu">
                <div class="adultCounter dropdown-item">
                    <p>Adult(s)</p>
                    <div class="counter-item">
                        <img src="{{ asset('assets/frontend/images/decrement.svg') }}" class="decrement" onclick="adultDecrement()" alt="decrement"/>
                        <p id="adultCount"></p>
                        <img src="{{ asset('assets/frontend/images/increment.svg') }}" class="increment" onclick="adultIncrement()" alt="increment"/>
                    </div>
                </div>
                <div class="childCounter dropdown-item">
                    <p>Child(ren)</p>
                    <div class="counter-item">
                        <img src="{{ asset('assets/frontend/images/decrement.svg') }}" class="decrement" onclick="childDecrement()" alt="decrement"/>
                        <p id="childCount"></p>
                        <img src="{{ asset('assets/frontend/images/increment.svg') }}" class="increment" onclick="childIncrement()" alt="increment"/>
                    </div>
                </div>
                <div class="childAgeCounter1  childAgeCounter dropdown-item">
                    <p>Child 1 Age</p>
                    <div class="counter-item">
                        <img src="{{ asset('assets/frontend/images/decrement.svg') }}" class="decrement" onclick="childAge1Decrement()" alt="decrement"/>
                        <p id="childAge1Count">0</p>
                        <img src="{{ asset('assets/frontend/images/increment.svg') }}" class="increment" onclick="childAge1Increment()" alt="increment"/>
                    </div>
                </div>
                <div class="childAgeCounter2  childAgeCounter dropdown-item">
                    <p>Child 2 Age</p>
                    <div class="counter-item">
                        <img src="{{ asset('assets/frontend/images/decrement.svg') }}" class="decrement" onclick="childAge2Decrement()" alt="decrement"/>
                        <p id="childAge2Count">0</p>
                        <img src="{{ asset('assets/frontend/images/increment.svg') }}" class="increment" onclick="childAge2Increment()" alt="increment"/>
                    </div>
                </div>
                <div class="childAgeCounter3  childAgeCounter dropdown-item">
                    <p>Child 3 Age</p>
                    <div class="counter-item">
                        <img src="{{ asset('assets/frontend/images/decrement.svg') }}" class="decrement" onclick="childAge3Decrement()" alt="decrement"/>
                        <p id="childAge3Count">0</p>
                        <img src="{{ asset('assets/frontend/images/increment.svg') }}" class="increment" onclick="childAge3Increment()" alt="increment"/>
                    </div>
                </div>
                <div class="childAgeCounter4  childAgeCounter dropdown-item">
                    <p>Child 4 Age</p>
                    <div class="counter-item">
                        <img src="{{ asset('assets/frontend/images/decrement.svg') }}" class="decrement" onclick="childAge4Decrement()" alt="decrement"/>
                        <p id="childAge4Count">0</p>
                        <img src="{{ asset('assets/frontend/images/increment.svg') }}" class="increment" onclick="childAge4Increment()" alt="increment"/>
                    </div>
                </div>
            </div></div>
            <a href="https://portnature.rezervasyonal.com/?currency=TRY" target="_blank" class="bookNow">Book Now</a>
        </div>
        <!-- Booking Section End -->

        {!! $post_content->description !!}
    </div>

    @include('frontend.tr.layouts.contact')

    <div class="recomBlogGrid">
        <h6>
            <a href="{{ route('tr-blog') }}">DİĞER MAKALELERİMİZE GÖZ ATIN</a>
        </h6>
        <div class="blogGrid">
            @foreach ($otherPosts->slice(0, 8) as $post_item)
                <div class="miniBlog">
                    <a href="{{ url('/blog-sayfasi'.'/'.$post_item->slug) }}">
                        <figure>
                            <img src="{{ asset('uploads/blogs/' . $post_item->title_image) }}" alt="{{ $post_item->meta_title }}"/>
                        </figure>
                        <span>{{ $post_item->name }}</span>
                        <p>{{ $post_item->title_description }}</p>
                        <div class="blogMoreButton">
                            Daha Fazlası
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
</section>
<!-- Page Up Button -->
<div style="text-align: center" class="pageUpButton">
    <a href="#">
        <img class="accommdationSvg lazyload" data-src="{{ asset('assets/frontend/images/pageUp.svg') }}"/>
    </a>
</div>


@endsection

@section('javascript-imports')
<script src="{{ asset('assets/frontend/libs/js/lc_lightbox.lite.min.js') }}" defer></script>
<script src="{{ asset('assets/frontend/js/main.js')  }}"></script>
@endsection

@section('css-imports')
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/blog.css') }}"/>
<link rel="stylesheet" href="{{ asset('assets/frontend/css/style.css') }}"/>
@endsection