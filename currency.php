<?php
    require_once "./assect/app/function.php";

    //get data
    if(isset($_POST['submit'])) {
        $ammount = $_POST['ammount'];
        $currency = $_POST['currency'] ?? '';
        
        if(empty($ammount) || empty($currency)) {
            $msg = alertMsg("All field are required!");
        }

        $output = convert($ammount, $currency);
        

    }



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Currency Converter</title>

     <!-- bootstrap css CDN-->
     <link rel="stylesheet" href="./assect/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

</head>
<body>
    
<div class="content w-50 mx-auto my-5 text-center">
    <div class="card">
        <div class="card-header">
            <h2>Currency Converter</h2>
        </div>
        
        <div class="card-body">
        <?php echo $msg ?? ''?>
            <form action="" method="POST">
                <div class="form-group">
                    <lavel>Ammount </lavel>
                    <input name="ammount" type="text" class= "form-control" value="<?php echo old('ammount') ?>">
                </div>
                <div class="form-group">
                    
                    <input <?php echo old('currency') == "USD" ? "checked" : "" ?> name="currency" id="USD" type="radio" value="USD"  > <label for ="USD">USD</label>
                    <input <?php echo old('currency') == "CAD" ? "checked" : "" ?> name="currency" id="CAD" type="radio" value="CAD"  > <label for ="CAD">CAD</label>
                    <input <?php echo old('currency') == "POUND" ? "checked" : "" ?> name="currency" id="POUND" type="radio" value="POUND"  > <label for ="POUND">POUND</label>
                    <input <?php echo old('currency') == "EURO" ? "checked" : "" ?> name="currency" id="EURO" type="radio" value="EURO"  > <label for ="EURO">EURO</label>
                    <input <?php echo old('currency') == "WON" ? "checked" : "" ?> name="currency" id="WON" type="radio" value="WON"  > <label for ="WON">WON</label>
                
                </div>

                <div class="form-group">
                    <input name="submit" type="submit" class="btn btn-primary" value="Convert">
                </div>
            </form>
            

        </div>
        <div class="card-footer">
            <strong><?php echo $output ?? ''; ?></strong>
        </div>
    </div>
</div>



    <!-- javascript cdn -->
    <script src="./assect/js/jquery.slim.min.js"></script>
    <script src="./assect/js/bootstrap.bundle.min.js" ></script>
</body>
</html>