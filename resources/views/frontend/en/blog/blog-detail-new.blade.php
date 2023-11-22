@extends('frontend.en.layouts.master')

@section('title', $post_content->meta_title)
@section('description', $post_content->meta_description)

@section('content')

    <section class="blog">

        <div class="container">
            @php
                $description = $post_content->description;
            @endphp


            @if (strpos($description, 'dgtlNewBlogSystem') === false)
                @include('frontend.en.layouts.booking')
                {!! $description !!}
            @else
                {!! replaceElement($description) !!}
            @endif
            @php
                function replaceElement($description)
                {
                    // booking replacement
                    $bookingElement = "<div class='bookingElement'><span class=\"bookingSpan\" >BOOKING SECTION</span></div>";
                    $replacementBooking = view('frontend.en.layouts.booking')->render(); // Replace this with the desired content
                    $description = str_replace($bookingElement, $replacementBooking, $description);
                    // contact replacement
                    $replacementContact = view('frontend.en.layouts.contact')->render();
                    $contactElement = "<div class='contactElement'><span class=\"contactSpan\" >CONTACT SECTION</span></div>";
                    $description = str_replace($contactElement, $replacementContact, $description);
                    return $description;
                }
            @endphp

        </div>

        @if (strpos($post_content->description, 'dgtlNewBlogSystem') == false)
            @include('frontend.en.layouts.contact')
        @endif

        <div class="recomBlogGrid container">
            <h6>
                <a href="{{ route('en-blog') }}">CHECK OUT OUR OTHER ARTICLES</a>
            </h6>
            <div class="blogGrid">
                @foreach ($otherPosts->slice(0, 8) as $post_item)
                    <div class="miniBlog">
                        <a href="{{ url('/blog-page' . '/' . $post_item->slug) }}">
                            <figure>
                                <img src="{{ asset('uploads/blogs/' . $post_item->title_image) }}" alt="{{ $post_item->meta_title }}" />
                            </figure>
                            <span>{{ $post_item->name }}</span>
                            <p>{{ $post_item->title_description }}</p>
                            <div class="blogMoreButton">
                                More About
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
            <img class="accommdationSvg lazyload" data-src="{{ asset('assets/frontend/images/pageUp.svg') }}" />
        </a>
    </div>


@endsection

@section('javascript-imports')
    <script src="{{ asset('assets/frontend/libs/js/lc_lightbox.lite.min.js') }}" defer></script>
    <script src="{{ asset('assets/frontend/js/main.js') }}"></script>
@endsection

@section('css-imports')
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/blog.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/style.css') }}" />
<link rel="stylesheet" href="{{ asset('assets/frontend/css/booking-section.css') }}" />
@endsection
