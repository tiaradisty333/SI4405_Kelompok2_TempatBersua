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
                    <form class="d-flex" role="search">
                        {{-- <input class="me-4 searchnav" type="search" placeholder="Search" aria-label="Search"> --}}
                        <button class="searchnav" type="submit">Search</button>
                    </form>

                    <?php if (!isset($_SESSION['id'])) { ?>
                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                        <a href=""><button class="btn me-md-3 btnlogin" type="button"><svg
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
</body>

</html>
