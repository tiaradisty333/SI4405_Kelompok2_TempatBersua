@extends('navbar')
@section('content')
<div class="semua">
    <div class="bg1">
        <div class="carousel">
            <div class="swiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img class="gambar" src="{{ asset('gambar_resto/dua kopi.jpg') }}">
                        <div class="text">JATI</div>
                        <div class="caption">Talaga Bodas St No.44, Malabar, Lengkong, Bandung City, West Java 40262
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <img class="gambar" src="{{ asset('gambar_resto/carousel-2.jpg') }}">
                        <div class="text">KISAH MANIS</div>
                        <div class="caption">Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo,
                            reprehenderit!</div>
                    </div>

                    <div class="swiper-slide">
                        <img class="gambar" src="{{ asset('gambar_resto/carousel-3.jpg') }}">
                        <div class="text">MARKA</div>
                        <div class="caption">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Adipisci, dolor?
                        </div>
                    </div>

                </div>

                <div class="swiper-pagination"></div>

                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            </div>
        </div>
    </div>
    <div class="bg2">
        <img class="kopi1" src="{{ asset('img/kopi1.png')}}">
        <img class="kopi2" src="{{ asset('img/kopi2.png')}}">
        <img class="kopi3" src="{{ asset('img/kopi3.png')}}">
        <img class="kopi4" src="{{ asset('img/kopi4.png')}}">

        <div class="kopi">
            <p><b>Searching For Caffe ? <b></p>
        </div>
        <div class="kosu">
            <p>What Would You Like To Try Right Now?
                Now It's Coffee Milk Season.
                Try Our Selection Of Coffee Milk</p>
        </div>
        <a href="#"><button class="carikopi">
                Coffee Milk
            </button></a>
        <a href="#"><button class="explore">
                Explore</button></a>
    </div>


    <div class="bg3">
        <a href="#"><img class="cafe1" src="{{ asset('img/cafe1.png')}}"></a>
        <a href="#"><img class="cafe2" src="{{ asset('img/cafe2.png')}}"></a>
        <a href="#"><img class="cafe3" src="{{ asset('img/cafe3.png')}}"></a>
        <a href="#"><img class="cafe4" src="{{ asset('img/cafe4.png')}}"></a>

        <div class="cafe">
            <p><b>Save Plaves You Liked<b></p>
        </div>
        <div class="wishlist">
            <p>Choose The Place You Like Without Having To Look For It Again</p>
        </div>
        <a href="#"><button class="like">
                Likes
            </button></a>
    </div>


</div>


<script src="{{ asset('java/script.js')}}"></script>

@endsection
