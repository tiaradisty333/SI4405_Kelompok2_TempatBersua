@include('navbar')
<div class="semua">
    <div class="bg1">
        <div class="carousel">
            <div class="swiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img class="gambar" src="img/jati.jpg">
                        <div class="text">JATI</div>
                        <div class="caption">Talaga Bodas St No.44, Malabar, Lengkong, Bandung City, West Java 40262
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <img class="gambar" src="img/kisahmanis.jpg">
                        <div class="text">KISAH MANIS</div>
                        <div class="caption">Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo,
                            reprehenderit!</div>
                    </div>

                    <div class="swiper-slide">
                        <img class="gambar" src="img/marka.jpg">
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
        <img class="kopi1" src="img/kopi1.png">
        <img class="kopi2" src="img/kopi2.png">
        <img class="kopi3" src="img/kopi3.png">
        <img class="kopi4" src="img/kopi4.png">

        <div class="kopi">
            <p><b>Searching For Caffe ? <b></p>
        </div>
        <div class="kosu">
            <p>Apa yang ingin kamu coba saat ini ?
                sekarang lagi musimnya kopi susu.
                cobalah kopi susu pilihan dari kami</p>
        </div>
        <a href="#"><button class="carikopi">
                Kopi Susu Enak
            </button></a>
        <a href="#"><button class="explore">
                Explore</button></a>
    </div>


    <div class="bg3">
        <a href="#"><img class="cafe1" src="img/cafe1.png"></a>
        <a href="#"><img class="cafe2" src="img/cafe2.png"></a>
        <a href="#"><img class="cafe3" src="img/cafe3.png"></a>
        <a href="#"><img class="cafe4" src="img/cafe4.png"></a>

        <div class="cafe">
            <p><b>Save Plaves You Liked<b></p>
        </div>
        <div class="wishlist">
            <p>Pilih Tempat Yang Kamu Sukai Tanpa Perlu Mencari Nya Kembali</p>
        </div>
        <a href="#"><button class="like">
                Likes
            </button></a>
    </div>

    <div class="bg4" id="daftar">
        <div class="card">
            <center>
                <div class="cardheader">

                    <img src="img/logo.png">
                    <br>
                    <h1>Welcome To Tempat Bersua</h1>
                    <!-- <br> -->
                    <p>Find Food And Places</p>
                </div>
            </center>
            <br>
            <hr>
            <form action="/register" method="POST">
                <label for="username" class="label">Username</label>
                <input type="text" class="kotakform" id="" name="kotakform">

                <label for="password" class="label">Password</label>
                <input type="password" class="kotakform" id="" name="kotakform">

                <label for="name" class="label">Nickname</label>
                <input type="text" class="kotakform" id="" name="kotakform">

                <label for="email" class="label">Email</label>
                <input type="email" class="kotakform" id="" name="kotakform">

                <button class="continue" type="submit">Continue</button>
                <p align="center" style="margin-top: 5px; font-size: 18px;">Or</p>
                <button class="login" type="submit">Login</button>
                <p align="center"
                    style="font-size: 11px; font-weight: 300; width: 300px; margin-left: 65px; margin-top: 10px;">by
                    continuing, you agree to Tempat Bersua <b>Terms of service</b> and acknowledge you've read
                    our<b>privacy policy. notice at collection.</b></p>
            </form>
        </div>
    </div>
</div>


<script src="java/script.js"></script>
