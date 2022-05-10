<?php

    if(isset($_POST['submit'])) {
        
        $error = [];

        $full_name = $_POST['name'];
        if(empty($_POST['name'])){
            $error['full_name'] = "*Required";
        }

        $father_name = $_POST['father_name'];
        if(empty($_POST['father_name'])){
            $error['father_name']= "*Required";
        }

        $father_cell = $_POST['father_cell'];
        if(empty($_POST['father_cell'])){
            $error['father_cell']= "*Required";
        }

        $mother_name = $_POST['mother_name'];
        if(empty($_POST['mother_name'])){
            $error['mother_name']= "*Required";
        }

        $mother_cell = $_POST['mother_cell'];
        if(empty($_POST['mother_cell'])){
            $error['mother_cell']= "*Required";
        }

        $date_of_birth = $_POST['date_of_birth'];
        if(empty($_POST['date_of_birth'])){
            $error['date_of_birth']= "*Required";
        }
        
        $cell = $_POST['cell_num'];
        if(empty($_POST['cell_num'])){
            $error['cell']= "*Required";
        }

        $visitor_title = $_POST['visitor_title'] ?? '';
        if(empty($_POST['visitor_title'])){
            $error['visitor_title']= "*Required";
        }

        
        //intersested item gets porcess
        if(isset($_POST['interested_sub'])) {
            foreach($_POST['interested_sub'] as $value){
               $interested_sub = $value;
            }
        }

        $email = $_POST['email'];
        if(empty($_POST['email'])){
            $error['email']= "*Required";
        }

        $password = $_POST['password'];
        if(empty($_POST['password'])){
            $error['password']= "*Required";
        }
        $comfarm_password = $_POST['com_pass'];
        if(empty($_POST['com_pass'])){
            $error['comfarm_password']= "*Required";
        }

        $conditation = $_POST['conditation'] ?? '';
        if(empty($_POST['conditation'])){
            $error['conditation']= "please read the trums & condation and check the box. Thank you!";
        }

        //comfarm password
        $match_pass = ($password === $comfarm_password) ? "" : " Password not match";

        if(count($error) == 0) {
            $msg = " <p class = 'alert alert-success'> Sign up successfully! <a href=\"#\">Log in</a> please. </p>";
        }

       

    }



    
    