@extends('layouts.main', ['lang' => 'tr'])

@section('title', 'Tedarikçi Yetkilisinin Sözleşme Süreçleri Metni - Port Nature Luxury Resort Hotel Spa')
@section('description', 'KVKK Port Nature Luxury Resort Hotel Spa. Denize sıfır en iyi 10 aile dostu Antalya oteli. Tek tıkla her şey dahil tatil rezervasyonu yapın.')


@section('content')
<div class="d-flex  justify-content-center align-items-start" style="margin-top:100px;min-height: calc(100vh - 515px);">

    <div class="container mt-5 px-5">
        <!-- Nav tabs -->
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="langtr-tab" data-bs-toggle="tab" data-bs-target="#langtr" type="button" role="tab" aria-controls="langtr" aria-selected="true">TR</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="langen-tab" data-bs-toggle="tab" data-bs-target="#langen" type="button" role="tab" aria-controls="langen" aria-selected="false">EN</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="langde-tab" data-bs-toggle="tab" data-bs-target="#langde" type="button" role="tab" aria-controls="langde" aria-selected="false">DE</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="langru-tab" data-bs-toggle="tab" data-bs-target="#langru" type="button" role="tab" aria-controls="langru" aria-selected="false">RU</button>
            </li>
        </ul>

        <!-- Tab panes -->
        <div class="tab-content mt-3" id="myTabContent">
            <div class="tab-pane fade show active" id="langtr" role="tabpanel" aria-labelledby="langtr-tab">
            
            </div>
            <div class="tab-pane fade" id="langen" role="tabpanel" aria-labelledby="langen-tab">
               
            </div>
            <div class="tab-pane fade" id="langde" role="tabpanel" aria-labelledby="langde-tab">
             
            </div>
            <div class="tab-pane fade" id="langru" role="tabpanel" aria-labelledby="langru-tab">
                
            </div>
        </div>
    </div>
</div>
@endsection

@section('javascript-imports')
@endsection

@section('css-imports')
<link rel="stylesheet" href="{{ asset('assets/frontend/css/data-policy.css') }}"/>
@endsection