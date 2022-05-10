<?php 
    require_once "./assect/app/function.php";

    if(isset($_POST['submit'])){
        
        //gets data
        $name = $_POST['name'];
        $age = $_POST['age'];
        $gender = $_POST['gender'] ?? '';

        if(empty($name)|| empty($age) || empty($gender)) {
            $msg = alertMsg("All fields are require!");
        }
        else {
            $_POST = '';
            $msg = alertMsg("Data Checking>>>>>",'success');

            $output = adultAge($name, $age, $gender);

        }
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Marrage App</title>
</head>
<body>
    <!-- bootstrap css CDN-->
    <link rel="stylesheet" href="./assect/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

        <div class="marrage-form w-25 mx-auto my-5 shadow rounded">
            <div class="card">
                <div class="card-header text-center">
                    <h2>Marrrage age Checker</h2>
                </div>
                <div class="card-body">
                
                    <form action="" method="POST">
                        <?php echo $msg ?? ''; ?>
                        <div class="form-group">
                            <label for="name"> Name</label>
                            <input class="form-control" id="name"  type="text" name="name" value="<?php echo old('name') ?>" >
                        </div>
                        <div class="form-group">
                            <label for="age">Age</label>
                            <input class="form-control" id="age"  type="text" name="age" value="<?php echo old('age') ?>" >
                        </div>
                        <div class="form-group">
                            <input class="" id="male" <?php echo  (old('gender') == 'male') ? 'checked' : ''?> type="radio" name="gender" value="male"> <label for="male">Male</label>
                            <input class="" id="female" <?php echo  (old('gender') == 'female') ? 'checked' : ''?> type="radio" name="gender" value="female"> <label for="female">Female</label>
                        </div>

                        <div class="form-group">
                            <input class="btn btn-primary" type="submit" name="submit" value="Check"> 
                        </div>
                    </form>
                </div>
                <div class="card-footer">
                    <p><?php echo $output ?? ''; ?></p>
                </div>
            </div>
        </div>


    <!-- javascript cdn -->
    <script src="./assect/js/jquery.slim.min.js"></script>
    <script src="./assect/js/bootstrap.bundle.min.js" ></script>

</body>
</html>