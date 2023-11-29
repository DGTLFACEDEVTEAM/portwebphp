@extends('layouts.main', ['lang' => 'tr'])

@section('title', 'Blog Sayfası - Port Nature Luxury Resort Hotel Spa')
@section('description', 'Blog Sayfası Port Nature Luxury Resort. Belek in en iyi ultra herşey dahil aile oteli. Sitemizi ziyaret edin ve avantajlı fırsatları kaçırmayın.')

@section('header-lang')

<li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="{{ route('tr-blog') }}"
       aria-expanded="false">TR</a>
    <ul class="dropdown-menu dropdownmobile language">
        <li><a class="dropdown-item" href="{{ route('en-blog') }}">EN</a></li>
        <li><a class="dropdown-item" href="{{ route('ru-blog') }}">RU</a></li>
        <li><a class="dropdown-item" href="{{ route('de-blog') }}">DE</a></li>
    </ul>
</li>

@endsection

@section('content')
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/blog.css') }}"/>

<div class="blogHero">
    <h1>Antalya Türkiye bölgesindeki en iyi aile otelleri<br>
        Port Nature Luxury Resort Hotel & Spa Blog </h1>
    <div class="mobileText">
        <h2>Port Nature Luxury Resort Hotel & Spa Blog </h2>
        <h3>Antalya Türkiye bölgesindeki en iyi aile otelleri</h3>
    </div>
</div>
<div class="recomBlogGrid">
    <div class="blogGrid">
        
        @foreach ($postsList as $post)
            <div class="miniBlog">
                <a href="{{ url('/blog-sayfasi'.'/'.$post->slug) }}">
                    <figure class="text-center">
                        <img src="{{ asset('uploads/blogs/' . $post->title_image) }}" alt="{{ $post->meta_title }}"/>
                    </figure>
                    <span>{{ $post->name }}</span>
                    <p>{{ $post->title_description }}</p>
                    <div class="blogMoreButton">
                        Daha Fazlası
                    </div>
                </a>
            </div>
    @endforeach    

    </div>
</div>
<!-- Contact -->
@include('frontend.tr.layouts.contact')
<!-- Contact End -->
<div class="pageUpButton">
    <div class="row">
        <div class="col-md-12 text-center">
            <a href="#">
                <svg width="21" height="19" viewBox="0 0 21 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M20 18L10.5 8L1 18" stroke="#233038" stroke-opacity="0.8" stroke-width="2"
                          stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M17 8L10.5 1L4 8" stroke="#233038" stroke-opacity="0.8" stroke-width="2"
                          stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </a>
        </div>
    </div>
</div>

@endsection