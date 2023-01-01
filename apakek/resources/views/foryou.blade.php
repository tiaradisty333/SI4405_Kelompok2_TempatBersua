@include('navbar2')

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
<script async src="https://instagram.com/static/bundles/es6/EmbedSDK.js/47c7ec92d91e.js"></script>

<div class="bg5">
    <div class="container-fluid mx-5 mt-5">
        <div class="pilihan">
            Pilihan Tempat Bersua Untuk [namauser], Di <a class="btnlokasi" href="#">[namalokasi]
            </a>

        </div>
        <div class="row">
            <div class="col-lg pe-4" style="border-right: 5px solid rgb(197, 141, 73)">
                <div class="tabel">
                    <div class="row row-cols-1 row-cols-md-3">
                        <?php for($i=0; $i<6; $i++){ ?>
                        <div class="col px-5">
                            <a href="detail" style="text-decoration: none;">
                                <div class="card mb-3" style="border-radius:10px; box-shadow: -5px 5px 10px grey; color:#080717">
                                    <img src="img/eskalasi.png" class="card-img-top" alt="...">
                                    <div class="card-body" style="height: 10vh">
                                        <center>
                                            <p class="card-title" style="font-size: 1.1vmax;">Card title</p>
                                            <p class="card-text" style="font-size: 0.9vmax;">This is a longer card with
                                            </p>
                                        </center>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <?php } ?>
                    </div>
                    <a href="explore" class="ms-3"
                        style="font-size: 1.1vmax; color: #080717; text-decoration: none"><b>>> View More</b></a>
                </div>
            </div>
            <div class="col-lg-2 ps-0">
                <div class="news ps-4">
                    {{-- <div class="vertikal"></div> --}}
                    {{-- <div class="rekomen">
                </div> --}}
                    <center>
                        <p class="rekomen" align="center">Rekomendasi Dari Tempat Bersua</p>
                    </center>
                    <div class="artikel">
                        <div class="">
                            <a href=""><img src="img/eskalasi.png" class="rounded d-block mb-3"
                                    alt="..."></a>
                        </div>

                        <div class="">
                            <a href=""><img src="img/eskalasi.png" class="rounded d-block mb-3"
                                    alt="..."></a>
                        </div>
                        <div class="">
                            <a href=""><img src="img/eskalasi.png" class="rounded d-block mb-3"
                                    alt="..."></a>
                        </div>

                    </div>
                </div>

            </div>
        </div>
        <br><br>
        <div class="row-lg-12">
            <h1 class="addiklan_h1 mt-5 mb-4">Pasang Iklan Di Tempat Bersua !!!</h1>
            <div class="col-lg-12 pe-4 pt-3">
                <div class="mb-5" style="width: 100%;">
                    <div class="row row-cols-1 row-cols-md-4">
                        <?php $url = './img/kopi2.png';
                        for($i=0; $i<4; $i++){ ?>
                        <div class="col">
                            <a href="formiklan" style="text-decoration: none;">
                                <div class="addiklan cards" style="background-image: url('<?= $url ?>');">
                                    <center>
                                        <h5 class="addiklan card-title pt-2" align="center">Waroeng Babagi</h5>
                                    </center>
                                </div>
                            </a>
                        </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
