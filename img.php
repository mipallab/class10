<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image Uploading</title>

    
    <!-- bootstrap css CDN-->
    <link rel="stylesheet" href="./assect/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

</head>
<body>
    
    <div class="img-show w-25 mx-auto my-5 shadow">
        <div class="card">
            <div class="card-header">
                <h2>Img upload</h2>
            </div>
            <div class="card-body">
                <form action="" method="POST" enctype="multipart/form-data">

                   <div class="form-group">
                        <img  class="w-100 preload" src="" alt="">
                        <br><br>
                        <label for="photo"><img style="cursor:pointer;" src="./assect/img/camera.png" alt="camera"></label>
                        <input  class="d-none " id="photo" type="file" >
                   </div>

                    <div class="form-group">
                        <input class="btn btn-primary" type="submit" value="Upload">
                    </div>
                </form>
            </div>
        </div>
    </div>



    <!-- javascript cdn -->
    <script src="./assect/js/jquery.slim.min.js"></script>
    <script src="./assect/js/bootstrap.bundle.min.js" ></script>
    <script>
        $('#photo').change(function(e) {
            let url = URL.createObjectURL(e.target.files[0]);
            $(".preload").attr('src',url);
        });
    </script>

</body>
</html>