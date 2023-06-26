<?php require_once "index1.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    
    <!-- ===== Iconscout CSS ===== -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

    <!-- ===== CSS ===== -->
    <link rel="stylesheet" href="style.css">
    <title>Forgot Password</title>   
    
</head>
<body>
    <div class="container">
        <div class="forms">
            <div class="form login">
                <span class="title">Forgot Password</span>

                <form action="reset-code.php" method="POST">
                     <?php
                        if(count($errors) > 0){
                            ?>
                            <div class="alert alert-danger text-center">
                                <?php 
                                    foreach($errors as $error){
                                        echo $error;
                                    }
                                ?>
                            </div>
                            <?php
                        }
                    ?>
                    <div class="input-field">
                        <input  type="email" name="email" placeholder="Enter email address" required value="<?php echo $email ?>">
                        <i class="uil uil-envelope icon"></i>
                    </div>
                    

                    <div class="input-field button">
                        <input type="submit" name="check-email" value="Continue" >
                    </div>
                </form>

                
            </div>

            
            
        </div>
    </div>

    <script src="scriptjs.js"></script>

</body>
</html>