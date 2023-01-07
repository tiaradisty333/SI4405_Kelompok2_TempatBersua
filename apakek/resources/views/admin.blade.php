<!DOCTYPE html>
<html lang="en" id="home">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>

    <script src="https://code.jquery.com/jquery-3.6.3.min.js"
        integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
        integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />

    <!-- Font montserrat -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <!-- CSS -->
    <link rel="stylesheet" href="css/style.css" />
    <title>Tempat Bersua</title>
</head>

<body>
    <header>
        <!-- navbar -->
        <div class="navbar2">
            <div class="container2">
                <div class="box-navbar2">
                    <div class="logo2">
                        <a href="explore"><img src="img/logo.png"></a>
                    </div>
                    <ul class="menu2">
                        <li><a href="foryou">For You</a></li>
                        <li><a href="like">Like</a></li>
                        <li><a href="explore">Explore</a></li>
                        </li>
                    </ul>

                    <?php if (!isset($_SESSION['id'])) { ?>
                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                        <a href="Quiz_2_login_Syeikh Bagir.php"><button class="btn me-md-3 btnlogin" type="button"><svg
                                    xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-person" viewBox="0 0 16 16">
                                    <path
                                        d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z" />
                                </svg> Login</button></a>
                    </div>

                    <?php } elseif (isset($_SESSION['id'])) { ?>
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle me-md-5" type="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <?= $data['username'] ?>
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="profile.php">Profile</a></li>
                            <li><a class="dropdown-item" href="logout.php">Logout</a></li>
                        </ul>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </div>


    </header>


    <div class="administrator">
        <div class="container-fluid admin mt-5 mb-5">

            <div class="row mt-5 mb-5">

                <div class="col-9 ms-3" style=" background-color: beige; border-radius: 10px">
                    <center>
                        <div class="mt-3">
                            <h1>Maintain Iklan</h1>
                            <hr>
                        </div>
                        <div class="scrollY" style="height: 65vh;">
                            <div class="row row-cols-1 row-cols-md-4">
                                <?php for($i=0; $i<10; $i++){ ?>
                                <div class="col px-3">
                                    <a href="#" style="text-decoration: none;">
                                        <div class="card mb-3"
                                            style="border-radius:10px; box-shadow: -5px 5px 10px rgba(128, 128, 128, 0.63);">
                                            <img src="img/eskalasi.png" class="card-img-top" alt="...">
                                            <div class="card-body">
                                                <center>
                                                    <p class="card-title" style="font-size: 1.1vmax; color:black;">Card
                                                        title
                                                    </p>
                                                    <p class="card-text" style="font-size: 0.9vmax; color:black;">This
                                                        is a
                                                        longer card with</p>
                                                </center>
                                                <a href="#" class="btn btn-primary text-white mt-3">Edit</a>
                                                <a href="#" class="btn btn-danger text-white mt-3">Delete</a>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <?php } ?>
                            </div>
                        </div>
                    </center>

                </div>
                <div class="col">
                    <div class="card mx-auto" style="height: 80vh;">
                        <div class="row mt-4">
                            <center>
                                <h2>User Login</h2>
                                <hr class="mx-2">
                            </center>
                        </div>
                        <div class="scrollY">
                            <?php for($i=0; $i<15; $i++){ ?>
                            <div class="row mb-3">
                                <div class="col-lg-2 ms-2">
                                        <img src="img/bgfood.jpg"
                                            style="border-radius: 100%; width: 50px; height: 50px; ">
                                </div>
                                <div class="col-lg ms-2 mt-3">
                                    <p class="user"><b>[nama orang]</b>
                                </div>
                            </div>
                            <?php } ?>


                        </div>
                    </div>

                </div>
            </div>

            <center>
                <div class="mt-3">
                    <h1>Approve</h1>
                    <hr style="border-top: 3px solid black;">
                </div>
            </center>
            <div class="card mx-auto scrollY" style="width: 1300px; height: 500px;">
                <table class="table table-striped-columns " style="width: 1300px;">
                    <thead>
                        <tr>
                            <th scope="col">Nama Cafe Atau Resto</th>
                            <th scope="col">Lokasi Cafe Atau Resto</th>
                            <th scope="col">Jam Buka - Jam Tutup</th>
                            <th scope="col">Rentang Harga</th>
                            <th scope="col">Keterangan</th>


                        </tr>
                    </thead>
                    <?php for($i=0; $i<10; $i++){ ?>
                    <tbody>
                        <tr>
                            <th>b</th>
                            <th>b</th>
                            <th>b</th>
                            <th>b</th>
                            <th>
                                <center>
                                    <a href="#" class="btn btn-success text-white mx-2">Post</a>
                                    <a href="#" class="btn btn-danger text-white mx-2">Decline</a>
                                </center>
                            </th>


                        </tr>
                    </tbody>
                    <?php } ?>
                </table>
            </div>
            <hr style="border-top: 3px solid black;">


            <div class="row">
                <div class="col-6">
                    <div class="row-lg-12">
                        <div class="col">
                            <h1 class="mt-5" align="center">Pasang Iklan</h1>
                            <hr style="border-top: 3px solid black;">
                            <form action="" method="" enctype="multipart/form-data" class="form_iklan">
                                <div class="card mx-auto " style="height: 70vh;">
                                    <div class="card-body scrollY">
                                        <div class="mb-3 mt-2">
                                            <label for="formGroupExampleInput" class="form-label">Nama Cafe Atau
                                                Resto</label>
                                            <input type="text" class="form-control" id="formGroupExampleInput"
                                                placeholder="Tempat Bersua Cafe..." name="nama_cafe">
                                        </div>

                                        <div class="mb-3">
                                            <label for="formGroupExampleInput" class="form-label">Lokasi Cafe Atau
                                                Resto</label>
                                            <input type="text" class="form-control" id="formGroupExampleInput"
                                                placeholder="Jalan Tempat Bersua, Bandung..." name="lokasi_cafe">
                                        </div>
                                        <div class="row">

                                            <div class="col-md-6">
                                                <label for="inputEmail4" class="form-label">Jam Buka</label>
                                                <input type="time" class="form-control" id="inputEmail4">
                                            </div>
                                            <div class="col-md-6">
                                                <label for="inputPassword4" class="form-label">Jam Tutup</label>
                                                <input type="time" class="form-control" id="inputPassword4">
                                            </div>
                                        </div>

                                        <label for="inputPassword4" class="form-label mt-3">Rentang Harga</label>
                                        <div class="row">

                                            <div class="col-md-6">
                                                <label for="inputEmail4" class="form-label">Mulai Dari</label>
                                                <div class="input-group mb-2">
                                                    <span class="input-group-text">Rp.</span>
                                                    <input type="text" class="form-control"
                                                        aria-label="Amount (to the nearest dollar)">
                                                    <span class="input-group-text">.00</span>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="inputPassword4" class="form-label">Hingga</label>
                                                <div class="input-group mb-2">
                                                    <span class="input-group-text">Rp.</span>
                                                    <input type="text" class="form-control"
                                                        aria-label="Amount (to the nearest dollar)">
                                                    <span class="input-group-text">.00</span>
                                                </div>
                                            </div>
                                        </div>
                                        <label for="inputPassword4" class="form-label mt-3 mb-0">Input Foto</label>

                                        <div class="input-group mt-3 mb-3">
                                            <input class="form-control" id="foto_thumb" name="foto_thumb"
                                                type="file" accept=".jpg, .png, .jpeg">
                                            <label class="input-group-text" for="inputGroupFile02"
                                                style="width: 10vw;">Foto
                                                Thumbnail</label>
                                        </div>
                                        <div class="prev-thumb"></div>


                                        <div class="input-group mt-3 mb-3">
                                            <input class="form-control" id="foto_slide" name="foto_slide"
                                                type="file" multiple accept=".jpg, .png, .jpeg">
                                            <label class="input-group-text" for="inputGroupFile02"
                                                style="width: 10vw;">Foto
                                                Slide</label>
                                        </div>
                                        <div class="prev-slide"></div>

                                        <div class="input-group mt-3 mb-3">
                                            <input class="form-control" id="foto_menu" name="foto_menu"
                                                type="file" multiple accept=".jpg, .png, .jpeg">
                                            <label class="input-group-text" for="inputGroupFile02"
                                                style="width: 10vw;">Foto
                                                Menu</label>
                                        </div>
                                        <div class="prev-menu"></div>

                                    </div>

                                    <div class="d-grid gap-2 mx-4 mt-3 mb-3">
                                        <button class="btn btn-primary btn-success" type="submit"
                                            name="post">Pasang
                                            Iklan
                                            Sekarang</button>
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>

                <div class="col">

                </div>
            </div>


        </div>
    </div>



    <script>
        $("#foto_thumb").change(function(e) {
            $('.flag_thumb').remove();

            let count = 1;
            let files_thumb = e.currentTarget.files;
            let imgcode = [];
            let final;

            if (e.currentTarget.files.length > 1) {
                alert("File Terlalu Banyak! Maksimal Upload 1");
                this.value = "";
                return false;
            } else {
                for (let x in files_thumb) {

                    if (files_thumb[x].size > 5048576) {
                        alert("File Terlalu Besar!");
                        this.value = "";
                        return false;
                    } else {
                        var dir = URL.createObjectURL(files_thumb[x]);
                        $('.prev-thumb').prepend('<img class="flag_thumb mx-1" src="' + dir +
                            '" width="50" height="50" style="border-radius:10px">');
                    }

                }
            }
        });

        $("#foto_slide").change(function(e) {
            $('.flag_slide').remove();

            let count = 1;
            let files_slide = e.currentTarget.files;
            let imgcode = [];
            let final;

            if (e.currentTarget.files.length > 10) {
                alert("File Terlalu Banyak! Maksimal Upload 10");
                this.value = "";
                return false;
            } else {
                for (let x in files_slide) {

                    if (files_slide[x].size > 5048576) {
                        alert("File Terlalu Besar!");
                        this.value = "";
                        return false;
                    } else {
                        var dir = URL.createObjectURL(files_slide[x]);
                        $('.prev-slide').prepend('<img class="flag_slide mx-1" src="' + dir +
                            '" width="50" height="50" style="border-radius:10px">');
                    }

                }
            }
        });

        $("#foto_menu").change(function(e) {
            $('.flag_menu').remove();

            let count = 1;
            let files_menu = e.currentTarget.files;
            let imgcode = [];
            let final;

            if (e.currentTarget.files.length > 10) {
                alert("File Terlalu Banyak! Maksimal Upload 10");
                this.value = "";
                return false;
            } else {
                for (let x in files_menu) {

                    if (files_menu[x].size > 5048576) {
                        alert("File Terlalu Besar!");
                        this.value = "";
                        return false;
                    } else {
                        var dir = URL.createObjectURL(files_menu[x]);
                        $('.prev-menu').prepend('<img class="flag_menu mx-1" src="' + dir +
                            '" width="50" height="50" style="border-radius:10px">');
                    }

                }
            }
        });
    </script>

</body>

</html>
