<?php require_once "index1.php"; ?>
<?php 
$email = $_SESSION['email'];
if($email == false){
  header('Location: index.php');
}
?>
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
    <title>User otp</title>
    </head>
<body>
    <div class="container">
        <div class="forms">
            <div class="form login">
                <span class="title">Code Verification</span>

                <form action="user-otp.php" method="POST">
                      <?php 
                    if(isset($_SESSION['info'])){
                        ?>
                        <div class="alert alert-success text-center">
                            <?php echo $_SESSION['info']; ?>
                        </div>
                        <?php
                    }
                    ?>
                    <?php
                    if(count($errors) > 0){
                        ?>
                        <div class="alert alert-danger text-center">
                            <?php
                            foreach($errors as $showerror){
                                echo $showerror;
                            }
                            ?>
                        </div>
                        <?php
                    }
                    ?>
                    <div class="input-field">
                        <input  type="number" name="otp" placeholder="Enter verification code" required>
                        <!--<i class="uil uil-envelope icon"></i>-->
                    </div>
                    

                    <div class="input-field button">
                        <input type="submit" name="check" value="Submit" >
                    </div>
                </form>

                
            </div>

            
            
        </div>
    </div>

    <script src="scriptjs.js"></script>

</body>
</html>