@include('navbar2')

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
<script async src="https://instagram.com/static/bundles/es6/EmbedSDK.js/47c7ec92d91e.js"></script>

<div class="formiklan">
    <div class="container-fluid iklan m-5">
        <div class="row-lg-12">
            <div class="col">
                <h1 class="mt-5 text-white" align="center">Pasang Iklan</h1>
                <hr style="border-top: 3px solid white; opacity: 1;">
                <div class="card mb-3" style="height: 70vh">
                    <div class="card-body scrollY">
                        <form action="" method="" enctype="multipart/form-data" class="form_iklan">
                            <div class="mb-3 mt-4">
                                <label for="formGroupExampleInput" class="form-label">Nama Cafe Atau Resto</label>
                                <input type="text" class="form-control" id="formGroupExampleInput"
                                    placeholder="Tempat Bersua Cafe..." name="nama_cafe">
                            </div>

                            <div class="mb-3">
                                <label for="formGroupExampleInput" class="form-label">Lokasi Cafe Atau Resto</label>
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

                            <div class="input-group mt-3 mb-3">
                                <input class="form-control" id="foto_thumb" name="foto_thumb" type="file"
                                    accept=".jpg, .png, .jpeg">
                                <label class="input-group-text" for="inputGroupFile02" style="width: 10vw;">Foto
                                    Thumbnail</label>
                            </div>
                            <div class="prev-thumb"></div>

                            <div class="input-group mt-3 mb-3">
                                <input class="form-control" id="foto_slide" name="foto_slide" type="file" multiple
                                    accept=".jpg, .png, .jpeg">
                                <label class="input-group-text" for="inputGroupFile02" style="width: 10vw;">Foto
                                    Slide</label>
                            </div>
                            <div class="prev-slide"></div>
                    </div>

                    <div class="d-grid gap-2 mx-4 mt-3 mb-3">
                        <button class="btn btn-primary btn-success" type="submit" name="post">Pasang
                            Iklan
                            Sekarang</button>
                    </div>
                    </form>
                </div>
            </div>

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

                if (files_thumb[x].size > 1048576) {
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
        let files_thumb = e.currentTarget.files;
        let imgcode = [];
        let final;

        if (e.currentTarget.files.length > 10) {
            alert("File Terlalu Banyak! Maksimal Upload 10");
            this.value = "";
            return false;
        } else {
            for (let x in files_thumb) {

                if (files_thumb[x].size > 1048576) {
                    alert("File Terlalu Besar!");
                    this.value = "";
                    return false;
                } else {
                    var dir = URL.createObjectURL(files_thumb[x]);
                    $('.prev-slide').prepend('<img class="flag_slide mx-1" src="' + dir +
                        '" width="50" height="50" style="border-radius:10px">');
                }

            }
        }
    });
</script>
