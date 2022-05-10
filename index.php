<?php
   require_once "./assect/app/autoload.php";
   //require_once "./assect/app/function.php";
   //require_once "./assect/app/config.php";
   //$connect = new mysqli("localhost",'root','','udichi');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="./assect/css/style.css">

    <!-- bootstrap css CDN-->
    <link rel="stylesheet" href="./assect/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
</head>
<body>

    <div class=" w-50 mx-auto my-5">
        <div class="card">
            <div class="card-header"><h2>Sign Up</h2></div>
            <div class="card-body">

                
                <?php 
                  echo $msg ?? '';
                ?>
        
                <form action="" method="POST">
                
                    
                    <div class="form-group">
                        <label for="fname">Name</label>
                            <input type="text" class="form-control" name="name" value ="<?php echo old('name')?>">
                        <?php
                            if(isset($error['full_name'])) {
                                echo "<b class=\"text-danger\">". $error['full_name'] . "</b>";
                                    
                            }
                        ?>
                    </div>

                    <div class="form-group">
                        <label for="fname">Father's Name</label>
                        <div class="form-row">
                            <div class="col">
                                <input type="text" class="form-control " name="father_name" value ="<?php echo old('father_name')?>">
                                <?php
                                    if(isset($error['father_name'])) {
                                        echo "<b class=\"text-danger\">". $error['father_name'] . "</b>";
                                            
                                    }
                                ?>
                            </div>
                            <div class="col">
                                <input type="tel" class="form-control " placeholder="active cell number" name= "father_cell" value ="<?php echo old('father_cell')?>">
                                <?php
                                    if(isset($error['father_cell'])) {
                                        echo "<b class=\"text-danger\">". $error['father_cell'] . "</b>";
                                            
                                    }
                                ?>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="fname">Mother's Name </label>
                        <div class="form-row">
                            <div class="col">
                                <input type="text" class="form-control" name="mother_name" value ="<?php echo old('mother_name')?>">
                                <?php
                                    if(isset($error['mother_name'])) {
                                        echo "<b class=\"text-danger\">". $error['mother_name'] . "</b>";
                                            
                                    }
                                ?>
                            </div>
                            <div class="col">
                                <input type="tel" class="form-control " placeholder="active cell number" name="mother_cell" value ="<?php echo old('mother_cell')?>">
                                <?php
                                   if(isset($error['mother_cell'])) {
                                        echo "<b class=\"text-danger\">". $error['mother_cell'] . "</b>";    
                                   }
                                ?>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="form-row">
                            <div class="col">
                                <label for="">Date of Birth</label>
                                <input type="date" class="form-control" name="date_of_birth" value ="<?php echo old('date_of_birth')?>">
                                <?php
                                   if(isset($error['date_of_birth'])) {
                                        echo "<b class=\"text-danger\">". $error['date_of_birth'] . "</b>";    
                                   }
                                ?>
                            </div>
                            <div class="col">
                                <label for="">Admitted Phone Num</label>
                                <input type="tel" class="form-control" placeholder="active cell number" name="cell_num" value ="<?php echo old('cell_num')?>">
                                <?php
                                   if(isset($error['cell'])) {
                                        echo "<b class=\"text-danger\">". $error['cell'] . "</b>";    
                                   }
                                ?>
                            </div>
                        </div> 
                    </div>

                    <div class="form-group">
                        <label for="vtitle">Visitor Title</label>
                        <select id="vtitle" class="form-control" name="visitor_title" value ="<?php echo old('visitor_title')?>">
                            <option  value="">-select-</option>
                            <option <?php echo old('visitor_title') == 'Student' ? 'selected': ''?> value="Student">Student</option>
                            <option <?php echo old('visitor_title') == 'Teacher' ? 'selected': ''?> value="Teacher">Teacher</option>
                            <option <?php echo old('visitor_title') == 'Presedent' ? 'selected': ''?> value="Presedent">Presedent</option>
                            <option <?php echo old('visitor_title') == 'Admin' ? 'selected': ''?> value="Admin">Admin</option>
                        </select>
                        <?php
                            if(isset($error['visitor_title'])) {
                                echo "<b class=\"text-danger\">". $error['visitor_title'] . "</b>";    
                            }
                        ?>
                    </div>

                    <div class="form-group">
                        <label for="">Interested Subject</label><br>
                        <label for="song">      
                            <input <?php echo old('$value') == "song" ? "checked" : "" ?> id="song" type="checkbox" name="interested_sub[]" value="song" > Song   
                        </label>
                        <label for="dance"> 
                            <input <?php echo old('$value') == "dance" ? "checked" : "" ?> id="dance" type="checkbox" name="interested_sub[]" value="dance" > Dance   
                        </label>
                        <label for="art"> 
                            <input <?php echo old('$value') == "art" ? "checked" : "" ?> id="art" type="checkbox" name="interested_sub[]" value="art"> Art
                        </label>
                        <label for="tobla"> 
                            <input <?php echo old('$value') == "tobla" ? "checked" : "" ?> id="tobla" type="checkbox" name="interested_sub[]" value="tobla"> Tobla
                        </label>
                        <label for="writting"> 
                            <input <?php echo old('$value') == "hand_writting" ? "checked" : "" ?> id="writting" type="checkbox" name="interested_sub[]" value="hand_writting"> Hand Writting
                        </label>

                        <?php
                            if(!isset($interested_sub)) {
                                echo "<b class=\"text-danger\"> *Required</b>";    
                            }
                        ?>
                    </div>

                    <div class="form-group">
                        <label for="email">Email</label>
                        <input id="email" type="text" class="form-control" name = "email" value="<?php echo old('email')?>">
                        <?php
                            if(isset($error['email'])) {
                                echo "<b class=\"text-danger\">" . $error['email'] . "</b>";    
                            }
                        ?>
                    </div>

                    <div class="form-group">
                        <div class="form-row">
                            <div class="col">
                                <label for="">Password</label>
                                <input type="password" class="form-control" name = "password" value="<?php echo old('password')?>">
                                <?php
                                    if(isset($error['password'])) {
                                        echo "<b class=\"text-danger\">" . $error['password'] . "</b>";    
                                    }
                                ?>
                            </div>
                            <div class="col">
                                <label for="">Confarm Password</label>
                                <input type="password" class="form-control" name ="com_pass" value="<?php echo old('com_pass')?>">
                                <?php
                                    if(isset($error['comfarm_password'])) {
                                        echo "<b class=\"text-danger\">" . $error['comfarm_password'] . "</b>";    
                                    }
                                    else {
                                        if(isset($match_pass)) {
                                            echo "<b class=\"text-warning\">" . $match_pass . "</b>";
                                        }
                                    }
                                ?>
                            </div>
                        </div>
                    </div>
                    
                    
                    <p><input type="checkbox" name="conditation"> I accept the <a href="#">treams & condation.</a>
                    <br>
                    <?php
                        if(isset($error['conditation'])) {
                            echo "<span class=\"text-warning\">" . $error['conditation'] . "</span>";    
                        }
                    ?>
                    </p>

                    <br>

                    <div class="form-group">
                    <input name="submit" type="submit" class="btn btn-primary" value="Sign Up">
                </div>

                </form>
            </div>
            <div class="card-footer">
                <a href="#" class = "text-primary">All ready have an account ?</a>
            </div>
        </div>
    </div>



    <!-- javascript cdn -->
    <script src="./assect/js/jquery.slim.min.js"></script>
    <script src="./assect/js/bootstrap.bundle.min.js" ></script>

</body>
</html>