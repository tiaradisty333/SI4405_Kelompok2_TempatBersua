@include('navbar')

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
        <br>
        <br>
        <form action="/register" method="POST">
            <label for="username" class="label">Username</label>
            <input type="text" class="kotakform" id="" name="kotakform">

            <label for="password" class="label">Password</label>
            <input type="password" class="kotakform" id="" name="kotakform">

            {{-- <label for="name" class="label">Nickname</label>
            <input type="text" class="kotakform" id="" name="kotakform">

            <label for="email" class="label">Email</label>
            <input type="email" class="kotakform" id="" name="kotakform"> --}}
            <br>
            <br>

            <button class="continue" type="submit">Continue</button>
            <p align="center" style="margin-top: 5px; font-size: 18px;">Or</p>
            <button class="login" type="submit">Login</button>

            <br>
            <br>
            <p align="center"
                style="font-size: 11px; font-weight: 300; width: 300px; margin-left: 65px; margin-top: 10px;">by
                continuing, you agree to Tempat Bersua <b>Terms of service</b> and acknowledge you've read
                our<b>privacy policy. notice at collection.</b></p>
        </form>
    </div>
</div>
