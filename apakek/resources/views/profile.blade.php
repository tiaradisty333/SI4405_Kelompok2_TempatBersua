@include('navbar2')

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
<script async src="https://instagram.com/static/bundles/es6/EmbedSDK.js/47c7ec92d91e.js"></script>

<div class="profile">

    <div class="container-fluid" style="background-color: #f5d4d4; margin-top: 10vh;">
        <br>
        <br>
        <p class="text-center fw-bold mt-3" style="font-size: 32px;">Profile</p>

        <form action="." method="POST">
            <div class="row mx-3">
                <div class="col">
                    {{-- <div class="profile-pic">
                        <label class="-label" for="file">
                          <span class="glyphicon glyphicon-camera"></span>
                          <span>Change Image</span>
                        </label>
                        <input id="file" type="file" onchange="loadFile(event)"/>
                        <img src="img/kopi1.png" id="output" width="200" />
                      </div> --}}
                      <div class="row">
                        <div class="small-12 medium-2 large-2 columns">
                          <div class="circle ms-5">
                            <img class="profile-pic" src="https://t3.ftcdn.net/jpg/03/46/83/96/360_F_346839683_6nAPzbhpSkIpb8pmAwufkC7c5eD7wYws.jpg">

                          </div>
                          <div class="p-image">
                            <i class="fa fa-camera upload-button"></i>
                             <input class="file-upload" type="file" accept="image/*"/>
                          </div>
                       </div>
                     </div>
                </div>
                <div class="col-9">
                    <div class="mb-3 row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Nama</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="staticEmail" name="namaregis" value="">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Username</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="staticEmail" name="username" value="">
                        </div>
                    </div>
                    <hr>
                    <div class="mb-3 row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Password</label>
                        <div class="col-sm-10">
                            <input type="password" class="form-control" id="staticEmail" name="pw">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Confirm Password</label>
                        <div class="col-sm-10">
                            <input type="password" class="form-control" id="staticEmail" name="pwbaru">
                        </div>
                    </div>
                    <button type="submit" name="update" class="btn btn-primary">Update</button>
                </div>
            </div>

        </form>
    </div>

</div>
<script>
// var loadFile = function (event) {
//   var image = document.getElementById("output");
//   image.src = URL.createObjectURL(event.target.files[0]);
// };
$(document).ready(function() {


var readURL = function(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('.profile-pic').attr('src', e.target.result);
        }

        reader.readAsDataURL(input.files[0]);
    }
}


$(".file-upload").on('change', function(){
    readURL(this);
});

$(".upload-button").on('click', function() {
   $(".file-upload").click();
});
});
</script>
