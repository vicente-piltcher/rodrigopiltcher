@extends('layout.main')

@section('title', 'Rodrigo Piltcher')

@section('fotos-passando')

    <div class="container-fluid" style="border: 1px solid blue">
        <div id="mainSlider" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#mainSlider" data-slide-to="0" class="active"></li>
                <li data-target="#mainSlider" data-slide-to="1"></li>
                <li data-target="#mainSlider" data-slide-to="2"></li>
                <li data-target="#mainSlider" data-slide-to="3"></li>
                <li data-target="#mainSlider" data-slide-to="4"></li>
                <li data-target="#mainSlider" data-slide-to="5"></li>
            </ol>

            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100 " src="{{ Vite::asset('resources/images/fotospassando/img5') }}" alt="">
                </div>
            </div>
        </div>
    </div>

@endsection

@section('style')
    
@endsection