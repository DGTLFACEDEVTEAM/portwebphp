@extends('frontend.en.layouts.master')

@section('title', 'Registercard - Port Nature Luxury Resort Hotel Spa')
@section('description', 'Registercard of Port Nature Luxury Resort Hotel Spa. Ultra all inclusive five star hotel in Kadriye Antalya. Contact for reservations and best offers.')

@section('header-lang')

<li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="{{ route('contacts') }}"
       aria-expanded="false">EN</a>
    <ul class="dropdown-menu dropdownmobile language">
        <li><a class="dropdown-item" href="{{ route('tr-contacts') }}">TR</a></li>
        <li><a class="dropdown-item" href="{{ route('ru-contacts') }}">RU</a></li>
        <li><a class="dropdown-item first-item" href="{{ route('de-contacts') }}">DE</a></li>
    </ul>
</li>

@endsection

@section('content')

    <main>
        <div class="content">
       <div class="parent">

            <div class="div1"> 
                <p>selam</p>
            </div>
            <div class="div2">
                <p>selam</p>    
            </div>
            <div class="div3">
                <p>selam</p>    
            </div>
            <div class="div4">
                <p>selam</p>    
            </div>
            </div>
            
        </div>
 

    </main>

@endsection

@section('javascript-imports')
@endsection

@section('css-imports')
<link rel="stylesheet" href="{{ asset('assets/frontend/css/registercard.css') }}"/>

@endsection