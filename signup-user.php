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
    <link rel="stylesheet" href="singup_1.css">
         
    <title>Signup User</title>

</head>
<body>
      <div class="container">
        <div class="forms">
            <div class="form login">
                <span class="title">Signup Form</span>

                <form action="signup-user.php" method="POST">
                   <?php
                    if(count($errors) == 1){
                        ?>
                        <div class="alert alert-danger text-center">
                            <?php
                            foreach($errors as $showerror){
                                echo $showerror;
                            }
                            ?>
                        </div>
                        <?php
                    }elseif(count($errors) > 1){
                        ?>
                        <div class="alert alert-danger">
                            <?php
                            foreach($errors as $showerror){
                                ?>
                                <li><?php echo $showerror; ?></li>
                                <?php
                            }
                            ?>
                        </div>
                        <?php
                    }
                    ?>
                   <div class="input-field">
                        <input type="text" name="name" placeholder="Full Name" required value="<?php echo $name ?>">
                        
                        <i class="uil uil-user icon"></i>
                    </div>
                    <div class="input-field">
                        <input type="email" name="email" placeholder="Email Address" required value="<?php echo $email ?>">
                        <i class="uil uil-envelope icon"></i>
                    </div>
                    <div class="input-field">
                        <input type="password" name="password" placeholder="Password" required>
                        <i class="uil uil-lock icon"></i>
                        <i class="uil uil-eye-slash showHidePw"></i>
                    </div>
                    <div class="input-field">
                        <input type="password" name="cpassword" placeholder="Confirm Password" required>
                        <i class="uil uil-lock icon"></i>
                        <i class="uil uil-eye-slash showHidePw"></i>
                    </div>

                   
                        

                    <div class="input-field button">
                        <input type="submit" name="signup" value="Signup" >
                    </div>
                </form>

                <div class="login-signup">
                    <span class="text">Already a member?
                        <a href="index.php" class="text signup-link">Login here</a>
                    </span>
                </div>
            </div>

            
            
        </div>
    </div>

    <script src="scriptjs.js"></script>
  
</body>
</html>